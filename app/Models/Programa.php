<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';
    //PK
    protected $primary_key = 'id';
    //Atributos
    protected $fillable = [
            'nombre',
            'anio',
            'estado'
    ];
}
