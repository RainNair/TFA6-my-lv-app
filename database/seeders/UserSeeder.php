<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Rainier Espino', 'name' => 'Rainier Espino', 'email' => 'admin@example.com'],
            ['username' => 'cashier01', 'full_name' => 'Mia Rodriguez', 'name' => 'Mia Rodriguez', 'email' => 'cashier01@example.com'],
            ['username' => 'cashier02', 'full_name' => 'Noah Dela Cruz', 'name' => 'Noah Dela Cruz', 'email' => 'cashier02@example.com'],
            ['username' => 'manager01', 'full_name' => 'Sofia Villanueva', 'name' => 'Sofia Villanueva', 'email' => 'manager01@example.com'],
            ['username' => 'inventory01', 'full_name' => 'Lucas Navarro', 'name' => 'Lucas Navarro', 'email' => 'inventory01@example.com'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                [...$user, 'password' => Hash::make('password')]
            );
        }
    }
}
