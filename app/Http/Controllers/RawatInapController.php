<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RawatInap;
use App\Models\Member;

class RawatInapController extends Controller
{
    public function index()
{
    $rawatInap = RawatInap::all();
    return view('datarawatinap', compact('rawatInap'));
}

    // Tambahkan metode ini
    public function createRawatInap()
    {
        $members = Member::all();
        return view('masukrawatinap', compact('members'));
    }

    public function storeRawatInap(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'nama_kontak_darurat' => 'required|string|max:255',
            'nomor_kontak_darurat' => 'required|string|max:20',
            'pilihan_kamar' => 'required|string|max:255',
            'lama_rawat_inap' => 'required|integer|min:1',
        ]);

        RawatInap::create($request->all());

        return redirect()->route('rawatinap.create')
            ->with('success', 'Data rawat inap berhasil disimpan.');
    }

}
