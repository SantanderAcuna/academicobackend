<?php

namespace Database\Factories;

use App\Models\Funcionario;
use App\Models\Peticion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peticion>
 */
class PeticionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Peticion::class;

    public function definition()
    {
        return [
            'radicado' => $this->faker->uuid(),
            'tipo_solicitud' => $this->faker->randomElement(['Queja', 'Reclamo', 'Solicitud']),
            'fecha_asignacion' => $this->faker->date(),
            'funcionario_id' => Funcionario::factory(),
            'fecha_vencimiento' => $this->faker->date('Y-m-d', '+1 month'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
