<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    private $totalPage = 5;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $client = DB::table('clients')->count('id');
        $client = DB::table('clients')->select(DB::raw('count(id) as id_client'))->get();
        $service = DB::table('services')->select(DB::raw('count(id) as id_service'))->get();
        $wash = DB::table('washes')->join('services', 'washes.id_service', '=', 'services.id')
                                   ->select(DB::raw('count(services.id) as total, sum(services.price) as price'))
                                   ->where('washes.created_at', '>', DB::raw('(NOW() - INTERVAL 30 DAY)'))
                                   ->get();
        $washYear = DB::table('washes')->join('services', 'washes.id_service', '=', 'services.id')
                                       ->select(DB::raw('count(services.id) as total, sum(services.price) as price'))
                                       ->where('washes.created_at', '>', DB::raw('(NOW() - INTERVAL 1 YEAR)'))
                                       ->get();

        $query = DB::table('washes')->join('clients AS cli', 'washes.id_client', '=', 'cli.id')
                                       ->join('cars AS car', 'washes.id_car', '=', 'car.id')
                                       ->join('services AS ser', 'washes.id_service', '=', 'ser.id')
                                       ->select(DB::raw('washes.id, cli.name as cliente, cli.cpf as cpf,
                                                         car.model as carro, car.plate as placa, car.color as cor,
                                                         ser.name as servico, ser.price as valor, washes.created_at as data'))
                                       ->orderBy('washes.created_at', 'DESC')
                                       ->paginate($this->totalPage);
        $datatable = $query;

        return view('home', compact('client', 'service', 'wash', 'washYear', 'datatable'));
    } 
}
