<?php

namespace App\Http\Controllers;

use App\Proyectos;
use Illuminate\Http\Request;
use App\Categoriasproyectos;
use Illuminate\Support\Facades\Storage;
class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyectos::all();

        return view('modulos.proyectos')->with('proyectos' , $proyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriasproyectos = Categoriasproyectos::all();

        return view('modulos.crear-proyecto')->with('categoriasproyectos' , $categoriasproyectos);
    }

    


    public function store(Request $request)
    {
        $rutaImg = $request['portada']->store('proyectos' , 'public');

        $datos = request();

        Proyectos::create([
            'titulo'=>$datos["titulo"],
            'id_categoriaproyectos'=>$datos['id_categoriaproyectos'],
            'descripcion'=>$datos["descripcion"],
            'portada'=>$rutaImg
        ]);

        return redirect('proyectos');
    }



    public function edit(Proyectos $proyectos)
    {
        $categoriasproyectos = Categoriasproyectos::all();
        return view('modulos.editar-proyecto' , compact('proyectos' , 'categoriasproyectos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyectos $proyectos)
    {
        $datos = request();

        $proyectos->titulo = $datos['titulo'];
         $proyectos->descripcion = $datos['descripcion'];
          $proyectos->id_categoriaproyectos = $datos['id_categoriaproyectos'];

          if(request('portadaNueva')){

            Storage::delete('public/'.$proyectos->portada);

            $rutaImg = $request['portadaNueva']->store('proyectos' , 'public');

            $proyectos->portada = $rutaImg;

          }

          $proyectos->save();
          return redirect('proyectos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyectos $proyectos)
    {
        if(Storage::delete('public/'.$proyectos->portada)){

            Proyectos::destroy($proyectos->id);
        }

        return redirect('proyectos');
    }
}
