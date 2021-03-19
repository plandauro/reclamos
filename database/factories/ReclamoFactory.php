<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Reclamo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReclamoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reclamo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            // 'name' => $this->faker->name,
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            // 'incidence_number' => $this->faker->unique()->randomNumber($incidence_number = 4),
            'type_document' => $this->faker->randomElement(['DNI', 'RUC']),
            'number_document' => $this->faker->randomNumber($number_document = 8),
            'region' => $this->faker->randomElement(['Lima']),
            'provincia' => $this->faker->randomElement(['Barranca']),
            'distrito' => $this->faker->randomElement(['Barranca']),
            'direccion' => $this->faker->randomElement(['SEDE GALVEZ', 'CAMPUS LA FLORIDA', 'CAMPUS LOS SANITOS']),
            'categoria' => $this->faker->randomElement(['RECLAMO', 'QUEJA', 'SOPORTE']),
            'email' => $this->faker->unique()->safeEmail,
            'descripcion' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([1, 2])      
        ];
    }
}
