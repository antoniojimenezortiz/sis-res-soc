<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';
    //PK
    protected $primary_key = 'idCargo';
    //Atributos
    protected $attributes = [
            'nombre',
            'estado'
    ];
}
