<?php

namespace App\Http\Controllers\admin;

use App\Models\VisiSekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisiSekolahController extends Controller
{
    public function index()
    {
        $visiSekolah = VisiSekolah::get();
        return view('admin.pages.master-data.visi.index', compact('visiSekolah'));
    }

    public function create()
    {
        return view('admin.pages.master-data.visi.create');
    }

    public function store(Request $request)
    {
        $data = new VisiSekolah();
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect('visi-sekolah');
    }

    public function edit($id)
    {
        $data = VisiSekolah::find($id);
        return view('admin.pages.master-data.visi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = VisiSekolah::find($id);
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect('visi-sekolah');
    }

    public function delete($id)
    {
        $data = VisiSekolah::find($id);
        $data->delete();
        return redirect('visi-sekolah');
    }
}
