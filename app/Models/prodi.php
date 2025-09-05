<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $fillable = ['fakultas_id', 'nama_prodi'];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
