<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        User::create([
            'email' =>  'admin@safe.com',
            'name' => $faker->name,
            'password' => bcrypt('password'),
            'role_id' => 1
        ]);

        User::create([
            'email' =>  'doctor@safe.com',
            'name' => $faker->name,
            'password' => bcrypt('password'),
            'role_id' => 2
        ]);

        User::create([
            'email' =>  'nurse@safe.com',
            'name' => $faker->name,
            'password' => bcrypt('password'),
            'role_id' => 3
        ]);
    }
}
