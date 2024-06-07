<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=Overpass:ital,wght@0,600;1,600&family=Ubuntu&display=swap"
        rel="stylesheet">
    <!-- GOOGLE FONT -->

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS BOOTSTRAP -->

    <!-- CSS SAYA -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- CSS SAYA -->

</head>

<body>

    <!-- JS GABISA MASUK SELAIN DEKSTOP -->
    <script>
        // Function to check if device is desktop
        function isDesktop() {
            return !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
        }
        // Function to display warning message if not desktop
        function showDeviceWarning() {
            if (!isDesktop()) {
                // Menampilkan alert dengan pesan peringatan
                alert("Maaf, perangkat Anda tidak mendukung. Harap gunakan PC/Laptop untuk pengalaman terbaik.");
                // Menghentikan proses tampilan konten
                document.body.style.display = 'none';
            }
        }
        // Memanggil fungsi untuk menampilkan pesan peringatan saat halaman dimuat
        showDeviceWarning();
    </script>
    <!-- JS GABISA MASUK SELAIN DEKSTOP -->

    <!-- BAGIAN LOGIN -->
    <section id="login" class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Silahkan Login</h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="row mt-3">
                <div class="col">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ $errors->first() }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="input-box">
                        <input type="text" placeholder="*Username" id="username" name="username"
                            class="form-control @error('username') is-invalid @enderror" required>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="input-box">
                        <input type="password" placeholder="*Password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- JS BOOTSTRAP -->

    <!-- JS SAYA -->
    <script src="{{ asset('js/login.js') }}"></script>
    <!-- AKHIR JS SAYA -->

</body>

</html>
