<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCad extends Model
{

    protected $fillable = ['name', 'email', 'password'];
    protected $guarded = ['id', 'created_at'];
    protected $table = 'users';
}
