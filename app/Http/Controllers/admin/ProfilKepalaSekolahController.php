<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProfilKepalaSekolah;
use App\Http\Controllers\Controller;

class ProfilKepalaSekolahController extends Controller
{
    public function index()
    {
        $data = ProfilKepalaSekolah::latest()->first();
        return view('admin.pages.master-data.profil-kepala-sekolah.index', compact('data'));
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

        ProfilKepalaSekolah::create([
            'gambar' => $namaGambar,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $profilKepalaSekolah = ProfilKepalaSekolah::findorfail($id);

        if ($request->file('gambar')) {
            $file_path = public_path() . "/images/foto/" . $profilKepalaSekolah->gambar;
            unlink($file_path);

            $foto = $request->file('gambar');
            $penyimpananPublik = 'images/foto/';
            $namaGambar = Str::slug($request->nama) . "." . $foto->getClientOriginalExtension();
            $foto->move($penyimpananPublik, $namaGambar);


            $profilKepalaSekolah->update([
                'gambar' => $namaGambar,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
            ]);
        } else {
            $profilKepalaSekolah->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $profilKepalaSekolah = ProfilKepalaSekolah::findorfail($id);

        $file_path = public_path() . "/images/foto/" . $profilKepalaSekolah->gambar;
        unlink($file_path);

        $profilKepalaSekolah->delete();
        return redirect()->back();
    }
}
