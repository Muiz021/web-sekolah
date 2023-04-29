<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisiDanMisi;
use Illuminate\Http\Request;

class VisiDanMisiController extends Controller
{
    public function index()
    {
        $visiDanMisiSekolah = VisiDanMisi::latest()->first();
        return view('admin.pages.master-data.visi-dan-misi.index', compact('visiDanMisiSekolah'));
    }


    public function store(Request $request)
    {
        $data = new VisiDanMisi();
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect()->route('visi-dan-misi.index');
    }

    public function update(Request $request, $id)
    {
        $data = VisiDanMisi::find($id);
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect()->route('visi-dan-misi.index');
    }

    public function destroy($id)
    {
        $data = VisiDanMisi::find($id);
        $data->delete();
        return redirect()->route('visi-dan-misi.index');
    }
}

