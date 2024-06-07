<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    @include('sidebar')

    <div class="content">
        <h2>WELCOME TO E-DOKTER DATABASE</h2>
        <div class="widget-container">
            <div class="widget">
                <h3>DATA DOKTER</h3>
                <p>JUMLAH : {{ $jumlahDokter }}</p>
            </div>

            <div class="widget">
                <h3>DATA PASIEN</h3>
                <p>JUMLAH : {{ $jumlahPasien }}</p>
            </div>
        </div>
    </div>
</body>
</html>
