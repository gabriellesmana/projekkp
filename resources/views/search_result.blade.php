<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Janji Pasien</title>
    <link rel="stylesheet" href="css/tabel.css">
</head>
<body>
    <h2>Data Janji Pasien RS Bintang Medika</h2>
    <div class="container">
        <table class="tabel-terstyl">
            <thead>
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataJanji as $key => $janji)
                    <tr data-janji='@json($janji)'>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $janji->tanggal_janji }}</td>
                        <td>{{ $janji->nama_lengkap }}</td>
                        <td>{{ $janji->nomor_hp }}</td>
                        <td>{{ $janji->alamat }}</td>
                        <td>
                            <input type="checkbox" class="status-checkbox" data-id="{{ $janji->id }}" {{ $janji->status == 'sudah dipanggil' ? 'checked' : '' }}>
                        </td>
                        <td><button class="print-btn" onclick="printDetail({{ $key }})">Cetak</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // JavaScript untuk meng-handle perubahan status dan pencetakan
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.status-checkbox').forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    var janjiId = this.getAttribute('data-id');
                    var isChecked = this.checked;

                    // Kirim permintaan ke server untuk memperbarui status pasien
                    fetch(`/update-status/${janjiId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ status: isChecked ? 'sudah dipanggil' : 'belum dipanggil' })
                    }).then(response => response.json())
                      .then(data => {
                          if (data.success) {
                              alert('Status pasien berhasil diperbarui.');
                          } else {
                              alert('Gagal memperbarui status pasien.');
                          }
                      }).catch(error => {
                          console.error('Error:', error);
                          alert('Terjadi kesalahan saat memperbarui status pasien.');
                      });
                });
            });
        });

        function printDetail(key) {
            var row = document.querySelectorAll('tr[data-janji]')[key];
            var janji = JSON.parse(row.getAttribute('data-janji'));

            // Logika pencetakan data pasien ke jendela baru
            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>Print Data Janji Pasien</title>');
            printWindow.document.write('<style>body { font-family: Arial, sans-serif; } .cv-container { margin-bottom: 50px; } h2 { text-align: start; } .cv-header { font-weight: normal; margin-bottom: 5px; } .cv-content { margin-bottom: 5px; } h3 {text-align: center; color: yellow;} p {text-align: center; font-size :12px; font-weight: lighter;}</style>');
            printWindow.document.write('</head><body>');
            printWindow.document.write('<div class="cv-header"><img src="path/to/your/image/Cuplikan-layar-2024-05-31-184915.png" alt="Header Image"><h3>RUMAH SAKIT BINTANG MEDIKA</h3><p>Jl. Ir Sutami Purwodadi Simpang Kec. Tanjung Bintang<br>Kab. Lampung Selatan Provinsi Lampung Kode Pos : 35361<br>Email : rsbintangmedika@gmail.com</p></div>');
            printWindow.document.write('<div class="cv-container">');
            printWindow.document.write('<h2>Data Pasien</h2>');
            printWindow.document.write('<div class="cv-header">Nama : ' + janji.nama_lengkap + '</div>');
            printWindow.document.write('<div class="cv-content">Jenis Kelamin : ' + janji.jenis_kelamin + '</div>');
            printWindow.document.write('<div class="cv-content">Tempat Tanggal Lahir : ' + janji.tempat_lahir + ', ' + janji.tanggal_lahir + '</div>');
            printWindow.document.write('<div class="cv-content">Status : ' + janji.status_pernikahan + '</div>');
            printWindow.document.write('<div class="cv-content">Alamat : ' + janji.alamat + '</div>');
            printWindow.document.write('<div class="cv-content">Kewarganegaraan : Indonesia</div>');
            printWindow.document.write('<div class="cv-content">Agama : ' + janji.agama + '</div>');
            printWindow.document.write('<div class="cv-content">Nomor HP : ' + janji.nomor_hp + '</div>');
            printWindow.document.write('<div class="cv-content">Email : ' + janji.email + '</div>');
            printWindow.document.write('<div class="cv-content">Nomor KTP : ' + janji.nomor_ktp + '</div>');
            printWindow.document.write('<div class="cv-content">Golongan Darah : ' + janji.golongan_darah + '</div>');
            printWindow.document.write('<div class="cv-content">Kontak Darurat - Nama : ' + janji.kontak_darurat_nama + '</div>');
            printWindow.document.write('<div class="cv-content">Kontak Darurat - Nomor HP : ' + janji.kontak_darurat_nomor_hp + '</div>');
            printWindow.document.write('<div class="cv-content">Kontak Darurat - Alamat : ' + janji.kontak_darurat_alamat + '</div>');
            printWindow.document.write('<div class="cv-content">Keluhan : ' + janji.keluhan + '</div>');
            printWindow.document.write('<div class="cv-content">Created : ' + janji.created_at + '</div>');
            printWindow.document.write('</div>');
            printWindow.document.write('<script>window.onafterprint = function() { window.close(); window.location.href = "http://rumahsakit.test/tabel"; };</' + 'script>');
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function deleteAllRows() {
            fetch('/delete-all', {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      alert('Semua data berhasil dihapus.');
                      document.querySelector('.tabel-terstyl tbody').innerHTML = '';
                  } else {
                      alert('Gagal menghapus data.');
                  }
              }).catch(error => {
                  console.error('Error:', error);
                  alert('Terjadi kesalahan saat menghapus data.');
              });
        }
    </script>

</body>
</html>
