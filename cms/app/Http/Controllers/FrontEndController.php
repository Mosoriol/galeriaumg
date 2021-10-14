<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\DB;
use App\Proyectos;
use App\Galerias;
use App\Mensaje;

class FrontEndController extends Controller
{
    public function inicio(){

        $slide = Slide::all();


        $proyectos = Proyectos::all()->sortByDesc('id')->take(2);

        return view('frontend.inicio')->with('slide', $slide)->with('proyectos' , $proyectos);

    }
    public function Proyectos()
    {

        $proyectos = Proyectos::all();

        return view('frontend.Proyectos-todos')->with('proyectos' , $proyectos);
    }


    public function Proyecto($id)

    {

        $proyecto = Proyectos::find($id);

        $galerias = DB::select('select * from galeria where proyecto_id = '.$id);

        return view('frontend.Proyecto')->with('proyecto' , $proyecto)->with('galerias' , $galerias);

    }

    public function Mensajes(Request $request)
    {

        $datos = request()->validate([
            'nombre'=>['required', 'string','max:255'],
            'email'=>['required', 'string','max:255'],
            'mensaje'=>['required', 'string']
        ]);

        Mensaje::create([

            'nombre' => $datos["nombre"],
            'email' => $datos["email"],
            'mensaje' => $datos["mensaje"],
            'leido' => 'No',
        ]);

        return redirect('/');

    }

}
