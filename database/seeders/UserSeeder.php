<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'Johanda',
            'email' => 'johanda201@gmail.com',
            'password' => 'pass',
            'role_id' => '4'
        ]);

        User::factory()->create([
            'username' => 'Doni',
            'email' => 'doni@gmail.com',
            'password' => 'pass',
            'role_id' => '3'
        ]);

        User::factory()->create([
            'username' => 'ihsan',
            'email' => 'ihsan@gmail.com',
            'password' => 'pass',
            'role_id' => '2'
        ]);

        User::factory()->create([
            'username' => 'Harry',
            'email' => 'Harry@gmail.com',
            'password' => 'pass',
            'role_id' => '1',
            'prodi_id' => null,
        ]);
    }
}
