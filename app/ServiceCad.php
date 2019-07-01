<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ServiceCad extends Model
{
    protected $fillable = ['name', 'price'];
    protected $guarded = ['id', 'created_at'];
    protected $table = 'services';
}