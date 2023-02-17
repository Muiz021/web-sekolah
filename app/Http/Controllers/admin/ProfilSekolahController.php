<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $data = ProfilSekolah::first();
        return view('admin.pages.master-data.profil-sekolah.index',compact('data'));
    }

    public function create()
    {
        return view('admin.pages.master-data.profil-sekolah.create');
    }

    public function store(Request $request)
    {
        $profilSekolah = new ProfilSekolah();
        $profilSekolah->nama = $request->nama;
        $profilSekolah->deskripsi = $request->deskripsi;
        $profilSekolah->gambar = $request->gambar;

        $input = $profilSekolah;

        if ($request->file('gambar')) {
            $input->gambar = $request->file('gambar')->store('');
        }

        $input->save();

        return redirect('profil-sekolah');
    }

    public function edit()
    {
        $data = ProfilSekolah::first();
        return view('admin.pages.master-data.profil-sekolah.edit',compact('data'));
    }

    public function update(Request $request)
    {
        $profilSekolah = ProfilSekolah::first();

        $profilSekolah->nama = $request->nama;
        $profilSekolah->deskripsi = $request->deskripsi;
        $profilSekolah->gambar = $request->gambar;

        $input = $profilSekolah;

        if ($request->file('gambar')) {
            if ($request->gambarLama) {
                File::delete('images/' . $request->gambarLama);
            }
        }

        if ($request->file('gambar')) {
            $input->gambar = $request->file('gambar')->store('');
        }

        $input->update();

        return redirect('profil-sekolah');
    }
}
