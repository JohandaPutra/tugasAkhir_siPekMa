<?php

namespace Database\Seeders;

use App\Models\kegiatan\usulanKegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class usulanKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            usulanKegiatan::create([
                'user_id' => 1, // contoh pakai HIMA
                'nama_kegiatan' => "Usulan Kegiatan $i",
                'deskripsi_kegiatan' => "Deskripsi untuk kegiatan ke-$i",
                'jenis_kegiatan_id' => rand(1, 3), // sesuai jenis_kegiatan
                'tempat_kegiatan' => "Aula Kampus $i",
                'jenis_pendanaan_id' => rand(1, 2),
                'tanggal_kegiatan' => now()->addDays($i),
                'status_kegiatan_id' => 1+$i, // default status awal
            ]);
        }
    }
}
