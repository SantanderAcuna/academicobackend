<?php

namespace Database\Factories;

use App\Models\Contribuyente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contribuyente>
 */
class ContribuyenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Contribuyente::class;

    public function definition()
    {
        return [
            'cedula' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'nombre_completo' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'Referencia' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
