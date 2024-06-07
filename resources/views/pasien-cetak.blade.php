<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Pasien</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 10pt;
      padding: 5px 5px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Pasien</h3>
  <table class="table-data">
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
                </tr>
                @empty
                <tr>
                    <td colspan="10">TIDAK ADA DATA PASIEN</td>
                </tr>
                @endforelse
            </tbody>
</body>

</html>
