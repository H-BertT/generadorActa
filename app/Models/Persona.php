<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'primer_apellido',
        'segundo_apellido',
        'entidad_nacimiento',
        'municipio_nacimiento',
        'nacionalidad',
        'estado_civil',
        'sexo',
        'edad',
        'padre',
        'madre',
        'nacionalidad_padre',
        'nacionalidad_madre',
    ];
}
