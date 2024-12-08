<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class fakerSimple extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('fake_info')->insert([
                'fake_ad' => $faker->name,
                'fake_surname' => $faker->lastName,
                'fake_email' => $faker->unique()->safeEmail,
                'fake_password'=> $faker->unique()->password(6,10),
                'fake_addres'=>$faker->address,
                'fake_telNo'=>$faker->phoneNumber,
                'fake_gender'=> rand(0,1), //0=male, 1=fmale
                'fake_age'=>rand(15,65),
                
            ]);
        }
    }
}
