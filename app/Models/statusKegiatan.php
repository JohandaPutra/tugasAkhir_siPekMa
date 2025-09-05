<?php

namespace App\Models;

use App\Models\kegiatan\usulanKegiatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;



class statusKegiatan extends Model
{
    use HasFactory;
    protected $table = 'status_kegiatan';
    protected $fillable = [
        'kode_kegiatan',
        'deskripsi_kode',
        'status_progres',
        'urutan'
    ];

    public function usulanKegiatan()
    {
        return $this->hasMany(usulanKegiatan::class);
    }

    public function badgeClass()
    {
        $desc = strtolower($this->deskripsi_kode ?? '');

        if (Str::contains($desc, 'diajukan')) {
            return 'bg-label-primary';
        } elseif (Str::contains($desc, 'direvisi')) {
            return 'bg-label-warning';
        } elseif (Str::contains($desc, 'ditolak')) {
            return 'bg-label-danger';
        } elseif (Str::contains($desc, 'disetujui')) {
            return 'bg-label-success';
        }

        return 'bg-label-secondary';
      }
}
