<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 5; $i++) {
            User::updateOrCreate(
                ['email' => $faker->unique()->safeEmail()],
                [
                    'name' => $faker->name(),
                    'password' => Hash::make('password'),
                ],
            );
        }

        User::updateOrCreate(
            ['email' => 'admin@bpbd.example.com'],
            [
                'name' => 'Admin BPBD',
                'password' => Hash::make('admin123'),
            ],
        );
    }
}
