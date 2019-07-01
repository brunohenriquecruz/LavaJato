<?php
namespace App\Http\Controllers;
use App\ServiceCad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class ServiceCadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = DB::table('services')->get();
        return view('servicecad', compact('service'));
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'float',]
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
            'price' => $data['price']
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
        $service = new ServiceCad;
        $service->name = $request->name;
        $service->price = $request->price;
        $service->save();
        return redirect()->route('home')->with('message', 'Serviço cadastrado com sucesso!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        $service = ServiceCad::findOrFail($id);
        return view('home', compact('service'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        $service = ServiceCad::findOrFail($id);
        $service->name = $request->name;
        $service->price = $request->price;
        $service->save();
        return redirect()->route('home')->with('message', "Serviço Atualizado com sucesso!");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        $service = ServiceCad::findOrFail($id);
        $service->delete();
        return redirect()->route('home')->with('alert-success', 'Serviço removido da base de dados!');
    }
}