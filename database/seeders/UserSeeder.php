<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'id'=>1,
            'name' => 'ruben',
            'apellido' => 'saiz casado',
            'email' => 'rubensaizcasado@gmail.com',
            'password' => Hash::make('nerearo7'),
            'dni' => '75726378M',
            'telefono'=>'696050783',
            'fecha_nacimiento'=>'1994-12-01'

        ]);

        User::create([
            'id' => 2,
            'name' => 'estandar',
            'apellido' => 'estandar',
            'email' => 'estandar@gmail.com',
            'password' => Hash::make('nerearo7'),
            'dni' => '1111111M',
            'telefono' => '696050783',
            'fecha_nacimiento' => '1953-12-01'
        ]);
    }
}
