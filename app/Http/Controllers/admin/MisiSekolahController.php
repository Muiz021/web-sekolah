<?php

namespace App\Http\Controllers\admin;

use App\Models\MisiSekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MisiSekolahController extends Controller
{
    public function index()
    {
        $misiSekolah = MisiSekolah::get();
        return view('admin.pages.master-data.misi.index',compact('misiSekolah'));
    }
    public function create()
    {
        return view('admin.pages.master-data.misi.create');
    }

    public function store(Request $request)
    {
        $data = new MisiSekolah();
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect('misi-sekolah');
    }

    public function edit($id)
    {
        $data = MisiSekolah::find($id);
        return view('admin.pages.master-data.misi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = MisiSekolah::find($id);
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect('misi-sekolah');
    }

    public function delete($id)
    {
        $data = MisiSekolah::find($id);
        $data->delete();
        return redirect('misi-sekolah');
    }
}
