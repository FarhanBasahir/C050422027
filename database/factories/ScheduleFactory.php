<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' => $this->faker->randomElement(['1','2','3','4','5','6','7','8']),
            'hari'=> $this->faker->randomElement(['Senin','Selasa','Rabu','Kamis','Jumat']),
            'jam_mulai' => $this->faker->randomElement(['08.00','09.00','10.00','11.00','12.00','13.00','14.00']),
            'jam_selesai' => $this->faker->randomElement(['08.00','09.00','10.00','11.00','12.00','13.00','14.00']),
            'ruangan' => $this->faker->randomElement(['H.201','H.202','H.203','H.204','H.205','UPT.TIK','Lab.KCV','Lab.Komdas','Lab.RPL']),
            'kode_absensi' => $this->faker->randomDigitNotNull(),
            'tahun_akademik' => '2023/2024',
            'semester' => 'ganjil',
            'created_by' => $this->faker->name(),
            'updated_by' => $this->faker->name(),
            'deleted_by' => $this->faker->name(),
        ];
    }
}
