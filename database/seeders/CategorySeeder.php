<?php

namespace Database\Seeders;

use App\Models\Category;
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
      Category::factory(100)->create()->each(function(Category $category){
         
            Image::factory(4)->create([
                'imageable_id' => $category->id,
                'imageable_type'=>Category::class
            ]);
            
     }); 

    }
}