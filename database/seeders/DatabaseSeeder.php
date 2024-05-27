<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\Producto;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => 123456789
            ]);
        }

        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            Order::create([
                'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
            ]);
        }

        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            Producto::create([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 1, 100)
            ]);
        }
    }
}
