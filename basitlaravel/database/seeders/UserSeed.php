<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([    
        'name'=>"Suleyman",
        'email'=> "gelisgen987@gmail.com",
        'password'=> bcrypt("123456"),
        'surname'=>"Gelisgen",
        
        

        ]);

        DB::table("users")->insert([    
            'name'=>"Hasan",
            'email'=> "hasanozturk@gmail.com",
            'password'=> bcrypt("315207"),
            'surname'=>"Ozturk",
        
        ]);

    }
    public function getUser(){

       
    }
}
