<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListService extends Model
{
    protected $fillable = ['id_client', 'id_car', 'id_service'];
    protected $guarded = ['id', 'created_at'];
    protected $table = 'washes';

    public function mostrar($id)
    {
        $query = DB::table('washes')->select(DB::raw('washes.id, washes.id_client'))
                                    ->get();
        return $query;
    }
}
