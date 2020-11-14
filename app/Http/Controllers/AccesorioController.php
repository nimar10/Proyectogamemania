<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AccesorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesorios=Accesorio::all();
        return view('accesorios.index', compact('accesorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accesorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validacion de campos accesorio

         $request->validate([
            'nombre'=>['required'],
            'marca'=>['required'],
            'modelo'=>['required'],
            'descripcion'=>['required']
        ]);

        //Validacion de la imagen del accesorio
        if($request->has('imagen')){
            $request->validate([
                'imagen'=>['image']
            ]);

            $file=$request->file('imagen');

            $nombre='accesorios/'.time().' '.$file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));

            $accesorio=Accesorio::create($request->all());
            $accesorio->update(['imagen'=>"img/$nombre"]);
        }else{
            Accesorio::create($request->all());
        }

        return redirect()->route('accesorios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function show(Accesorio $accesorio)
    {
        return view('accesorios.detalle', compact('accesorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesorio $accesorio)
    {
        return view('accesorios.edit', compact('accesorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesorio $accesorio)
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

                    $nombre='accesorios/'.time().' '.$file->getClientOriginalName();
                    Storage::disk('public')->put($nombre, \File::get($file));

                    if(basename($accesorio->imagen)!='accesorio.jpg'){
                        unset($accesorio->imagen);
                    }

                    $accesorio->update($request->all());
                    $accesorio->update(['imagen'=>"img/$nombre"]);

                }else{
                    $accesorio->update($request->all());
                }

                $accesorio->update();
                return redirect()->route('accesorios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesorio $accesorio)
    {
          //Borrado de la imagen del accesorio
          $imagen=$accesorio->imagen;
          if(basename($imagen)!="accesorio.jpg"){
              unset($imagen);
          }

          $accesorio->delete();
          return redirect()->route('accesorios.index');
    }
}