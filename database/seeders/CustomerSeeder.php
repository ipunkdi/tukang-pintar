<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i < 50; $i++) { 
            Customer::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'phone_number' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
}
