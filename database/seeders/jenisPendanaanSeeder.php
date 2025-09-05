<?php

namespace Database\Seeders;

use App\Models\jenisPendanaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class jenisPendanaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        jenisPendanaan::create([
            'nama_jenis_pendanaan' => 'Dana Internal',
            'deskripsi' => 'Pendanaan yang berasal dari internal kampus atau fakultas.'
        ]);

        jenisPendanaan::create([
            'nama_jenis_pendanaan' => 'Dana Eksternal',
            'deskripsi' => 'Pendanaan yang berasal dari sponsor atau pihak luar.'
        ]);

    }
}
