<?php

namespace App\Http\Controllers;

use App\CategoriasB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categoriasb = CategoriasB::all();

        return view('modulos.categoriasb')->with('categoriasb', $categoriasb);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CategoriasB::create(['nombre' => request('nombre')]);

        return redirect('categoriasb');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriasB  $categoriasB
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriasB $categoriasB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriasB  $categoriasB
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriasB $categoriasB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriasB  $categoriasB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriasB $categoriasb)
    {
       DB::table('categoriasb')->where('id', request('id'))->update(['nombre' => request('nombre')]);

        return redirect('categoriasb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriasB  $categoriasB
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categoriasb')->whereId($id)->delete();

            return redirect('categoriasb');
    }
}
