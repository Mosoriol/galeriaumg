<?php

namespace App\Http\Controllers;

use App\Categoriasproyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasproyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categoriasproyectos = categoriasproyectos::all();

        return view('modulos.categoriasproyectos')->with('categoriasproyectos', $categoriasproyectos);
    }

    


    public function store(Request $request)
    {

     Categoriasproyectos::create(['nombre' => request('nombre')]);

        return redirect('categoriasproyectos');
    }

   


    public function update(Request $request, Categoriasproyectos $categoriasproyectos)
    {
        DB::table('categoriaproyectos')->where('id', request('id'))->update(['nombre' => request('nombre')]);

        return redirect('categoriasproyectos');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoriasproyectos  $categoriasproyectos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            DB::table('categoriaproyectos')->whereId($id)->delete();

            return redirect('categoriasproyectos');

    }
}
