<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function inicio(){
        $slide = Slide::all();
        $categoriasproyectos = DB::select('select * from categoriaproyectos');

        return view('frontend.inicio')->with('slide', $slide)->with('categoriasproyectos' , $categoriasproyectos);

    }
}
