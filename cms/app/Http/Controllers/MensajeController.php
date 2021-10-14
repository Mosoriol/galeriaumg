<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Mensaje::all();

        return view('modulos.mensajes')->with('mensajes' , $mensajes);
    }

    
    public function show($id)

        {
        DB::update('update mensajes set leido = "Si" where id ='.$id);
    
        $mensaje = Mensaje::find($id);

        return view('modulos.leer-mensaje')->with('mensaje' , $mensaje);
    }

    
}
