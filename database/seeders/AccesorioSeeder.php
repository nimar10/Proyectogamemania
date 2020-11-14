<?php

namespace Database\Seeders;

use App\Models\Accesorio;
use Illuminate\Database\Seeder;

class AccesorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accesorio::create([
            'nombre'=>'Mando Dualshock',
            'marca'=>'Sony',
            'modelo'=>'4',
            'descripcion'=>'El DualShock 4 está equipado con un nuevo sensor de seis ejes para más sensibilidad
            y un touchpad ubicado en la parte superior del controlador. ... La idea, según Sony,
            es ofrecer a los jugadores formas totalmente nuevas para jugar e interactuar con los videojuegos.',
            'imagen'=>'img/accesorios/mando.jpg'
        ]);

        Accesorio::create([
            'nombre'=>'Auriculares Gaming',
            'marca'=>'Tritton',
            'modelo'=>'Karma',
            'descripcion'=>'Tu auricular gaming será un transductor de algo más que de música. Sonidos graves, agudos sin distorsión (drivers), sensibilidad del altavoz y frecuencia disponible,
            hacen que la calidad del sonido sea buena o, todo lo contrario',
            'imagen'=>'img/accesorios/auriculares.jpg'
        ]);

        Accesorio::create([
            'nombre'=>'Volante Gaming',
            'marca'=>'Ferrari',
            'modelo'=>'MK2',
            'descripcion'=>'Un volante de videojuegos (racing wheel en inglés),
             es un controlador de videojuego específicamente diseñado para su utilización en simuladores y videojuegos de carreras.
             Por lo general están formados por volante,
             palanca de marchas y pedales de acelerador, freno y, a veces, embrague.',
            'imagen'=>'img/accesorios/volante.jpg'
        ]);

        Accesorio::create([
            'nombre'=>'Gafas VR',
            'marca'=>'Samsung',
            'modelo'=>'V2019',
            'descripcion'=>'Las gafas de realidad virtual utilizan la tecnología generada por la propia consola. Además,
             en el caso de las Playstation VR incorporan luces de seguimiento LED
             y sensores de movimiento que actúan en conjunto con la PS Camera.',
            'imagen'=>'img/accesorios/gafasVR.jpg'
        ]);

        Accesorio::create([
            'nombre'=>'Carga Dualshock',
            'marca'=>'Sony',
            'modelo'=>'Cargador 4',
            'descripcion'=>'Este cargador está especialmente diseñado para controladores PS4, controladores PS4 Slim y controladores PS4 Pro.
            Esto le permite cargar 2 controladores al mismo tiempo. No solo un cargador, sino también un soporte para almacenar sus 2 controladores.
            Cuando se completa la carga, se apaga automáticamente y garantiza la seguridad. No te preocupes por el sobrecalentamiento.',
            'imagen'=>'img/accesorios/basecarga.jpg'
        ]);

        Accesorio::create([
            'nombre'=>'Camara',
            'marca'=>'Sony',
            'modelo'=>'V2.1',
            'descripcion'=>'La Playstation camera es una webcam para PS4, pero con muchas mas funciones que una cámara normal.
             Podrás jugar, grabar y compartir tus partidas con el resto del mundo a través de Youtube o Twitch.
             Gracias a las lentes duales de ángulo amplio y cuatro micrófonos que ofrecen sonido de gran calidad e imágenes nítidas.',
            'imagen'=>'img/accesorios/camaraps4.jpg'
        ]);
    }
}
