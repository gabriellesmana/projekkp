<!-- resources/views/keluarmember.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css\datamember.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Data Member</h1>
                <div class="card">
                    <div class="card-header">Data Member</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID Pasien</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Golongan Darah</th>
                                    <th scope="col">Nomor KTP</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor Handphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                <tr>
                                    <th scope="row">{{ $member->id_pasien }}</th>
                                    <td>{{ $member->nama_pasien }}</td>
                                    <td>{{ $member->tempat_lahir }}</td>
                                    <td>{{ $member->tanggal_lahir }}</td>
                                    <td>{{ $member->agama }}</td>
                                    <td>{{ $member->jenis_kelamin }}</td>
                                    <td>{{ $member->golongan_darah }}</td>
                                    <td>{{ $member->nomor_ktp }}</td>
                                    <td>{{ $member->alamat }}</td>
                                    <td>{{ $member->nomor_handphone }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('masukmember') }}" class="btn btn-primary">Tambah Anggota</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
