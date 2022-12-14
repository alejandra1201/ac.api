<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriaFactory extends Factory
{
   
    protected $model=Categoria::class;

    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        
        return [
            'nombre_categoria'=> $this->faker->text(10),
            'image_categoria' =>$this->faker->image('public/storage/imagenes',640,480,null,false)
        ];
    }
}
