<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    use HasFactory;

    protected $table = 'fakultas';
    protected $fillable = ['nama_fakultas'];

    public function prodi()
    {
        return $this->hasMany(prodi::class);
    }
}
