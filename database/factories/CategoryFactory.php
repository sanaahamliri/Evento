<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        return [
            'categorieName' => 'abc',
            'categorieName' => 'abcd',
            'categorieName' => 'abcdef',
            'categorieName' => 'lorem',
            'categorieName' => 'lorem epsum',
            'categorieName' => 'lorem epsum isit',
        ];
    }
}
