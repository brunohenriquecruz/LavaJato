<?php

namespace App\Http\Controllers;


use App\UserCad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserCadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usercad');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
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
        
        $user = new UserCad;
        $p = $request->password;
        $pass = Hash::make($p);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $pass;
        $user->save();
        return redirect()->route('home')->with('message', 'Colaborador cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserCad  $userCad
     * @return \Illuminate\Http\Response
     */
    public function show(UserCad $userCad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserCad  $userCad
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCad $userCad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserCad  $userCad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCad $userCad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserCad  $userCad
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCad $userCad)
    {
        //
    }
}
