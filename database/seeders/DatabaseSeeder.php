<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Curso::factory(20)->create();
        Estudiante::factory(20)->create();
        user::factory(20)->create();


        User::factory()->create([
            'first_name' => 'Jose',
            'last_name' => 'Acuña',
            'email' => 'santanderjose19@gmail.com',

            'password' => Hash::make('85154239'),
        ]);
    }
}
