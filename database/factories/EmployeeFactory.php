<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=> 'integerValue',
            'user_id'=> 'integerValue',
            'manager_id' => 'integerValue',
            'emp_position'=> 'something',
            'position_id'=> 'integerValue',
            'department_id'=> 'integerValue',
        ];
    }
}
