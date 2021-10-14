<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerias extends Model
{
        protected $table = 'galeria';

        public $timestamps = false;

        protected  $fillable = [
           'imagen',
           'proyecto_id'
        ];


}
