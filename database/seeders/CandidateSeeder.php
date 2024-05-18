<?php

namespace Database\Seeders;
use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidate::create(attributes:[
            'id' => 1,
        ]);
        Candidate::create(attributes:[
            'id' => 2,
        ]);
        Candidate::create(attributes:[
            'id' => 3,
        ]);
        Candidate::create(attributes:[
            'id' => 4,
        ]);
        Candidate::create(attributes:[
            'id' => 5,
        ]);
        Candidate::create(attributes:[
            'id' => 6,
        ]);
    }
}
