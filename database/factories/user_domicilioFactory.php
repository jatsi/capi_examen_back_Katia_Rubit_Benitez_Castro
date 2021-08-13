<?php

namespace Database\Factories;

use App\Models\user_domicilio;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class user_domicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user_domicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          
            'user_id' => Users::count() ? Users::pluck('id')->random() : 0,
            'domicilio'  =>$this->faker->streetName(),
            'numero_exterior'  =>$this->faker->numerify(),
            'colonia' => $this->faker->sentence(),
            'cp'  =>$this->faker->numerify(),
            'ciudad' =>$this->faker->city(),
        ];
    }
}
