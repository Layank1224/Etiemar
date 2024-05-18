<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manager::create(attributes:[
            'id' => 1,

        ]);
        Manager::create(attributes:[
            'id' => 2,

        ]);
        Manager::create(attributes:[
            'id' => 3,

        ]);
        Manager::create(attributes:[
            'id' => 4,

        ]);
        Manager::create(attributes:[
            'id' => 5,

        ]);
    }
}
