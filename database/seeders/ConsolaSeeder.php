<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consola;

class ConsolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consola::create([
            'nombre'=>'PS4',
            'marca'=>'Sony',
            'modelo'=>'Pro',
            'descripcion'=>'PS4 es un sistema de entretenimiento digital
             y la cuarta consola de sobremesa desarrollada por Sony Computer Entertainment.
             Cuenta con un procesador APU de ocho núcleos x86-64 Jaguar desarrollado por AMD.',
            'imagen'=>'img/consolas/ps4pro.jpg'
        ]);

        Consola::create([
            'nombre'=>'XBOX ONE',
            'marca'=>'Microsoft',
            'modelo'=>'One S',
            'descripcion'=>'El Xbox One S es la reedición de la consola de actual generación de Microsoft.
             No será competencia del Xbox One original —ya que se venderán a la par y no la reemplazará—,
             pero es importante señalar las diferencias entre ambas',
            'imagen'=>'img/consolas/xboxs.jpg'
        ]);

        Consola::create([
            'nombre'=>'Nintendo Switch',
            'marca'=>'Nintendo',
            'modelo'=>'V2',
            'descripcion'=>'Nintendo Switch es la octava consola de videojuegos principal desarrollada por Nintendo.
             Nintendo considera a Switch una consola híbrida.
            Se puede utilizar como consola de sobremesa con la unidad principal insertada en una estación
            de acoplamiento para conectarla con un televisor.',
            'imagen'=>'img/consolas/switch.jpg'
        ]);

        Consola::create([
            'nombre'=>'Nintendo Switch',
            'marca'=>'Nintendo',
            'modelo'=>'V2',
            'descripcion'=>'Nintendo Switch es la octava consola de videojuegos principal desarrollada por Nintendo.
             Nintendo considera a Switch una consola híbrida.
            Se puede utilizar como consola de sobremesa con la unidad principal insertada en una estación
            de acoplamiento para conectarla con un televisor.',
            'imagen'=>'img/consolas/switch.jpg'
        ]);
    }
}
