<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Producto 1',
            'stock' => 2,
            'points' => 300,
            'image_url' => 'https://cdn.britannica.com/77/170477-050-1C747EE3/Laptop-computer.jpg'
        ];
    }
}
