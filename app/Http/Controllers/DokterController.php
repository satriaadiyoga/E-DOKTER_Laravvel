<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = DB::table('dokter')->get();
        
        return view('data-dokter', compact('dokters'));
    }
}
