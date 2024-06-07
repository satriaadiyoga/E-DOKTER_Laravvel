<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Data Dokter</title>
</head>
<body>
    @include('sidebar')

    <section id="content">
        <!-- Report Button -->
        <div id="addreport-button-container">
            <a href="/report-dokter">CETAK DATA</a>
            <a href="/add-dokter">TAMBAH</a>
        </div>

        <h1>Data Dokter</h1>

        <table class="data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID DOKTER</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>SPECIALIS</th>
                    <th>TELP</th>
                    <th>ALAMAT</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dokters as $dokter)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dokter->dokter_id }}</td>
                    <td>{{ $dokter->nama_lengkap }}</td>
                    <td>{{ $dokter->jenis_kelamin }}</td>
                    <td>{{ $dokter->spesialisasi }}</td>
                    <td>{{ $dokter->nomor_telepon }}</td>
                    <td>{{ $dokter->alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>
