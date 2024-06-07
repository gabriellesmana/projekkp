<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalDokter; // Import model JadwalDokter

class HomeController extends Controller
{
    public function index()
    {
        $jadwal_dokter = JadwalDokter::all(); // Ambil semua data jadwal dokter
        return view('home', compact('jadwal_dokter')); // Kirim ke view home.blade.php
    }
}
