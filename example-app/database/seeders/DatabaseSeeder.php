<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Rol;
use \App\Models\Customer;
use \App\Models\Configuration;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Usuario::factory(10)->create();
        \App\Models\Rol::factory(10)->create();
        \App\Models\Configuracion::factory(10)->create();
        \App\Models\UsuarioRol::factory(10)->create();
    }
}