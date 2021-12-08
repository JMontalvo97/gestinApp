<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Proveedores extends Model
{
    protected $table='proveedores';
    protected $primarykey="id";
    protected $fillable = [ 
        'nombre' ,'rfc','celular','direccion'
    ];

    public $timestamps = false;
}
