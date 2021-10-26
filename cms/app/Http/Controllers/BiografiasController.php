<?php

namespace App\Http\Controllers;

use App\Biografias;
use Illuminate\Http\Request;
use App\CategoriasB;
use Illuminate\Support\Facades\Storage;

class BiografiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biografias = Biografias::all();

        return view('modulos.biografias')->with('biografias' , $biografias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categoriasb = CategoriasB::all();

        return view('modulos.crear-biografia')->with('categoriasb' , $categoriasb);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rutaImg = $request['portada']->store('biografias' , 'public');

        $datos = request();

        Biografias::create([
            'titulo'=>$datos["titulo"],
            'id_categoriab'=>$datos['id_categoriab'],
            'descripcion'=>$datos["descripcion"],
            'linkvideo'=>$datos["linkvideo"],
            'portada'=>$rutaImg
        ]);

        return redirect('biografias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biografias  $biografias
     * @return \Illuminate\Http\Response
     */
    public function show(Biografias $biografias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biografias  $biografias
     * @return \Illuminate\Http\Response
     */
    public function edit(Biografias $biografias)
    {
         $categoriasb = CategoriasB::all();
        return view('modulos.editar-biografia' , compact('biografias' , 'categoriasb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biografias  $biografias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biografias $biografias)
    {
        $datos = request();

        $biografias->titulo = $datos['titulo'];
         $biografias->descripcion = $datos['descripcion'];
          $biografias->id_categoriab = $datos['id_categoriab'];

          if(request('portadaNueva')){

            Storage::delete('public/'.$biografias->portada);

            $rutaImg = $request['portadaNueva']->store('biografias' , 'public');

            $biografias->portada = $rutaImg;

          }

          $biografias->save();
          return redirect('biografias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biografias  $biografias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biografias $biografias)
    {
         if(Storage::delete('public/'.$biografias->portada)){

            Biografias::destroy($biografias->id);
        }

        return redirect('biografias');
    }
}
