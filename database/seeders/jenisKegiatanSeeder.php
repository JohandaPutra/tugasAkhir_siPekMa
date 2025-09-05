<?php

namespace Database\Seeders;

use App\Models\jenisKegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class jenisKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        jenisKegiatan::create([
            'nama_jenis_kegiatan' => 'Seminar',
            'deskripsi' => 'Kegiatan seminar atau workshop ilmiah.'
        ]);

        jenisKegiatan::create([
            'nama_jenis_kegiatan' => 'Lomba',
            'deskripsi' => 'Kompetisi atau perlombaan antar mahasiswa.'
        ]);

        jenisKegiatan::create([
            'nama_jenis_kegiatan' => 'Pengabdian Masyarakat',
            'deskripsi' => 'Kegiatan sosial untuk masyarakat.'
        ]);
    }
}
