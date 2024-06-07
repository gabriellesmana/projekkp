<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Jadwal Dokter</title>

    <!-- CSS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- Custom CSS -->

   <link rel="stylesheet" href="css\buatjadwaldokter.css">
        
        
</head>

<style>
   /* Custom CSS for Tambah Jadwal Dokter */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #2c3e50; /* Warna latar belakang gelap */
    color: #fff; /* Warna teks */
}

.container {
    max-width: 500px;
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.1); /* Bayangan box */
}

h2 {
    color: black; /* Warna judul */
    margin-bottom: 20px;
}

.form-group label {
    color: #adb5bd; /* Warna label */
    font-weight: bold;
}

.form-control {
    border-color: #adb5bd; /* Warna border input */
    border-radius: 5px;
    color: #fff; /* Warna teks input */
    background-color: #fff; /* Warna latar belakang input */
}

.btn-primary {
    background-color: #007bff; /* Warna tombol primer */
    border: none;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #0056b3; /* Warna saat tombol primer dihover */
}

.alert-success {
    background-color: #28a745; /* Warna latar belakang alert sukses */
    color: #fff; /* Warna teks alert sukses */
    border-color: #218838; /* Warna border alert sukses */
    border-radius: 5px;
}

.alert {
    padding: 10px;
    margin-bottom: 20px;
}

/* Optional: Align buttons and form fields */
.form-group,
.btn-primary {
    margin-bottom: 15px;
}
</style>

<body >
    <div class="container my-5">
        <h2>Tambah Jadwal Dokter</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('jadwal.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group mb-3">
                <label for="bagian">Bagian</label>
                <input type="text" class="form-control" id="bagian" name="bagian" required>
            </div>
            <div class="form-group mb-3">
                <label for="poli">Poli</label>
                <select class="form-select" id="poli" name="poli" required>
                    <option value="" selected disabled>Pilih Poli</option>
                    <option value="penyakit-dalam">Poli Penyakit Dalam</option>
                    <option value="jantung">Poli Jantung</option>
                    <option value="gigi">Poli Gigi</option>
                    <option value="kebidanan">Poli Kebidanan</option>
                    <option value="bedah">Poli Bedah</option>
                    <option value="anak">Poli Anak</option>
                    <!-- Tambahkan pilihan poli lainnya sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="kelamin">Kelamin</label>
                <select class="form-select" id="kelamin" name="kelamin" required>
                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="jadwal">Jadwal</label>
                <select class="form-select" id="jadwal" name="jadwal" required>
                    <option value="" selected disabled>Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            
            <div class="form-group mb-3">
                <label for="jam">Jam</label>
                <input type="text" class="form-control" id="jam" name="jam" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
