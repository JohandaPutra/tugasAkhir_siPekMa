<?php

namespace App\Models\kegiatan;

use App\Models\jenisKegiatan;
use App\Models\jenisPendanaan;
use App\Models\statusKegiatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;



class usulanKegiatan extends Model
{
    use HasFactory;
    protected $table = 'usulan_kegiatan';
    protected $fillable = [
        'user_id',
        'nama_kegiatan',
        'deskripsi_kegiatan',
        'jenis_kegiatan_id',
        'tempat_kegiatan',
        'jenis_pendanaan_id',
        'tanggal_kegiatan',
        'status_kegiatan_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

     public function jenisKegiatan()
    {
        return $this->belongsTo(jenisKegiatan::class, 'jenis_kegiatan_id');
    }

    public function jenisPendanaan()
    {
        return $this->belongsTo(jenisPendanaan::class, 'jenis_pendanaan_id');
    }
    public function statusKegiatan()
    {
        return $this->belongsTo(statusKegiatan::class, 'status_kegiatan_id');
    }


}
