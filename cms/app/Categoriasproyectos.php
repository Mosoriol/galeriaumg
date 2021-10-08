<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriasproyectos extends Model
{
    protected $table = "categoriaproyectos";
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
