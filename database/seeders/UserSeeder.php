<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@example.com',
            'password' => '123',
            'role_id' => 1,
        ]);
        
        User::create([
            'email' => 'customer@example.com',
            'password' => '123456',
            'role_id' => 2,
        ]);

        User::create([
            'email' => 'manajer@example.com',
            'password' => '123456',
            'role_id' => 3,
        ]);
    }
}
    