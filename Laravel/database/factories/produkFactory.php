<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produk>
 */
class produkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'kategori_produk' => $this->faker->randomElement(['Baju', 'Celana', 'outer']),
        'nama_produk'=> $this->faker->firstNameFemale,
        'stok'=> $this->faker->numberBetween (int1:10 , int2:100),
        'harga_produk'=> $this->faker->numberBetween (int1: 10000 , int2: 150000),
        ];
    }
}
