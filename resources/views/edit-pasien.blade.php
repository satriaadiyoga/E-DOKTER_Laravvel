<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <title>Edit Data Pasien</title>
</head>
<body>
    <section id="content">
        <h1>EDIT DATA PASIEN</h1>

        <form method="POST" action="{{ url('/update-pasien/'.$pasien->pasien_id) }}">
            @csrf
            @method('get')
            <label for="nama">NAMA</label>
            <input type="text" id="nama" name="nama" value="{{ $pasien->nama_lengkap }}">

            <label for="jenis_kelamin">JENIS KELAMIN</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>LAKI-LAKI</option>
                <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>PEREMPUAN</option>
            </select>

            <label for="tanggal_lahir">TANGGAL LAHIR</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}">

            <label for="nomor_telepon">TELP</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" value="{{ $pasien->nomor_telepon }}">

            <label for="alamat">ALAMAT</label>
            <textarea id="alamat" name="alamat">{{ $pasien->alamat }}</textarea>

            <label for="riwayat_penyakit">RIWAYAT PENYAKIT</label>
            <textarea id="riwayat_penyakit" name="riwayat_penyakit">{{ $pasien->riwayat_penyakit }}</textarea>

            <a type="cancel" href="/data-pasien">KEMBALI</a>
            <button type="submit">SIMPAN PERUBAHAN</button>
        </form>
    </section>
</body>
</html>
