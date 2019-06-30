<?php

namespace App\Http\Controllers;

use App\ClientCad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientCadController extends Controller
{
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientcad');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:20', 'unique:clients'],
            'birthdate' => ['required', 'date', 'max:255'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'birthdate' => $data['birthdate'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new ClientCad;
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->birthdate = $request->birthdate;
        $client->save();
        return redirect()->route('home')->with('message', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = ClientCad::findOrFail($id);
        return view('home', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = ClientCad::findOrFail($id);
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->birthdate = $request->birthdate;
        $client->save();
        return redirect()->route('home')->with('message', "Cliente Atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = ClientCad::findOrFail($id);
        $client->delete();
        return redirect()->route('home')->with('alert-success', 'Cliente removido da base de dados!');
    }
}
