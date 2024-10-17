<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     *
     * @return array<string, mixed>
     */
    protected $model = Customer::class;
    
    public function definition()
    {

        return [
            'id' => $this->faker->unique()->randomNumber(),
            'customer_name' => $this->faker->name,
            'contact' => $this->faker->phoneNumber,
            'location' => $this->faker->address,
            // Add any other columns you want to populate here
        ];
    }
}
