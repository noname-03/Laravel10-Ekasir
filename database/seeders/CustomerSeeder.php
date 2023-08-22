<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Rizky',
            'phone' => '08123456789',
            'address' => 'Jl. Raya',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
        ]);
        Customer::create([
            'name' => 'Rizky',
            'phone' => '08123456789',
            'address' => 'Jl. Raya',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
        ]);
    }
}