<?php

namespace Database\Seeders;
use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        role::create(['nama_role' => 'WADEKIII']);
        role::create(['nama_role' => 'KAPRODI']);
        role::create(['nama_role' => 'PEMBINA']);
        role::create(['nama_role' => 'HIMA']);
    }
}
