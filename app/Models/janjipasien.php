<?php

// JanjiPasien.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class JanjiPasien extends Model
{
    protected $table = 'janji_pasien';
    use HasFactory;


    protected $fillable = [
        'tanggal_janji',
        'dokter',
        'jam_bertemu',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'jenis_kelamin',
        'golongan_darah',
        'nomor_ktp',
        'alamat',
        'nomor_hp',
        'email',
        'status_pernikahan',
        'kontak_darurat_nama',
        'kontak_darurat_nomor_hp',
        'kontak_darurat_alamat',
        'keluhan',
        'status'
    ];


}

