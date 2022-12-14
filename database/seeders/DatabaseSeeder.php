<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Category;
use App\Models\Comentario;
use App\Models\Image;
use App\Models\Promocion;
use App\Models\Reserva;
use App\Models\Servicio;
use App\Models\Sitio;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\Immutable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       

        User::factory(10)->create();
        Categoria::factory(10)->create();
        // Category::factory(10)->create();
        Sitio::factory(10)->create();
        Promocion::factory(10)->create();
        Reserva::factory(10)->create();
        Servicio::factory(10)->create(); 
        User::factory(10)->create();
        Comentario::factory(10)->create(); 	

        


    }
}