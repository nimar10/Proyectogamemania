<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use App\Models\Consola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideojuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consolas=Consola::all();
        $videojuegos=Videojuego::all();


        return view('videojuegos.index', compact('videojuegos','consolas'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consolas=Consola::all();
        return view('videojuegos.create', compact('consolas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion de campos del videojuego

        $request->validate([
            'nombre'=>['required'],
            'compañia'=>['required'],
            'descripcion'=>['required']
        ]);

        //Validacion de la imagen de la videojuego

        if($request->has('imagen')){
            $request->validate([
                'imagen'=>['image']
            ]);

            $file=$request->file('imagen');

            $nombre='videojuegos/'.time().' '.$file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));

            $videojuego=Videojuego::create($request->all());
            $videojuego->update(['imagen'=>"img/$nombre"]);
        }else{
            Videojuego::create($request->all());
        }

        return redirect()->route('videojuegos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function show(Videojuego $videojuego)
    {
        return view('videojuegos.detalle', compact('videojuego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function edit(Videojuego $videojuego)
    {
        $consolas=Consola::all();
        return view('videojuegos.edit', compact('videojuego','consolas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videojuego $videojuego)
    {
          //validacion de campos

          $request->validate([
            'nombre'=>['required'],
            'compañia'=>['required'],
            'descripcion'=>['required']
        ]);

        //Validacion de la imagen

        if($request->has('imagen')){
            $request->validate([
                'imagen'=>['image']
            ]);

            $file=$request->file('imagen');

            $nombre='videojuegos/'.time().' '.$file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));

            if(basename($videojuego->imagen)!='videojuego.jpg'){
                unset($videojuego->imagen);
            }

            $videojuego->update($request->all());
            $videojuego->update(['imagen'=>"img/$nombre"]);

        }else{
            $videojuego->update($request->all());
        }

        $videojuego->update();
        return redirect()->route('videojuegos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videojuego $videojuego)
    {
           //Borrado de la imagen del videojuego
           $imagen=$videojuego->imagen;
           if(basename($imagen)!="videojuego.jpg"){
               unset($imagen);
           }

           $videojuego->delete();
           return redirect()->route('videojuegos.index');

    }
}