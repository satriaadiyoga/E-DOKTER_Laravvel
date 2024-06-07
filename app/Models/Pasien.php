<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien'; // Nama tabel di database

    protected $primaryKey = 'pasien_id'; // Nama kolom primary key

    protected $fillable = [
        'nama_lengkap', 
        'jenis_kelamin', 
        'tanggal_lahir', 
        'nomor_telepon', 
        'alamat', 
        'riwayat_penyakit'
    ];
}
