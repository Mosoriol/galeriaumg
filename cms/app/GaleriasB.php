<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriasB extends Model
{
     protected $table = 'galeriab';

        public $timestamps = false;

        protected  $fillable = [
           'imagen',
           'biografia_id'
        ];
}
