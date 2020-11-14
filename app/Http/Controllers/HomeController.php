<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use App\Models\Consola;
use App\Models\Videojuego;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::all();
        $consolas=Consola::all();
        $videojuegos=Videojuego::all();
        $accesorios=Accesorio::all();

        return view('home', compact('consolas','videojuegos','accesorios','users'));
    }

}