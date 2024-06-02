<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Iklan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'fullname' => 'Admin',
            'email' => 'litcove@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 1,
        ]);

        Iklan::create([
            'image_path' => 'images/jumbotron.png',
        ]);


    }
}
