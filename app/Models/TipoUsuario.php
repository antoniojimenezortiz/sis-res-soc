<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'TipoUsuario';
    //PK
    protected $primary_key = 'idTipoUsuario';
    //Atributos
    protected $fillable = [
            'id',
            'descripcion',
            'estado'
    ];
}
