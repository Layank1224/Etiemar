<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create(attributes:[
            'id' => 1,
            'user_id' => 1,
            'emp_position' =>'Cyber Security Analyst',
            'manager_id' => 1,
            'position_id' =>1,
            'department_id' =>1,
        ]);
        Employee::create(attributes:[
            'id' => 2,
            'user_id' => 2,
            'manager_id' => 2,
            'emp_position' =>'ERP Specialist',
            'position_id' =>2,
            'department_id' =>1,
        ]);
    }
}
