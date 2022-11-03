<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Sitio;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Sitio::factory(100)->create()->each(function(Sitio $sitio){
         
            Image::factory(4)->create([
                'imageable_id' => $sitio->id,
                'imageable_type'=>Sitio::class
            ]);
            
     }); 

    }
}
