<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WashCad extends Model
{
    protected $fillable = ['id_client', 'id_car', 'id_service'];
    protected $guarded = ['id', 'created_at'];
    protected $table = 'washes';
}
