<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';
    //PK
    protected $primary_key = 'id';
    //Atributos
    protected $fillable = [
            'nombre',
            'estado'
    ];
}
