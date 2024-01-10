<?php

namespace Database\Seeders;
use App\Models\Register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Register::factory(30)->create();

        Register::create([
            'nama_lengkap' => 'Farhan',
            'nama_panggilan' => 'Han',
            'ttl' => 'Babai, 03 Juli 2003',
            'alamat_asal' => 'Babai RT.13 RW.004',
            'alamat_banjarmasin' => 'Jl. Cemara Raya, Gg. Agatis II RT.41 No.35',
            'email' => 'farhanbasahir@gmail.com',
            'motivasi' => 'Man Jadda Wa Jadda',
            'pengalaman_organisasi' => 'OSIM, Ambalan Pramuka, dan Karang Taruna',
            'pengalaman_kepanitiaan' => 'Event Tournament ADHB-PLC 2019 dan Babai-Cup 2021',
            'motto_hidup'=> 'Hari ini lebih baik dari hari kenarin',
            'divisi'=> 'Fungsional',     
        ]);
    }
}
