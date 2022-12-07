<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->sentence,
            'categorie' =>$this->faker->sentence,
            'image' => $this->faker->imageUrl(400, 400),
            'prix'=>$this->faker->randomFloat(2,1,1000),
            'created_at' =>now(),
        ];
    }
}
