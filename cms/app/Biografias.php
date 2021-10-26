<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biografias extends Model
{
     protected $table = 'biografias';
    protected $fillable = [
        'titulo' , 'portada' , 'id_categoriab' , 'descripcion' ,'linkvideo'

    ];

    public $timestamps = false;

    public function categoriab()
    {
        return $this->belongsTo(CategoriasB::class, 'id_categoriab');
    }
}
