<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahDokter = DB::table('dokter')->count();
        $jumlahPasien = DB::table('pasien')->count();
        
        return view('dashboard', compact('jumlahDokter', 'jumlahPasien'));
    }
}
