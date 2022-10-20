<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;


class ImageFactory extends Factory
{
    Protected $model =Image::class;

    public function definition()
    {
        return [
            'url'=>'sitios/' . $this->faker->image('public/storage/sitios',640,480,null,false),

        ];
    }
}
