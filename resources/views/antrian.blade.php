<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css\antrian.css">    
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1>Antrian Terbaru</h1>
            <div id="queueNumber" class="display-1">BM0</div>
            <div id="fullMessage" class="text-danger" style="display: none;">Antrian Penuh</div>
            <button id="printButton" class="btn btn-primary mt-3">Cetak</button>
            <button id="resetButton" class="btn btn-warning mt-3">Reset</button>
            <a href="{{ url('/home') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>

    <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ticketModalLabel">Tiket Antrian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="ticket">
                        <div class="text-center">
                            <h2>RS BINTANG MEDIKA</h2>
                            <p>Jl. Ir. Sutami Purwodadi Simpang Kecamatan Tajung Bintang Kabupaten Lampung Selatan Provinsi Lampung 35361 (021) Contoh</p>
                            <h3>Nomor Antrian Anda:</h3>
                            <div id="ticketQueueNumber" class="display-1">BM0</div>
                            <p>SILAHKAN MENUNGGU NOMOR ANTRIAN DIPANGGIL<br>NOMOR INI HANYA BERLAKU PADA HARI INI: <span id="todayDate"></span></p>
                            <p>TERIMAKASIH ANDA TELAH TERTIB</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="printTicket()">Print</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        const maxQueueNumber = 100;
        let queueNumber = localStorage.getItem('queueNumber') ? parseInt(localStorage.getItem('queueNumber')) : 0;

        function updateQueueNumber() {
            if (queueNumber <= maxQueueNumber) {
                document.getElementById('queueNumber').innerText = `BM${queueNumber}`;
                document.getElementById('ticketQueueNumber').innerText = `BM${queueNumber}`;
                document.getElementById('fullMessage').style.display = 'none';
                document.getElementById('printButton').disabled = false;
            } else {
                document.getElementById('fullMessage').style.display = 'block';
                document.getElementById('printButton').disabled = true;
            }
        }

        function printTicket() {
            window.print();
        }

        document.getElementById('printButton').addEventListener('click', () => {
            if (queueNumber <= maxQueueNumber) {
                queueNumber++;
                localStorage.setItem('queueNumber', queueNumber);
                updateQueueNumber();
                document.getElementById('ticket').style.display = 'block';
                const today = new Date();
                document.getElementById('todayDate').innerText = today.toLocaleDateString();
                const ticketModal = new bootstrap.Modal(document.getElementById('ticketModal'));
                ticketModal.show();
            }
        });

        document.getElementById('resetButton').addEventListener('click', () => {
            queueNumber = 0;
            localStorage.setItem('queueNumber', queueNumber);
            updateQueueNumber();
        });

        updateQueueNumber();
    </script>
</body>

</html>
