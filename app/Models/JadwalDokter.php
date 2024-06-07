<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;

    protected $table = 'jadwal_dokter'; // Menentukan nama tabel jika tidak mengikuti konvensi penamaan

    protected $fillable = [
        'nama', 'bagian', 'poli', 'kelamin', 'jadwal', 'jam'
    ];
}
