<?php

namespace Database\Seeders;

use App\Models\jenisKegiatan;
use App\Models\jenisPendanaan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
   $this->call([
          RoleSeeder::class,
          fakultasSeeder::class,
          ProdiSeeder::class,
          jenisKegiatanSeeder::class,
          jenisPendanaanSeeder::class,
          UserSeeder::class,
          statusKegiatanSeeder::class,
          usulanKegiatanSeeder::class,
        ]);

  }
}
