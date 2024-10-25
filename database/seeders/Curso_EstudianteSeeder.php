<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Curso_EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();

        if ($cursos->isEmpty() || $estudiantes->isEmpty()) {
            $this->command->warn('No hay estudiantes o cursos disponibles para relacionar.');
            return;
        }

        foreach ($estudiantes as $estudiante) {
            // Selecciona entre 1 y 3 cursos aleatorios.
            $cursoIds = $cursos->random(rand(1, 3))->pluck('id')->toArray();
            // Adjunta los cursos al estudiante.
            $estudiante->cursos()->syncWithoutDetaching($cursoIds);
    }
}
}