<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListService extends Model
{
    protected $fillable = ['id_client', 'id_car', 'id_service'];
    protected $guarded = ['id', 'created_at'];
    protected $table = 'washes';
}
