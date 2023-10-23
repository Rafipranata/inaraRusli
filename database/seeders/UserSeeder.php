<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Rafi',
        //     'email' => 'admin@Medikre.com',
        //     'password' => bcrypt('password'),
        //     'role' => 'Admin',
            
        // ]);
        
        DB::table('Users')->insert([
            'name' => 'Rafi',
            'email' => 'admin@Medikre.com',
            'password' => bcrypt('password'),
            'role' => 'Admin',
            
        ]);
    }
}
