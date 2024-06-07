<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RS Bintang Medika Dashboard</title>

    <!-- CSS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <!-- Navbar Atas -->
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/WhatsApp_Image_2024-04-30_at_12.51.37_a6bfb413-removebg-preview.png" width="40"
                    height="30" class="d-inline-block align-top" alt="">
                RS BINTANG MEDIKA
            </a>
            <form class="d-flex search-box">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
            <!-- Checkbox Mode -->
            <div class="form-check form-switch mode-toggle">
                <input class="form-check-input" type="checkbox" id="theme-toggle">
                <label class="form-check-label" for="theme-toggle"></label>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar Atas -->

<!-- Navbar Samping -->
<nav class="side-navbar navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('jadwal.create') }}">Tambah Jadwal Dokter</a>
        </li>                  
        <li class="nav-item">
            <a class="nav-link" href="{{ route('antrian') }}">Ambil Antrian</a>
        </li>                  
        <li class="nav-item">
            <a class="nav-link" href="{{ route('masukmember') }}">Daftar Member</a>
        </li>                  
        <li class="nav-item">
            <a class="nav-link" href="{{ route('datamember') }}">Data Member</a>
        </li>                  
        <li class="nav-item">
            <a class="nav-link" href="{{ route('datarawatinap') }}">Data Rawat Inap</a>
        </li>                     
    </ul>
    <div class="logout-container">
        <button class="btn btn-logout">Logout</button>
    </div>
</nav>
<!-- Akhir Navbar Samping -->



    <!-- Bagian Utama -->
    <section class="main-content pt-5">
        <div class="container-fluid">
            <div class="row" id="dash">
                <div class="col">
                    <h1>Dashboard <span class="text-muted">Versi 1.0</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card text-white bg-primary" id="card1">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Poli </h5>
                            <p class="card-text">Pasien Silahkan Daftar Poli Disini </p>
                            <a href="{{ url('/buat-janji') }}" class="btn btn-light">Cek Disini</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card text-white bg-danger" id="card2">
                        <div class="card-body">
                            <h5 class="card-title">Data Pasien Antrian Poli</h5>
                            <p class="card-text">Informasi pasien antrian poli</p>
                            <a href="{{ url('/tabel') }}" class="btn btn-light">Cek Disini</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card text-white bg-success" id="card3">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Rawat Inap</h5>
                            <p class="card-text">Informasi rawat inap</p>
                            <a href="{{ route('rawatinap.create') }}" class="btn btn-light">Cek Disini</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card text-white bg-warning" id="card4">
                        <div class="card-body">
                            <h5 class="card-title">Rekam Medis Pasien</h5>
                            <p class="card-text">Rekam medis pasien</p>
                            <a href="#" class="btn btn-light">Cek Disini</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-5" id="tabel">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Jadwal Dokter RS Bintang Medika
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Bagian</th>
                                    <th>Poli</th>
                                    <th>Kelamin</th>
                                    <th>Jadwal</th>
                                    <th>Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwal_dokter as $jadwal)
                                <tr>
                                    <td>{{ $jadwal->nama }}</td>
                                    <td>{{ $jadwal->bagian }}</td>
                                    <td>{{ $jadwal->poli }}</td>
                                    <td>{{ $jadwal->kelamin }}</td>
                                    <td>{{ $jadwal->jadwal }}</td>
                                    <td>{{ $jadwal->jam }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Utama -->

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        // Fungsi untuk mengubah mode tema berdasarkan status checkbox
function toggleTheme() {
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
}

// Mendengarkan perubahan pada checkbox
document.getElementById('theme-toggle').addEventListener('change', function() {
    toggleTheme();
});

// Fungsi untuk memeriksa mode tema saat halaman dimuat
function checkTheme() {
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
        document.getElementById('theme-toggle').checked = true;
    } else {
        document.getElementById('theme-toggle').checked = false;
    }
}

// Memeriksa mode tema saat halaman dimuat
checkTheme();

    </script>
</body>

</html>
