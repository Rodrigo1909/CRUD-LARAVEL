<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niko extends Model
{
    protected $table = 'topicos2';
    protected $fillable = [
        'nombre',
        'apellidoP',
        'apellidoM',
        'correo_electronico',
        'edad',
        'telefono',
    ];
    protected $attributes = [
        'nombre' => '',
        'apellidoP' => '',
        'apellidoM' => '',
        'correo_electronico' => '',
        'edad' => '',
        'telefono'=> '',
    ];
}
