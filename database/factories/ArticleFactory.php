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
            'nom' =>$this->faker->word,
            'categorie' =>$this->faker->randomElement($array = array ('hauts','bas','robes','ensembles','accessoires')),
            'image' => $this->faker->imageUrl(450, 300),
            'prix'=>$this->faker->randomFloat(2,1,500),
            'created_at' =>now(),
        ];
    }
}
