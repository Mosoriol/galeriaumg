<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\DB;
use App\Proyectos;
use App\Pensum;
use App\Historia;
use App\Biografias;
use App\Galerias;
use App\GaleriasB;
use App\Mensaje;
use App\Inicio;

class FrontEndController extends Controller
{
    public function inicio(){

        $slide = Slide::all();


        $proyectos = Proyectos::all()->sortByDesc('id')->take(2);

        $biografias = Biografias::all()->sortByDesc('id')->take(2);

        $inicio = Inicio::find(1);

        return view('welcome')->with('slide', $slide)->with('proyectos' , $proyectos)->with('biografias' , $biografias)->with('inicio', $inicio);

    }


            public function Historia()
        {
              $historia = "historia";
               $inicio = Inicio::find(1);
             
                return view('frontend.Historia')->with('historia' , $historia)->with('inicio', $inicio);
        }

    public function Pensum()
        {
              $pensum = "pensum";
               $inicio = Inicio::find(1);
             
                return view('frontend.Pensum')->with('pensum' , $pensum)->with('inicio', $inicio);
        }


    public function Proyectos()
    {

        $proyectos = Proyectos::all();
         $inicio = Inicio::find(1);

        return view('frontend.Proyectos-todos')->with('proyectos' , $proyectos)->with('inicio', $inicio);
    }

     public function Proyecto($id)

    {

        $proyecto = Proyectos::find($id);
         $inicio = Inicio::find(1);

        $galerias = DB::select('select * from galeria where proyecto_id = '.$id);

        return view('frontend.Proyecto')->with('proyecto' , $proyecto)->with('galerias' , $galerias)->with('inicio', $inicio);

    }


     public function Biografias()
    {

        $biografias = Biografias::all();
         $inicio = Inicio::find(1);

        return view('frontend.Biografias-todos')->with('biografias' , $biografias)->with('inicio', $inicio);
    }


     public function Biografia($id)

        {

            $biografia = Biografias::find($id);

             $inicio = Inicio::find(1);

            $galeriasb = DB::select('select * from galeriab where biografia_id = '.$id);

            return view('frontend.Biografia')->with('biografia' , $biografia)->with('galeriasb' , $galeriasb)->with('inicio', $inicio);

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
