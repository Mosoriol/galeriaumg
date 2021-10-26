<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasB extends Model
{
    protected $table = "categoriasb";
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
