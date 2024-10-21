<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Menggunakan locale bahasa Indonesia
        $faker = FakerFactory::create('id_ID');

        // // Menggabungkan kata-kata untuk membuat kalimat
        // $words = $faker->words(5); // Mendapatkan 5 kata dalam bahasa Indonesia
        // $sentence = implode(' ', $words) . '.';

        // $text = $faker->text(50); // Teks acak sepanjang 50 karakter

        $words = ['film', 'music', 'drama', 'novel', 'blog'];
        $sentence = implode(' ', $faker->randomElements($words, 1));


        return [
            'name' => $sentence,
            'slug' => str()->slug($sentence),
        ];
    }
}
