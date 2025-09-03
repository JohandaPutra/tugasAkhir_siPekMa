<?php

namespace App\Http\Controllers\kegiatan;

use App\Http\Controllers\Controller;
use App\Models\kegiatan\riwayatKegiatan;
use Illuminate\Http\Request;

class Riwayat extends Controller
{
   public function index()
  {
    return view('content.Kegiatan.riwayat-kegiatan.Riwayat');
  }
}
