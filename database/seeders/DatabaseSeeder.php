<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        // ]);

        Student::create([
            "name" => "Romzi Ramadhan",
            "username" => "Romzi",
            "email" => "Romzi2020@gmail.com",
            "password" => bcrypt("pmk123 "),
        ]);
    }
}
