<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalDokter;

class JadwalDokterController extends Controller
{
    public function index()
    {
        $jadwal_dokter = JadwalDokter::all();
        return view('home', compact('jadwal_dokter'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'bagian' => 'required|string|max:255',
            'poli' => 'required|string|max:255',
            'kelamin' => 'required|string|max:255',
            'jadwal' => 'required|string|max:255',
            'jam' => 'required|string|max:255',
        ]);

        JadwalDokter::create($request->all());

        return redirect()->route('jadwal.create')->with('success', 'Jadwal dokter berhasil ditambahkan.');
    }
}
