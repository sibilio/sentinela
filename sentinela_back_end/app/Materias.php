<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $fillable = ['nome', 'ciclo', 'curso_id'];
}
