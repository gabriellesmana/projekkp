<?php

// app/Models/Member.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    use HasFactory;

    protected $fillable = ['nama_pasien', 'tempat_lahir', 'tanggal_lahir', 'agama', 'jenis_kelamin', 'golongan_darah', 'nomor_ktp', 'alamat', 'nomor_handphone'
];



    public function rawatInap()
    {
        return $this->hasMany(RawatInap::class);
    }

    // Event Model: Digunakan untuk menjalankan logika sebelum menyimpan entitas Member
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($member) {
            $member->id_pasien = static::generateUniqueId($member->nomor_ktp);
        });
    }

    // Metode untuk menghasilkan ID Pasien sesuai dengan format yang diinginkan
    protected static function generateUniqueId($nomor_ktp)
    {
        // Ambil 10 digit terakhir dari nomor KTP
        $last_ten_digits = substr($nomor_ktp, -10);

        // Gabungkan dengan angka 4 di depan
        $id_pasien = '4' . $last_ten_digits;

        return $id_pasien;
    }
}

