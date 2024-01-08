<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        for ($i =0; $i < 10; $i++) {
            Mahasiswa::create([
                'nim' => $faker->unique()->numerify('######'),
                'nama' => $faker->name,
                'prodii' => $faker->jobTitle,
            ]);
        }
    }
}
