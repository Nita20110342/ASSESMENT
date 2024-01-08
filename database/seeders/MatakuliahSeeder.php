<?php

namespace Database\Seeders;
use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        for ($i =0; $i < 10; $i++) {
            Matakuliah::create([
                'matakuliah' => $faker->jobTitle,
            ]);
        }
    }
}
