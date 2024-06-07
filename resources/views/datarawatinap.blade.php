<!-- resources/views/datarawatinap.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rawat Inap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css\datarawatinap.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Data Rawat Inap</h1>
                <div class="card">
                    <div class="card-header">Data Rawat Inap</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">ID Pasien</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Kontak Darurat</th>
                                    <th scope="col">Nomor Kontak Darurat</th>
                                    <th scope="col">Kamar</th>
                                    <th scope="col">Lama Rawat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rawatInap as $rawat)
                                <tr>
                                    <th scope="row">{{ $rawat->id }}</th>
                                    <td>{{ $rawat->member->id_pasien }}</td>
                                    <td>{{ $rawat->member->nama_pasien }}</td>
                                    <td>{{ $rawat->nama_kontak_darurat }}</td>
                                    <td>{{ $rawat->nomor_kontak_darurat }}</td>
                                    <td>{{ $rawat->pilihan_kamar }}</td>
                                    <td>{{ $rawat->lama_rawat_inap }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
