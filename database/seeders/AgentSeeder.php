<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create();
        
        DB::table('agents')->insert([
            'name'  => $faker->name,
            'phone' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'image' =>  'assets/img/agent-4.jpg',
            'bio'   => $faker->paragraph,
        ]);

        DB::table('agents')->insert([
            'name'  => $faker->name,
            'phone' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'image' =>  'assets/img/agent-3.jpg',
            'bio'   => $faker->paragraph,
        ]);

        DB::table('agents')->insert([
            'name'  => $faker->name,
            'phone' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'image' =>  'assets/img/agent-2.jpg',
            'bio'   => $faker->paragraph,
        ]);

        DB::table('agents')->insert([
            'name'  => $faker->name,
            'phone' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'image' =>  'assets/img/agent-7.jpg',
            'bio'   => $faker->paragraph,
        ]);
        DB::table('agents')->insert([
            'name'  => $faker->name,
            'phone' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'image' =>  'assets/img/agent-6.jpg',
            'bio'   => $faker->paragraph,
        ]);

        DB::table('agents')->insert([
            'name'  => $faker->name,
            'phone' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'image' =>  'assets/img/agent-5.jpg',
            'bio'   => $faker->paragraph,
        ]);
    }
}
