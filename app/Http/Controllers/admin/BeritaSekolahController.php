<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BeritaSekolah;
use App\Http\Controllers\Controller;

class BeritaSekolahController extends Controller
{
    public function index()
    {
        $beritaSekolah = BeritaSekolah::get();
        return view('admin.pages.berita.index', compact('beritaSekolah'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $foto = $request->file('gambar');
        $destinationPath = 'images/berita/';
        $profileImage = Str::slug($request->judul) . "." . $foto->getClientOriginalExtension();
        $foto->move($destinationPath, $profileImage);

        BeritaSekolah::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'deskripsi' => $request->deskripsi,
            'gambar' => $profileImage,
        ]);

        return redirect()->back();

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $beritaSekolah = BeritaSekolah::findorfail($id);

        if ($request->file('gambar')) {
            $file_path = public_path() . "/images/berita/" . $beritaSekolah->gambar;
            unlink($file_path);

            $foto = $request->file('gambar');
            $destinationPath = 'images/berita/';
            $profileImage = Str::slug($request->judul) . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);

            $beritaSekolah->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'deskripsi' => $request->deskripsi,
                'gambar' => $profileImage,
            ]);
        } else {
            $beritaSekolah->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'deskripsi' => $request->deskripsi,
            ]);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $beritaSekolah = BeritaSekolah::findorfail($id);

        $file_path = public_path() . "/images/berita/" . $beritaSekolah->gambar;
        unlink($file_path);

        $beritaSekolah->delete();
        return redirect()->back();
    }
}
