<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'first_name' => 'Usman',
            'last_name' => 'Muhammad',
            'username' => 'usman',
            'email' => 'baba@test.com',
            'password' => 'baba',
            'phone_number' => '09077022461',
            'role' => 'ADM',
            'type' => 'DIS',
        ]);
    }
}
