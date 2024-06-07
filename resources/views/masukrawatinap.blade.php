<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Rawat Inap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css\masukrawatinap.css">

</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Input Data Rawat Inap</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rawatinap.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="member_id" class="form-label">Pilih Pasien</label>
                                <select class="form-select" id="member_id" name="member_id" required>
                                    @foreach($members as $member)
                                        <option value="{{ $member->id }}">{{ $member->id_pasien }} - {{ $member->nama_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nama_kontak_darurat" class="form-label">Nama Kontak Darurat</label>
                                <input type="text" class="form-control" id="nama_kontak_darurat" name="nama_kontak_darurat" required>
                            </div>

                            <div class="mb-3">
                                <label for="nomor_kontak_darurat" class="form-label">Nomor Kontak Darurat</label>
                                <input type="text" class="form-control" id="nomor_kontak_darurat" name="nomor_kontak_darurat" required>
                            </div>

                            <div class="mb-3">
                                <label for="pilihan_kamar" class="form-label">Pilihan Kamar</label>
                                <input type="text" class="form-control" id="pilihan_kamar" name="pilihan_kamar" required>
                            </div>

                            <div class="mb-3">
                                <label for="lama_rawat_inap" class="form-label">Lama Rawat Inap (hari)</label>
                                <input type="number" class="form-control" id="lama_rawat_inap" name="lama_rawat_inap" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
