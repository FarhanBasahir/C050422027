<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement(['Pemrograman Berbasis Objek','Pemrograman Berbasis Web','Rekayasa Perangkat Lunak',
            'Pemodelan Proses Bisnis','Dasar Pengembangan SIKC','Struktur Data','Administrasi Jaringan','Administrasi Basis Data']),
            'lecturer_id' => $this->faker->randomElement(['1','2','3','4','5','6','7','8']),
        ];
    }
}
