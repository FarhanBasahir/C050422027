<?php

namespace Database\Seeders;
use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::factory(30)->create();

        Schedule::create([
            'subject_id' => '1',
            'hari' => 'Senin',
            'jam_mulai' => '11.20',
            'jam_selesai' => '17.00',
            'ruangan' => 'UPT. TIK',
            'kode_absensi' => 'C050422027',
            'tahun_akademik' => '2023',
            'semester' => 'Ganjil',
            'updated_by' => 'Farhan',
            'created_by' => 'Farhan',
            'deleted_by' => 'Farhan',
        ]);
    }
}
