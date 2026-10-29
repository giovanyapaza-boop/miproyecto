<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Giovany Apaza',
            'email'    => 'admin@gikar.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
        ]);
    }
}