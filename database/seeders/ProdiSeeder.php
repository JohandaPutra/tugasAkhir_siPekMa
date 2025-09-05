<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\prodi;


class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      prodi::create(['fakultas_id' => 1, 'nama_prodi' => 'Sistem Informasi']);
      prodi::create(['fakultas_id' => 1, 'nama_prodi' => 'Teknik Elektro']);
    }
}
