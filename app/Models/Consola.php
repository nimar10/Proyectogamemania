<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consola extends Model
{
    use HasFactory;

    protected $fillable=['nombre','marca','modelo','descripcion','imagen'];


    public function scopeConsola($query, $v){
        if(!isset($v)){
            return $query->where('nombre', 'like', '%');
        }

        if ($v=='%'){
            return $query->where('nombre', 'like', $v);
        }

        return $query->where('nombre', $v);
    }
}
