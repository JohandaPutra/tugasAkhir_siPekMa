<?php

namespace Database\Seeders;

use App\Models\statusKegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class statusKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        statusKegiatan::create([
            'kode_kegiatan'   => 'USL-01',
            'deskripsi_kode'  => 'Usulan diajukan',
            'status_progres'  => 'usulan',
            'urutan'          => 1,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'USL-02',
            'deskripsi_kode'  => 'Usulan direvisi',
            'status_progres'  => 'usulan',
            'urutan'          => 2,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'USL-03',
            'deskripsi_kode'  => 'Usulan ditolak',
            'status_progres'  => 'usulan',
            'urutan'          => 3,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'USL-04',
            'deskripsi_kode'  => 'Usulan disetujui',
            'status_progres'  => 'usulan',
            'urutan'          => 4,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'PRP-01',
            'deskripsi_kode'  => 'Proposal diajukan',
            'status_progres'  => 'proposal',
            'urutan'          => 5,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'PRP-02',
            'deskripsi_kode'  => 'Proposal direvisi',
            'status_progres'  => 'proposal',
            'urutan'          => 6,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'PRP-03',
            'deskripsi_kode'  => 'Proposal ditolak',
            'status_progres'  => 'proposal',
            'urutan'          => 7,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'PRP-04',
            'deskripsi_kode'  => 'Proposal disetujui',
            'status_progres'  => 'proposal',
            'urutan'          => 8,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'PND-01',
            'deskripsi_kode'  => 'Pendanaan diajukan',
            'status_progres'  => 'pendanaan',
            'urutan'          => 9,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'PND-02',
            'deskripsi_kode'  => 'Pendanaan direvisi',
            'status_progres'  => 'pendanaan',
            'urutan'          => 10,
        ]);

        StatusKegiatan::create([
            'kode_kegiatan'   => 'PND-03',
            'deskripsi_kode'  => 'Pendanaan ditolak',
            'status_progres'  => 'pendanaan',
            'urutan'          => 11,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'PND-04',
            'deskripsi_kode'  => 'Pendanaan disetujui',
            'status_progres'  => 'pendanaan',
            'urutan'          => 12,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'LPR-01',
            'deskripsi_kode'  => 'Laporan diajukan',
            'status_progres'  => 'laporan',
            'urutan'          => 13,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'LPR-02',
            'deskripsi_kode'  => 'Laporan direvisi',
            'status_progres'  => 'laporan',
            'urutan'          => 14,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'LPR-03',
            'deskripsi_kode'  => 'Laporan ditolak',
            'status_progres'  => 'laporan',
            'urutan'          => 15,
        ]);

        statusKegiatan::create([
            'kode_kegiatan'   => 'LPR-04',
            'deskripsi_kode'  => 'Laporan disetujui',
            'status_progres'  => 'laporan',
            'urutan'          => 16,
        ]);
   }
}
