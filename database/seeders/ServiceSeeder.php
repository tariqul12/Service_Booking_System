<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name'        => 'Plumbing',
            'description' => 'Fixing pipes and leaks',
            'price'       => 1500,
            'status'      => true,
        ]);

        Service::create([
            'name'        => 'Electrical Work',
            'description' => 'Wiring, fans, lights, and sockets',
            'price'       => 2000,
            'status'      => true,
        ]);

        Service::create([
            'name'        => 'Home Cleaning',
            'description' => 'General house cleaning service',
            'price'       => 1000,
            'status'      => true,
        ]);

        Service::create([
            'name'        => 'AC Repair',
            'description' => 'Air conditioner service and maintenance',
            'price'       => 2500,
            'status'      => true,
        ]);

        Service::create([
            'name'        => 'Painting',
            'description' => 'Interior and exterior wall painting',
            'price'       => 3000,
            'status'      => true,
        ]);
    }
}
