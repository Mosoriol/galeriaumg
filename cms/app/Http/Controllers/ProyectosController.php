<?php

namespace App\Http\Controllers;

use App\Proyectos;
use Illuminate\Http\Request;
use App\Categoriasproyectos;
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




    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyectos $proyectos)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyectos $proyectos)
    {
        //
    }
}
