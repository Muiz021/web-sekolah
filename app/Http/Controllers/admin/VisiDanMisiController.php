<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VisiDanMisi;
use Illuminate\Http\Request;

class VisiDanMisiController extends Controller
{
    public function index()
    {
        $visiDanMisiSekolah = VisiDanMisi::first();
        return view('admin.pages.master-data.visi-dan-misi.index', compact('visiDanMisiSekolah'));
    }

    public function create()
    {
        return view('admin.pages.master-data.visi-dan-misi.create');
    }

    public function store(Request $request)
    {
        $data = new VisiDanMisi();
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect('admin/visi-dan-misi');
    }

    public function edit($id)
    {
        $data = VisiDanMisi::find($id);
        return view('admin.pages.master-data.visi-dan-misi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = VisiDanMisi::find($id);
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect('admin/visi-dan-misi');
    }

    public function show()
    {
        $visiDanMisiSekolah = VisiDanMisi::first();
        return view('admin.pages.master-data.visi-dan-misi.index', compact('visiDanMisiSekolah'));
    }

    public function destroy($id)
    {
        $data = VisiDanMisi::find($id);
        $data->delete();
        return redirect('admin/visi-dan-misi');
    }
}

