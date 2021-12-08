<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Producto extends Model
{
    protected $table='productos';
    protected $primarykey="id";
    protected $fillable = [ 
        'nombre' ,'cantidad','precio','proveedor'
    ];

    public $timestamps = false;
}
