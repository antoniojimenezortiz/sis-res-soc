<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    //Tabla en base de datos
    protected $table = 'facultad';
    //PK
    protected $primary_key = 'id';
    //Atributos
    protected $fillable = [
            'nombre',
            'estado'
    ];
}
