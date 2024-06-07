<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::all();
        
        return view('data-pasien', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-pasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'nomor_telepon' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'riwayat_penyakit' => 'nullable|string|max:1000',
        ]);

        // Simpan perubahan
        Pasien::create([
            'nama_lengkap'=> $request->nama,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'nomor_telepon'=> $request->nomor_telepon,
            'alamat'=> $request->alamat,
            'riwayat_penyakit'=> $request->riwayat_penyakit,
        ]);

        return redirect('/data-pasien')->with('success', 'Data pasien berhasil diperbarui.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        // Pastikan pasien ditemukan
        if (!$pasien) {
            return redirect()->back()->with('error', 'Pasien tidak ditemukan.');
        }
        return view('edit-pasien', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $pasien_id)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'nomor_telepon' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'riwayat_penyakit' => 'nullable|string|max:1000',
        ]);

        // Simpan perubahan
        $pasien = Pasien::find($pasien_id);
        $pasien->update([
            'nama_lengkap'=> $request->nama,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'nomor_telepon'=> $request->nomor_telepon,
            'alamat'=> $request->alamat,
            'riwayat_penyakit'=> $request->riwayat_penyakit,
        ]);

        return redirect('/data-pasien')->with('success', 'Data pasien berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
    
        return redirect('/data-pasien')->with('success', 'Data pasien berhasil dihapus.');
    }
}
