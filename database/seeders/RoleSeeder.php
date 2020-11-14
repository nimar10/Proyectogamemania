<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::create(['name'=> 'Administrador']);
        $role->givePermissionTo('Admin');

        $user = User::find(1)->first();
        $user->assignRole('Administrador');
    }
}
