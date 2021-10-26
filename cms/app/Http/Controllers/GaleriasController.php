<?php

namespace App\Http\Controllers;

use App\Galerias;
use Illuminate\Http\Request;
use App\Proyectos;
use Illuminate\Support\Facades\Storage;

class GaleriasController extends Controller
{

     public function __construct()
   {
    $this->middleware('auth');

   }
   
    public function create($id)
    {
        $proyecto = Proyectos::find($id);

        $galerias = Galerias::all()->where('proyecto_id', $id);


        return view('modulos.galeria')->with('proyecto' , $proyecto)->with('galerias', $galerias);
    }



    
    public function store(Request $request, $id)
    {
        $proyecto = Proyectos::find($id);

        $rutaImg = $request['imagen']->store('galeria-'.$proyecto->titulo, 'public');

        Galerias::create([

            'proyecto_id' => $proyecto->id,
            'imagen' => $rutaImg
        ]);

        return redirect('galeria/'.$proyecto->id);

    }

    
    public function destroy($id)
    {
        $galeria = Galerias::find($id);

        if(Storage::delete('public/'.$galeria->imagen)){

            Galerias::destroy($id);
        }

        return redirect('galeria/'.$galeria->proyecto_id);

        }
    }
