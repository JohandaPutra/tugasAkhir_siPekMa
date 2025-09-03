<?php

namespace App\Http\Controllers\kegiatan;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Proposal extends Controller
{
   public function index()
  {
    return view('content.Kegiatan.proposal-kegiatan.Proposal');
  }
}
