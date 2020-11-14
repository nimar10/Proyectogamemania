<?php

namespace Database\Seeders;

use App\Models\Videojuego;
use Illuminate\Database\Seeder;

class VideojuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //nintendo
        Videojuego::create([
            'nombre'=>'Super Mario 3D',
            'compañia'=>'Nintendo',
            'descripcion'=>'Super Mario 3D All-Stars para Nintendo Switch,
            es un viaje en el tiempo que recupera tres juegos emblemáticos
            en una edición sin igual ¡3 JUEGOS REUNIDOS EN 1 COLECCIÓN ESTELAR! Recuerda que son unidades limitadas,
            no dudes en hacerte con Super Mario 3D All-Stars,
            y guarda un trozo de la historia de Nintendo en tu casa',
            'imagen'=>'img/videojuegos/mariobros.jpg',
            'consola_id'=>3

        ]);

        Videojuego::create([
            'nombre'=>'Pokemon Escudo',
            'compañia'=>'Nintendo',
            'descripcion'=>'Prepárate para descubrir Galar, una extensa región con lugares de lo más variado: desde apacibles campos hasta modernas ciudades, pasando por un frondoso bosque y montañas nevadas.
             Los habitantes y Pokémon colaboran estrechamente para impulsar las industrias de la región.',
            'imagen'=>'img/videojuegos/pokemon.jpg',
            'consola_id'=>3

        ]);

        Videojuego::create([
            'nombre'=>'Animal Crossing',
            'compañia'=>'Nintendo',
            'descripcion'=>'Animal Crossing es un videojuego de simulación social y de vida que Nintendo ha descrito como un "juego de comunicación". El personaje vive una
            vida en la que el usuario decide qué hacer, por ejemplo, las tareas que te propongan los vecinos no son obligatorias',
            'imagen'=>'img/videojuegos/animal.jpg',
            'consola_id'=>3

        ]);
            //ps4
        Videojuego::create([
            'nombre'=>'Fifa 21',
            'compañia'=>'EA Sports',
            'descripcion'=>'FIFA 21 es un videojuego de simulación de fútbol del año 2020 disponible para Microsoft Windows, PlayStation 4, Xbox One y Nintendo Switch el 9 de octubre de 2020,
             y aparte será el primer videojuego de la serie FIFA para Google Stadia, PlayStation 5 y Xbox Series X|S',
            'imagen'=>'img/videojuegos/fifa21.jpg',
            'consola_id'=>1

        ]);

        Videojuego::create([
            'nombre'=>'Jumanji',
            'compañia'=>'Overight Games',
            'descripcion'=>'Juega en línea, a pantalla partida o con compañeros de equipo de la IA
             y combina las exclusivas habilidades del Dr. Bravestone, Ruby, Ratón y el profesor Oberon para derrotar
             a tus enemigos y salvar el mundo. ...
             Bravestone, Ruby, Ratón y el profesor Shelly en una nueva y divertida aventura de acción en 3D.',
            'imagen'=>'img/videojuegos/jumanji.jpg',
            'consola_id'=>1

        ]);

        Videojuego::create([
            'nombre'=>'Medieval',
            'compañia'=>'Ocean Games',
            'descripcion'=>'Este popular juego resucita completamente renovado, combinando mecánicas clásicas con espectaculares
             gráficos en increíbles 4K. Métete en los huesos de Sir Daniel Fortesque,
             un caballero algo torpe (y muy muerto) resucitado accidentalmente por su enemigo, el malvado hechicero Zarok.',
            'imagen'=>'img/videojuegos/medieval.jpg',
            'consola_id'=>1

        ]);
            //xbox
        Videojuego::create([
            'nombre'=>'CyberPunk77',
            'compañia'=>'Bandai Namco',
            'descripcion'=>' Cyberpunk 2077 es una historia de acción y aventura en mundo abierto ambientada en Night City, una megalópolis obsesionada con el poder, el glamur y la modificación corporal.
             Tu personaje es V, un mercenario que persigue un implante único que permite alcanzar la inmortalidad.',
            'imagen'=>'img/videojuegos/ciberpunk.jpg',
            'consola_id'=>2

        ]);

        Videojuego::create([
            'nombre'=>'Mortal Kombat 11',
            'compañia'=>'Warner Bros',
            'descripcion'=>'Mortal Kombat regresa a PS4 con su décima entrega, intentando continuar el éxito del retorno de la mano de Warner Bros.
            Con un estilo similar al juego anterior, el título añade varios estilos por luchador,
            al estilo de Mortal Kombat Deception.',
            'imagen'=>'img/videojuegos/mortal.jpg',
            'consola_id'=>2

        ]);

        Videojuego::create([
            'nombre'=>'Watch Dogs Legion',
            'compañia'=>'Ubisoft',
            'descripcion'=>'Se ambienta en la ciudad de Chicago, en un futuro próximo en el que todo está controlado
             bajo un gran sistema operativo conocido como ctOS, lo que da lugar a mecánicas de hackeo durante todo el juego
             en el que es posible piratear desde teléfonos móviles hasta semáforos en beneficio del jugador.',
            'imagen'=>'img/videojuegos/watchdog.jpg',
            'consola_id'=>2
        ]);

    }
}
