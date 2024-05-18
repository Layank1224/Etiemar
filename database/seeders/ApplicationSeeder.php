<?php

namespace Database\Seeders;
use App\Models\Application;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Application::create(attributes:[
            'id'=>1,
            'application_state' => 'Under Review',
            'candidate_id'=>1,
            'position_id' => 1,
        ]);
        Application::create(attributes:[
            'id'=>2,
            'application_state' => 'Rejected',
            'candidate_id'=>2,
            'position_id' => 1,

        ]);
        Application::create(attributes:[
            'id'=>3,
            'application_state' => 'Rejected',
            'candidate_id'=>3,
            'position_id' => 2,
        ]);
        Application::create(attributes:[
            'id'=>4,
            'application_state' => 'Pending',
            'candidate_id'=>4,
            'position_id' => 2,
        ]);
        Application::create(attributes:[
            'id'=>5,
            'application_state' => 'Short-Listed',
            'candidate_id'=>5,
            'position_id' => 3,
        ]);
        Application::create(attributes:[
            'id'=>6,
            'application_state' => 'Approved',
            'candidate_id'=>6,
            'position_id' =>3,
        ]);
    }
}
