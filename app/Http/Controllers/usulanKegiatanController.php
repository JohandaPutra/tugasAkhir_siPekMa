<?php

namespace App\Http\Controllers;

use App\Models\kegiatan\usulanKegiatan;
use Illuminate\Http\Request;

class usulanKegiatanController extends Controller
{
    public function index()
    {
        $usulan = usulanKegiatan::with(['jenisKegiatan', 'statusKegiatan', 'user'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('content.Kegiatan.usulan-kegiatan.Usulan', compact('usulan'));
    }
}
