<?php

namespace App\Models;
use App\Model\Consola;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    protected $fillable=['nombre','compañia','descripcion','imagen','consola_id'];

    public function consola(){
        return $this->belongsTo('App\Models\Consola');
    }
}
