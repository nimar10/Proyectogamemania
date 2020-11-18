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
            'nombre' => 'Super Mario 3D',
            'compañia' => 'Nintendo',
            'descripcion' => 'Super Mario 3D All-Stars para Nintendo Switch,
            es un viaje en el tiempo que recupera tres juegos emblemáticos
            en una edición sin igual ¡3 JUEGOS REUNIDOS EN 1 COLECCIÓN ESTELAR! Recuerda que son unidades limitadas,
            no dudes en hacerte con Super Mario 3D All-Stars,
            y guarda un trozo de la historia de Nintendo en tu casa',
            'imagen' => 'img/videojuegos/mariobros.jpg',
            'consola_id' => 3

        ]);

        Videojuego::create([
            'nombre' => 'Pokemon Escudo',
            'compañia' => 'Nintendo',
            'descripcion' => 'Prepárate para descubrir Galar, una extensa región con lugares de lo más variado: desde apacibles campos hasta modernas ciudades, pasando por un frondoso bosque y montañas nevadas.
             Los habitantes y Pokémon colaboran estrechamente para impulsar las industrias de la región.',
            'imagen' => 'img/videojuegos/pokemon.jpg',
            'consola_id' => 3

        ]);

        Videojuego::create([
            'nombre' => 'Animal Crossing',
            'compañia' => 'Nintendo',
            'descripcion' => 'Animal Crossing es un videojuego de simulación social y de vida que Nintendo ha descrito como un "juego de comunicación". El personaje vive una
            vida en la que el usuario decide qué hacer, por ejemplo, las tareas que te propongan los vecinos no son obligatorias',
            'imagen' => 'img/videojuegos/animal.jpg',
            'consola_id' => 3

        ]);
        //ps4
        Videojuego::create([
            'nombre' => 'Fifa 21',
            'compañia' => 'EA Sports',
            'descripcion' => 'FIFA 21 es un videojuego de simulación de fútbol del año 2020 disponible para Microsoft Windows, PlayStation 4, Xbox One y Nintendo Switch el 9 de octubre de 2020,
             y aparte será el primer videojuego de la serie FIFA para Google Stadia, PlayStation 5 y Xbox Series X|S',
            'imagen' => 'img/videojuegos/fifa21.jpg',
            'consola_id' => 1

        ]);

        Videojuego::create([
            'nombre' => 'Jumanji',
            'compañia' => 'Overight Games',
            'descripcion' => 'Juega en línea, a pantalla partida o con compañeros de equipo de la IA
             y combina las exclusivas habilidades del Dr. Bravestone, Ruby, Ratón y el profesor Oberon para derrotar
             a tus enemigos y salvar el mundo. ...
             Bravestone, Ruby, Ratón y el profesor Shelly en una nueva y divertida aventura de acción en 3D.',
            'imagen' => 'img/videojuegos/jumanji.jpg',
            'consola_id' => 1

        ]);

        Videojuego::create([
            'nombre' => 'Bayonetta',
            'compañia' => 'Sega',
            'descripcion' => '¡Celebramos el 10 º Aniversario de dos clásicos de culto de Platinum Games con Bayonetta & Vanquish 10 th Anniversary Bundle! Bayonetta y Vanquish llegan a PlayStation 4 y Xbox One por primera vez en este pack remasterizado Gráficos 4 K a 60 fps en Xbox One X y PlayStation 4 Pro  BAYONETTA Experimenta la génesis de la saga de Bayonetta con este juego de culto clásico La seductora Bruja Umbra irrumpe desde las profundidades después de medio milenio de sueño sin pista de su misterioso pasado.',
            'imagen' => 'img/videojuegos/bayonetta.jpg',
            'consola_id' => 1

        ]);
        //xbox
        Videojuego::create([
            'nombre' => 'CyberPunk77',
            'compañia' => 'Bandai Namco',
            'descripcion' => ' Cyberpunk 2077 es una historia de acción y aventura en mundo abierto ambientada en Night City, una megalópolis obsesionada con el poder, el glamur y la modificación corporal.
             Tu personaje es V, un mercenario que persigue un implante único que permite alcanzar la inmortalidad.',
            'imagen' => 'img/videojuegos/ciberpunk.jpg',
            'consola_id' => 2

        ]);

        Videojuego::create([
            'nombre' => 'Need for Speed',
            'compañia' => 'EA Sports',
            'descripcion' => 'Need for Speed cuenta con una interesante e innovadora jugabilidad que propone cinco formas diferentes de jugar: Velocidad, Estilo, Diseño, Banda y Forajido. Cada una está relacionada con un icono de la conducción del mundo real, cinco héroes de la cultura automovilística que inspirarán al jugador a progresar, mejorar su reputación y convertirse en un icono definitivo de las carreras urbanas.
            El juego se desarrolla en la enorme ciudad ficticia de EE.UU., Ventura Bay (que abarca una ciudad, un puerto, y varios cañones) y está conformado por cinco historias únicas entrelazadas entre sí, cargadas de acción y basadas en la jugabilidad, asegurarán variedad y que las preferencias personales se vean satisfechas.',
            'imagen' => 'img/videojuegos/needforspeed.jpg',
            'consola_id' => 2

        ]);

        Videojuego::create([
            'nombre' => 'Wolfenstein',
            'compañia' => 'Bethesda',
            'descripcion' => 'Wolfenstein Alt History Collection traslada a los jugadores a una aventura épica que se desarrolla en una lúgubre historia alternativa en la que los nazis dominan el mundo. Dispara , apuñala y masacra a las filas nazis en cuatro aclamados juegos de la serie Wolfenstein.La colección contiene Wolfenstein: The New Order, Wolfenstein: The Old Blood, Wolfenstein II: The New Colossus y Wolfenstein: Youngblood.En la Alt History Collection podrás experimentar una compleja historia',
            'imagen' => 'img/videojuegos/wolfenstein.jpg',
            'consola_id' => 2
        ]);
    }
}
