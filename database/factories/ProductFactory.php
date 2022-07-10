<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Brand;
use App\Models\Product;

class ProductFactory extends Factory
{
    public function definition(){
        return [
            'brand_id' => Brand::factory(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomDigit(),
        ];
    }
}
