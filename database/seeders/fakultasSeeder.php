<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\fakultas;

class fakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        fakultas::create(['nama_fakultas' => 'Fakultas Sains dan Teknologi']);
    }

}
