<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css\buatjanji.css">

    <title>Buat Janji</title>
</head>

<body>
    <div class="container" id="Formulir">
        <h1 class="text-center">Form Pendaftaran Pasien</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('members.store') }}">
            @csrf
            <label for="nama_pasien">Nama Pasien:</label><br>
            <input type="text" id="nama_pasien" name="nama_pasien" required><br><br>
    
            <label for="tempat_lahir">Tempat Lahir:</label><br>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required><br><br>
    
            <label for="tanggal_lahir">Tanggal Lahir:</label><br>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>
    
            <label for="agama">Agama:</label><br>
            <input type="text" id="agama" name="agama" required><br><br>
    
            <label for="jenis_kelamin">Jenis Kelamin:</label><br>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br><br>
    
            <label for="golongan_darah">Golongan Darah:</label><br>
            <input type="text" id="golongan_darah" name="golongan_darah" required><br><br>
    
            <label for="nomor_ktp">Nomor KTP:</label><br>
            <input type="text" id="nomor_ktp" name="nomor_ktp" required><br><br>
    
            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat" required><br><br>
    
            <label for="nomor_handphone">Nomor Handphone:</label><br>
            <input type="text" id="nomor_handphone" name="nomor_handphone" required><br><br>
    
            <button type="submit">Simpan</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFyC8MMVr9mlyQ9cn4GAJeVDh7I4p6jI5aF9C8BBE+8RyI7/Ru0pddT/O3" crossorigin="anonymous">
    </script>


</body>

</html>
