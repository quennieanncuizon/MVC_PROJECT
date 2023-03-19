<?php

namespace Database\Seeders;


//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();

        DB::table('estate')->insert([
            'name' => 'Quennie Ann Baculio',
            'email'  => 'quennieannbaculio@gmail.com',
            'subject'  => 'Client',
            'message'  => 'Interested in Property' 
        ]);

        DB::table('estate')->insert([
            'name' => 'Mark James Baculio',
            'email'  => 'markjamesbaculio@gmail.com',
            'subject'  => 'Client',
            'message'  => 'Interested in Property' 
        ]);

        DB::table('estate')->insert([
            'name' => 'Anna Jenry Cuizon',
            'email'  => 'anancuizon@gmail.com',
            'subject'  => 'Client',
            'message'  => 'Interested in Property'
        ]);

        $this->call([
            AgentSeeder::class
        ]);
    }
}
