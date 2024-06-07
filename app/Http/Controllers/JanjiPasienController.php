<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JanjiPasien;

class JanjiPasienController extends Controller
{
    public function updateStatus(Request $request, $id)
    {
        $janji = JanjiPasien::find($id);
        if ($janji) {
            $janji->status = $request->status;
            $janji->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'Janji tidak ditemukan']);
    }

    public function index()
    {
        $dataJanji = JanjiPasien::limit(50)->get();
        return view('tabel', compact('dataJanji'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            
        ]);

          // Buat janji pasien menggunakan metode Eloquent create
    try {
        JanjiPasien::create($request->all());

        // Redirect ke halaman antrian
        return redirect()->route('antrian')->with('success', 'Janji berhasil dibuat.');
    } catch (\Exception $e) {
        // Tangani kesalahan jika terjadi
        return redirect()->back()->with('error', 'Gagal membuat janji: ' . $e->getMessage());
    }

        $tanggal = $request->input('tanggal');
        $dataJanji = JanjiPasien::whereDate('tanggal_janji', $tanggal)->get();

        return view('search_result', compact('dataJanji'));
    }

    public function submitAppointment(Request $request)
    {
        $request->validate([
            'tanggal_janji' => 'required|date',
            'dokter' => 'required|string',
            'jam_bertemu' => 'required|string',
            'nama_lengkap' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'golongan_darah' => 'required|string',
            'nomor_ktp' => 'required|string',
            'alamat' => 'required|string',
            'nomor_hp' => 'required|string',
            'email' => 'required|email',
            'status_pernikahan' => 'required|string',
            'kontak_darurat_nama' => 'required|string',
            'kontak_darurat_nomor_hp' => 'required|string',
            'kontak_darurat_alamat' => 'required|string',
            'keluhan' => 'required|string',
        ]);

        JanjiPasien::create($request->all());

        // Redirect ke halaman antrian
        return redirect()->route('antrian')->with('success', 'Janji berhasil dibuat.');
    }

    public function showAntrian()
    {
        return view('antrian'); // Pastikan view ini ada
    }

    public function deleteAll()
    {
        JanjiPasien::truncate();
        return response()->json(['success' => true]);
    }
}
