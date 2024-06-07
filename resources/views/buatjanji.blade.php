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
        <form id="appointmentForm" action="{{ route('submit.appointment') }}" method="POST" novalidate>
            @csrf
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Janji</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal_janji" required>
                <div class="invalid-feedback">
                    Tanggal Janji harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="dokter" class="form-label">Pilih Dokter</label>
                <select class="form-select" id="dokter" name="dokter" required>
                    <option value="">Pilih Dokter</option>
                    <option value="Dokter A">Dokter A</option>
                    <option value="Dokter B">Dokter B</option>
                    <option value="Dokter C">Dokter C</option>
                </select>
                <div class="invalid-feedback">
                    Dokter harus dipilih.
                </div>
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Jam Bertemu Dokter</label>
                <select class="form-select" id="jam" name="jam_bertemu" required>
                    <!-- Jam bertemu dokter akan ditambahkan setelah memilih dokter -->
                </select>
                <div class="invalid-feedback">
                    Jam Bertemu Dokter harus dipilih.
                </div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama_lengkap"
                    placeholder="Masukkan Nama Lengkap" required pattern="[A-Za-z\s]+">
                <div class="invalid-feedback">
                    Nama harus berupa huruf.
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat-lahir" name="tempat_lahir"
                        placeholder="Masukkan Tempat Lahir" required pattern="[A-Za-z\s]+">
                    <div class="invalid-feedback">
                        Tempat lahir harus berupa huruf.
                    </div>
                </div>
                <div class="col">
                    <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal-lahir" name="tanggal_lahir" required>
                    <div class="invalid-feedback">
                        Tanggal Lahir harus diisi.
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" id="agama" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <div class="invalid-feedback">
                        Agama harus dipilih.
                    </div>
                </div>
                <div class="col">
                    <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis-kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <div class="invalid-feedback">
                        Jenis Kelamin harus dipilih.
                    </div>
                </div>
                <div class="col">
                    <label for="golongan-darah" class="form-label">Golongan Darah</label>
                    <select class="form-select" id="golongan-darah" name="golongan_darah" required>
                        <option value="">Pilih Golongan Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    <div class="invalid-feedback">
                        Golongan Darah harus dipilih.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="nomor-ktp" class="form-label">Nomor KTP</label>
                <input type="text" class="form-control" id="nomor-ktp" name="nomor_ktp"
                    placeholder="Contoh 1373********2" required pattern="[0-9]+">
                <div class="invalid-feedback">
                    Nomor KTP harus berupa angka.
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat" required></textarea>
                <div class="invalid-feedback">
                    Alamat harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="nomor-hp" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="nomor-hp" name="nomor_hp"
                    placeholder="Masukkan Nomor Handphone" required pattern="[0-9]+">
                <div class="invalid-feedback">
                    Nomor Handphone harus berupa angka.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="contoh@gmail.com" required>
                <div class="invalid-feedback">
                    Email harus diisi dengan format yang benar.
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="status-pernikahan" class="form-label">Status Pernikahan</label>
                    <select class="form-select" id="status-pernikahan" name="status_pernikahan" required>
                        <option value="">Pilih Status Pernikahan</option>
                        <option value="single">Single</option>
                        <option value="menikah">Menikah</option>
                        <option value="cerai">Cerai</option>
                    </select>
                    <div class="invalid-feedback">
                        Status Pernikahan harus dipilih.
                    </div>
                </div>
                <div class="col">
                    <label for="kontak-darurat-nama" class="form-label">Nama Kontak Darurat</label>
                    <input type="text" class="form-control" id="kontak-darurat-nama" name="kontak_darurat_nama"
                        placeholder="Masukkan Nama Kontak Darurat" required pattern="[A-Za-z\s]+">
                    <div class="invalid-feedback">
                        Nama Kontak Darurat harus berupa huruf.
                    </div>
                </div>
                <div class="col">
                    <label for="kontak-darurat-nomor-hp" class="form-label">Nomor HP Kontak Darurat</label>
                    <input type="text" class="form-control" id="kontak-darurat-nomor-hp"
                        name="kontak_darurat_nomor_hp" placeholder="Masukkan Nomor Handphone Kontak Darurat" required
                        pattern="[0-9]+">
                    <div class="invalid-feedback">
                        Nomor Handphone Kontak Darurat harus berupa angka.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="kontak-darurat-alamat" class="form-label">Alamat Kontak Darurat</label>
                <textarea class="form-control" id="kontak-darurat-alamat" name="kontak_darurat_alamat" rows="3"
                    placeholder="Masukkan Alamat Kontak Darurat" required></textarea>
                <div class="invalid-feedback">
                    Alamat Kontak Darurat harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                <textarea class="form-control" id="keluhan" name="keluhan" rows="3" placeholder="Masukkan Keluhan"
                    required></textarea>
                <div class="invalid-feedback">
                    Keluhan harus diisi.
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFyC8MMVr9mlyQ9cn4GAJeVDh7I4p6jI5aF9C8BBE+8RyI7/Ru0pddT/O3" crossorigin="anonymous">
    </script>

    <script>
        // Daftar jadwal jam bertemu dokter
        const jadwalDokter = {
            "Dokter A": ["09:00", "10:00", "11:00"],
            "Dokter B": ["09:30", "10:30", "11:30"],
            "Dokter C": ["10:00", "11:00", "12:00"]
        };

        // Function untuk mengisi pilihan jam bertemu dokter berdasarkan dokter dan tanggal
        function isiPilihanJam() {
            const dokterTerpilih = document.getElementById('dokter').value;
            const tanggalTerpilih = document.getElementById('tanggal').value;
            const jamSelect = document.getElementById('jam');

            // Kosongkan pilihan jam sebelumnya
            jamSelect.innerHTML = '';

            // Ambil jadwal jam bertemu dokter berdasarkan dokter terpilih
            const jadwal = jadwalDokter[dokterTerpilih];

            // Jika ada jadwal untuk dokter terpilih, tambahkan pilihan jam
            if (jadwal) {
                jadwal.forEach(jam => {
                    jamSelect.innerHTML += `<option value="${jam}">${jam}</option>`;
                });
            } else {
                jamSelect.innerHTML += `<option value="">Pilih Tanggal terlebih dahulu</option>`;
            }
        }

        // Tambahkan event listener ke dokter dan tanggal
        document.getElementById('dokter').addEventListener('change', isiPilihanJam);
        document.getElementById('tanggal').addEventListener('change', isiPilihanJam);

        // Panggil fungsi isiPilihanJam saat halaman dimuat untuk memastikan pilihan jam yang benar ditampilkan
        isiPilihanJam();

        // Validasi form
        const form = document.getElementById('appointmentForm');

        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();

                // Tampilkan pesan kesalahan pada setiap elemen formulir yang tidak valid
                const elements = form.querySelectorAll(':invalid');
                elements.forEach(element => {
                    // Dapatkan pesan kesalahan bawaan dari browser
                    const errorMessage = element.validationMessage;

                    // Tampilkan pesan kesalahan di samping elemen
                    const errorSpan = document.createElement('span');
                    errorSpan.classList.add('text-danger');
                    errorSpan.textContent = errorMessage;

                    // Cek apakah sudah ada pesan kesalahan sebelumnya, jika iya, hapus pesan tersebut
                    const existingError = element.parentElement.querySelector('.text-danger');
                    if (existingError) {
                        element.parentElement.removeChild(existingError);
                    }

                    element.parentElement.appendChild(errorSpan);
                });
            }

            form.classList.add('was-validated');
        });
    </script>
</body>

</html>
