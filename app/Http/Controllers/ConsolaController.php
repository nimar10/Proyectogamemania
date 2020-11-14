<?php

namespace App\Http\Controllers;

use App\Models\Consola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ConsolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consolas=Consola::all();
        return view('consolas.index', compact('consolas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consolas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion de campos consola

        $request->validate([
            'nombre'=>['required'],
            'marca'=>['required'],
            'modelo'=>['required'],
            'descripcion'=>['required']
        ]);

        //Validacion de la imagen de la consola

        if($request->has('imagen')){
            $request->validate([
                'imagen'=>['image']
            ]);

            $file=$request->file('imagen');

            $nombre='consolas/'.time().' '.$file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));

            $consola=Consola::create($request->all());
            $consola->update(['imagen'=>"img/$nombre"]);
        }else{
            Consola::create($request->all());
        }

        return redirect()->route('consolas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consola  $consola
     * @return \Illuminate\Http\Response
     */
    public function show(Consola $consola)
    {
        return view('consolas.detalle', compact('consola'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consola  $consola
     * @return \Illuminate\Http\Response
     */
    public function edit(Consola $consola)
    {
        return view('consolas.edit', compact('consola'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consola  $consola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consola $consola)
    {
           //validacion de campos

           $request->validate([
            'nombre'=>['required'],
            'marca'=>['required'],
            'modelo'=>['required'],
            'descripcion'=>['required']
        ]);

        //Validacion de la imagen

        if($request->has('imagen')){
            $request->validate([
                'imagen'=>['image']
            ]);

            $file=$request->file('imagen');

            $nombre='consolas/'.time().' '.$file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));

            if(basename($consola->imagen)!='consola.jpg'){
                unset($consola->imagen);
            }

            $consola->update($request->all());
            $consola->update(['imagen'=>"img/$nombre"]);

        }else{
            $consola->update($request->all());
        }


        return redirect()->route('consolas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consola  $consola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consola $consola)
    {
        //Borrado de la imagen de la consola
        $imagen=$consola->imagen;
        if(basename($imagen)!="consola.jpg"){
            unset($imagen);
        }

        $consola->delete();
        return redirect()->route('consolas.index');
    }
}
