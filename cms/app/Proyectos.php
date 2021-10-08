<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $table = 'proyectos';
    protected $fillable = [
        'titulo' , 'portada' , 'id_categoriaproyectos' , 'descripcion' 

    ];

    public $timestamps = false;

    public function categoriaproyectos()
    {
        return $this->belongsTo(Categoriasproyectos::class, 'id_categoriaproyectos');
    }
}
