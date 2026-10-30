<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Angela Cruz', 'email' => 'angela.cruz@example.com', 'phone' => '0917-204-1001'],
            ['full_name' => 'Benjamin Santos', 'email' => 'benjamin.santos@example.com', 'phone' => '0918-315-1002'],
            ['full_name' => 'Carla Reyes', 'email' => 'carla.reyes@example.com', 'phone' => '0919-426-1003'],
            ['full_name' => 'Daniel Garcia', 'email' => 'daniel.garcia@example.com', 'phone' => '0920-537-1004'],
            ['full_name' => 'Elena Mendoza', 'email' => 'elena.mendoza@example.com', 'phone' => '0921-648-1005'],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }
    }
}
