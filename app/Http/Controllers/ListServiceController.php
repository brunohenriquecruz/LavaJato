<?php

namespace App\Http\Controllers;

use App\ListService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(strlen($id) > 12) {
            $query = DB::table('washes')->join('clients AS cli', 'washes.id_client', '=', 'cli.id')
                                       ->join('cars AS car', 'washes.id_car', '=', 'car.id')
                                       ->join('services AS ser', 'washes.id_service', '=', 'ser.id')
                                       ->select(DB::raw('washes.id, cli.name as cliente, cli.cpf as cpf,
                                                         car.model as carro, car.plate as placa, car.color as cor,
                                                         ser.name as servico, ser.price as valor, washes.created_at as data'))
                                       ->where('cli.cpf', $id)->get();
        return view('listservice', compact('query'));
        } else {
            $query = DB::table('washes')->join('clients AS cli', 'washes.id_client', '=', 'cli.id')
                                       ->join('cars AS car', 'washes.id_car', '=', 'car.id')
                                       ->join('services AS ser', 'washes.id_service', '=', 'ser.id')
                                       ->select(DB::raw('washes.id, cli.name as cliente, cli.cpf as cpf,
                                                         car.model as carro, car.plate as placa, car.color as cor,
                                                         ser.name as servico, ser.price as valor, washes.created_at as data'))
                                       ->where('washes.id', $id)->get();
        return view('listservice', compact('query'));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListService  $listService
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $id = $request->id;
        // $r = listService::mostrar();
        // return $r;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListService  $listService
     * @return \Illuminate\Http\Response
     */
    public function edit(ListService $listService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListService  $listService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListService $listService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListService  $listService
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListService $listService)
    {
        //
    }
}
