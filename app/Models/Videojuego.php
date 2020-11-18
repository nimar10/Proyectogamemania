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

    //Filtracion por marcas de consola
    public function scopeConsola($query, $v){
        if (!isset($v) || $v == null) {
            return $query->where('nombre', 'like', '%');

        }
        if ($v == '%') {
            return $query->where('consola_id', 'like', $v);

        }

        return $query->where('consola_id', $v);
    }

    //Filtracion por videojuego

    public function scopeVideojuego($query, $v){
        if(!isset($v)){
            return $query->where('nombre', 'like', '%');
        }
        if($v=="%"){
            return $query->where('nombre', 'like', $v);
        }
        return $query->where('nombre', $v);
    }

}
