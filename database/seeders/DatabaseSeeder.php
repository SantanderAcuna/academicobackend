<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contribuyente;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Funcionario;
use App\Models\Peticion;
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

        Contribuyente::factory(20)->create();
        Peticion::factory(20)->create();
        Funcionario::factory(20)->create();
        User::factory(20)->create();


        User::factory()->create([
            'first_name' => 'Jose',
            'last_name' => 'Acuña',
            'email' => 'santanderjose19@gmail.com',

            'password' => Hash::make('85154239'),
        ]);
    }
}
