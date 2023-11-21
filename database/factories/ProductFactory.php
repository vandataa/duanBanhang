<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->name,
            'description'=> $this->faker->text,
            'thunm'=> $this->faker->image,
            'galery'=>$this->faker->image,
            'productCode'=> $this->faker->countryCode,
            'SKU'=>$this->faker->postcode,
           
            'inventory'=>100,
            'regularPrice'=>random_int(1,1000),
            'discount'=>random_int(1,1000),
            'video'=>$this->faker->url,
            'categories'=> random_int(1,10),
        ];
    }
}
