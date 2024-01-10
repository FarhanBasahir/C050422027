<?php

namespace Database\Factories;

use App\Models\Register;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => $this->faker->name(),
            'nama_panggilan' => $this->faker->name(),
            'ttl' => $this->faker->dateTime(),
            'alamat_asal' => $this->faker->streetAddress(),
            'alamat_banjarmasin' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'motivasi' => $this->faker->sentence(),
            'pengalaman_organisasi' => $this->faker->randomElement(['HME', 'HMB', 'HIMA', 'HMM', 'HMSB']),
            'pengalaman_kepanitiaan' => $this->faker->sentence(3), // Menggunakan sentence
            'motto_hidup' => $this->faker->sentence(3), // Menggunakan sentence
            'divisi' => $this->faker->randomElement(['Humas', 'Dokumentasi', 'Fungsional', 'Pendidikan', 'Keagamaan', 'Minat dan Bakat']),
        ];
    }
}
