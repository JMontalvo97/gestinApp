<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class empleadomodelo extends Model
{
    //use HasFactory;
    protected $table='empleados';
    protected $primarykey="id";
    protected $fillable = [ 
        "nombres,apellidos,curp,edad,celular"
    ];

    public $timestamps = false;
}

