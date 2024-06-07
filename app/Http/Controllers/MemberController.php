<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('datamember', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'golongan_darah' => 'required|string|max:3',
            'nomor_ktp' => 'required|string|unique:members,nomor_ktp|size:16',
            'alamat' => 'required|string|max:255',
            'nomor_handphone' => 'required|string|max:20',
        ]);

        Member::create($request->all());

        return redirect()->route('members.index')
        ->with('success', 'Data anggota berhasil disimpan.');
    }

    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'golongan_darah' => 'required|string|max:3',
            'nomor_ktp' => 'required|string|unique:members,nomor_ktp,'.$member->id.'|size:16',
            'alamat' => 'required|string|max:255',
            'nomor_handphone' => 'required|string|max:20',
        ]);

        $member->update($request->all());

        return redirect()->route('members.index')
            ->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index')
            ->with('success', 'Data anggota berhasil dihapus.');
    }


}
