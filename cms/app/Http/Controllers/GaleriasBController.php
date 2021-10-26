<?php

namespace App\Http\Controllers;

use App\GaleriasB;
use Illuminate\Http\Request;
use App\Biografias;
use Illuminate\Support\Facades\Storage;

class GaleriasBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $biografia = Biografias::find($id);

        $galeriasb= GaleriasB::all()->where('biografia_id', $id);


        return view('modulos.galeriab')->with('biografia' , $biografia)->with('galeriasb', $galeriasb);
    }

    


    public function store(Request $request, $id)
    {
        $biografia = Biografias::find($id);

        $rutaImg = $request['imagen']->store('galeriab-'.$biografia->titulo, 'public');

        GaleriasB::create([

            'biografia_id' => $biografia->id,
            'imagen' => $rutaImg
        ]);

        return redirect('galeriab/'.$biografia->id);
    }




    
    public function destroy($id)
    {
        $galeriab = GaleriasB::find($id);

        if(Storage::delete('public/'.$galeriab->imagen)){

            GaleriasB::destroy($id);
        }

        return redirect('galeriab/'.$galeriab->biografia_id);

    
    }
}
