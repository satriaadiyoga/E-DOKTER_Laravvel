<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    <title>Tambah Data Pasien</title>
</head>
<body>
    <section id="content">
        <h1>TAMBAH DATA PASIEN</h1>

        <form method="POST" action="{{ url('/tambah-pasien/') }}">
            @csrf
            <label for="nama">NAMA</label>
            <input type="text" id="nama" name="nama">

            <label for="jenis_kelamin">JENIS KELAMIN</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki">LAKI-LAKI</option>
                <option value="Perempuan">PEREMPUAN</option>
            </select>

            <label for="tanggal_lahir">TANGGAL LAHIR</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir">

            <label for="nomor_telepon">NOMOR TELEPHONE</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon">

            <label for="alamat">ALAMAT</label>
            <textarea id="alamat" name="alamat"></textarea>

            <label for="riwayat_penyakit">RIWAYAT PENYAKIT</label>
            <textarea id="riwayat_penyakit" name="riwayat_penyakit"></textarea>

            <a type="cancel" href="/data-pasien">KEMBALI</a>
            <button type="submit">TAMBAH DATA</button>
        </form>
    </section>
</body>
</html>
