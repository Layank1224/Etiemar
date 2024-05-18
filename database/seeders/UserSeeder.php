<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(attributes:[
            'id'=> 1,
            'name'=> 'Ali',
            'email'=> 'Ali123@gmail.com',
            'password'=> 'Aa123321',
        ]);

        User::create(attributes:[
            'id'=> 2,
            'name'=> 'Ahmed',
            'email'=> 'Ahm11@gmail.com',
            'password'=> 'Xx321123',
        ]);
    }
}
