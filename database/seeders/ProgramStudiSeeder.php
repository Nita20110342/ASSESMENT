<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_program_studi' => 'Informatika'],
            ['nama_program_studi' => 'Teknik Elektro'],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel 'program_studis'
        foreach ($data as $program) {
            ProgramStudi::create($program);
        }
    }
}
