<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kegiatan\usulanKegiatan;

class jenisPendanaan extends Model
{
    use HasFactory;

    protected $table = 'jenis_pendanaan';
    protected $fillable = ['nama_jeni_pendanaan', 'deskripsi'];

    public function usulanKegiatan()
    {
        return $this->hasMany(usulanKegiatan::class);
    }
}
