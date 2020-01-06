<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{   
     //Tabla en base de datos
    protected $table = 'areas';
    //PK
    protected $primary_key = 'id';
    //Atributos
    protected $fillable = [
            'descripcion',
            'estado'
    ];
}
