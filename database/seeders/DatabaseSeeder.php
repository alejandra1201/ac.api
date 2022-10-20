<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comentario::factory(10)->create(); 
        	
        \App\Models\Promocion::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Reserva::factory(110)->create();
         \App\Models\Servicio::factory(10)->create(); 
        \App\Models\Sitio::factory(10)->create();

        \App\Models\User::factory(10)->create();


    }
}