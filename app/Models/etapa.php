<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class etapa extends Model
{
    protected $table = 'etapa';
    //PK
    protected $primary_key = 'id';
    //Atributos
    protected $fillable = [
            'nombre',
            'area',
            'fecha_inicio',
            'fecha_fin',
            'estado',
            'programa'
    ];
}
