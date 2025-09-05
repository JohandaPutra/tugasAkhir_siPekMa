<?php

namespace App\Models;

use App\Models\kegiatan\usulanKegiatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class jenisKegiatan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kegiatan';
    protected $fillable = ['nama_jenis_kegiatan', 'deskripsi'];

    public function usulanKegiatan()
    {
        return $this->hasMany(usulanKegiatan::class);
    }
}
