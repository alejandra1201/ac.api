<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Promocion;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Promocion::factory(100)->create()->each(function(Promocion $promocion){
         
            Image::factory(4)->create([
                'imageable_id' => $promocion->id,
                'imageable_type'=>Promocion::class
            ]);
            
     }); 

    }
}
