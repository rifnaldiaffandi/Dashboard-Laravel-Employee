<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Test',
                'email'=>'Test@gmail.com',
                'role'=>'CEO',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Test1',
                'email'=>'Test1@gmail.com',
                'role'=>'CFO',
                'password'=>bcrypt('654321')
            ],
            [
                'name'=>'Test2',
                'email'=>'Test2@gmail.com',
                'role'=>'CCO',
                'password'=>bcrypt('321456')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }                                                    
    }
}
