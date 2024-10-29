<?php

namespace Database\Factories;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Funcionario::class;

    public function definition()
    {
        return [
            'cedula' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'nombre_completo' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'responsable' => $this->faker->name(),
            'lider_area' => $this->faker->randomElement(['Sí', 'No']),
            'area' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
