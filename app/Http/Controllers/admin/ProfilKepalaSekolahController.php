<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\ProfilKepalaSekolah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProfilKepalaSekolahController extends Controller
{
    public function index()
    {
        $data = ProfilKepalaSekolah::first();
        return view('admin.pages.master-data.profil-kepala-sekolah.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.master-data.profil-kepala-sekolah.create');
    }

    public function store(Request $request)
    {
        $profilKepalaSekolah = new ProfilKepalaSekolah();
        $profilKepalaSekolah->nama = $request->nama;
        $profilKepalaSekolah->deskripsi = $request->deskripsi;
        $profilKepalaSekolah->gambar = $request->gambar;

        $input = $profilKepalaSekolah;

        if ($request->file('gambar')) {
            $input->gambar = $request->file('gambar')->store('');
        }

        $input->save();

        return redirect('profil-kepala-sekolah');
    }

    public function edit()
    {
        $data = ProfilKepalaSekolah::first();
        return view('admin.pages.master-data.profil-kepala-sekolah.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $profilKepalaSekolah = ProfilKepalaSekolah::first();

        $profilKepalaSekolah->nama = $request->nama;
        $profilKepalaSekolah->deskripsi = $request->deskripsi;
        $profilKepalaSekolah->gambar = $request->gambar;

        $input = $profilKepalaSekolah;

        if ($request->file('gambar')) {
            if ($request->gambarLama) {
                File::delete('images/' . $request->gambarLama);
            }
        }

        if ($request->file('gambar')) {
            $input->gambar = $request->file('gambar')->store('');
        }

        $input->update();

        return redirect('profil-kepala-sekolah');
    }
}
