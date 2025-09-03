<?php

namespace App\Models\kegiatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class usulanKegiatan extends Model
{
    use HasFactory;
    protected $table = 'usulan_kegiatan';
    protected $fillable = [
        'judul_kegiatan',
        'deskripsi',
        'tanggal',
        'user_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
