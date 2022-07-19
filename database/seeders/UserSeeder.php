<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'address' => 'Jalan',
            'phone' => '0888888',
            'role' => 'user',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$Zf/GraAJ4U/B4qpsMbf1cOqCANWSA5dgLDK9O7vE5fR3Nr6QfoM9i', //password
        ]);
        User::create([
            'name' => 'Admin',
            'address' => 'Jalan admin',
            'phone' => '0888888',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$Zf/GraAJ4U/B4qpsMbf1cOqCANWSA5dgLDK9O7vE5fR3Nr6QfoM9i', //password
        ]);
    }
}
