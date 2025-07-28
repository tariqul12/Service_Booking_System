<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name'     => 'Admin User',
            'email'    => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        // Customer Users
        User::create([
            'name'     => 'Customer One',
            'email'    => 'customer1@example.com',
            'password' => Hash::make('333'),
            'is_admin' => false,
        ]);

        User::create([
            'name'     => 'Customer Two',
            'email'    => 'customer2@example.com',
            'password' => Hash::make('333'),
            'is_admin' => false,
        ]);

        User::create([
            'name'     => 'Customer Three',
            'email'    => 'customer3@example.com',
            'password' => Hash::make('333'),
            'is_admin' => false,
        ]);

        User::create([
            'name'     => 'Customer Four',
            'email'    => 'customer4@example.com',
            'password' => Hash::make('333'),
            'is_admin' => false,
        ]);

        User::create([
            'name'     => 'Customer Five',
            'email'    => 'customer5@example.com',
            'password' => Hash::make('333'),
            'is_admin' => false,
        ]);
    }
}