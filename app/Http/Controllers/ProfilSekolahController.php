<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Http\Controllers\Controller;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $data = ProfilSekolah::latest()->first();
        return view('admin.pages.master-data.profil-sekolah.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $foto = $request->file('gambar');
        $penyimpananPublik = 'images/foto/';
        $namaGambar = Str::slug($request->nama) . "." . $foto->getClientOriginalExtension();
        $foto->move($penyimpananPublik, $namaGambar);

        ProfilSekolah::create([
            'gambar' => $namaGambar, 'nama' => $request->nama, 'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $profilSekolah = ProfilSekolah::findorfail($id);

        if ($request->file('gambar')) {
            $file_path = public_path() . "/images/foto/" . $profilSekolah->gambar;
            unlink($file_path);

            $foto = $request->file('gambar');
            $penyimpananPublik = 'images/foto/';
            $namaGambar = Str::slug($request->nama) . "." . $foto->getClientOriginalExtension();
            $foto->move($penyimpananPublik, $namaGambar);


            $profilSekolah->update([
                'gambar' => $namaGambar, 'nama' => $request->nama, 'deskripsi' => $request->deskripsi,
            ]);
        } else {
            $profilSekolah->update([
                'nama' => $request->nama, 'deskripsi' => $request->deskripsi,
            ]);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $profilSekolah = ProfilSekolah::findorfail($id);

        $file_path = public_path() . "/images/foto/" . $profilSekolah->gambar;
        unlink($file_path);

        $profilSekolah->delete();
        return redirect()->back();
    }
}
