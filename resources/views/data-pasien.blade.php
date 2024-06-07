<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Data Pasien</title>
</head>
<body>
    @include('sidebar')

    <section id="content">
        <!-- Report Button -->
        <div id="addreport-button-container">
            <a href="/report-pasien">CETAK DATA</a>
            <a href="/add-pasien">TAMBAH</a>
        </div>

        <h1>DATA PASIEN</h1>

        <table class="data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID PASIEN</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>TANGGAL LAHIR</th>
                    <th>TELP</th>
                    <th>ALAMAT</th>
                    <th>RIWAYAT PENYAKIT</th>
                    <th>EDIT</th>
                    <th>HAPUS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pasien as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->pasien_id }}</td>
                    <td>{{ $row->nama_lengkap }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                    <td>{{ $row->tanggal_lahir }}</td>
                    <td>{{ $row->nomor_telepon }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->riwayat_penyakit }}</td>
                    <td><a class="edit" href="/edit-pasien/{{ $row->pasien_id }}">EDIT</a></td>
                    <td><a class="hapus" href="/hapus-pasien/{{ $row->pasien_id }}">HAPUS</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="10">TIDAK ADA DATA PASIEN</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </section>
</body>
</html>
