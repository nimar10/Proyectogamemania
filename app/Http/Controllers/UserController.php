<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('usuarios.index', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $user=User::all();
        return view('usuarios.perfil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //validacion de campos

        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],

        ]);

        //Validacion de la imagen

        if ($request->has('imagen')) {
            $request->validate([
                'imagen' => ['image']
            ]);

            $file = $request->file('imagen');

            $nombre = 'usuarios/' . time() . ' ' . $file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));

            if (basename($user->imagen) != 'user.jpg') {
                unset($user->imagen);
            }

            $user->update($request->all());
            $user->update(['imagen' => "img/$nombre"]);
        } else {
            $user->update($request->all());
        }


        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //Borrado de la imagen de la user
        $imagen = $user->imagen;
        if (basename($imagen) != "usuario.jpg") {
            unset($imagen);
        }

        $user->delete();
        return redirect()->route('usuarios.index');
    }

    public function perfil(User $user)
    {
        $users = User::all();
        return view('usuarios.perfil', compact('users'));
    }
}
