<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('admin.pages.guru.index', compact('gurus'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048', 'deskripsi' => 'max:30']);

        $foto = $request->file('foto');
        $destinationPath = 'images/foto/';
        $profileImage = Str::slug($request->nama) . "." . $foto->getClientOriginalExtension();
        $foto->move($destinationPath, $profileImage);

        Guru::create(['foto' => $profileImage, 'nama' => $request->nama, 'jabatan' => $request->jabatan, 'deskripsi' => $request->deskripsi]);

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048', 'deskripsi' => 'max:30']);

        $guru = Guru::findorfail($id);

        if ($request->file('foto')) {
            $file_path = public_path() . "/images/foto/" . $guru->foto;
            unlink($file_path);

            $foto = $request->file('foto');
            $destinationPath = 'images/foto/';
            $profileImage = Str::slug($request->nama) . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);

            $guru->update(['foto' => $profileImage, 'nama' => $request->nama, 'jabatan' => $request->jabatan, 'deskripsi' => $request->deskripsi]);
        } else {
            $guru->update(['nama' => $request->nama, 'jabatan' => $request->jabatan, 'deskripsi' => $request->deskripsi]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $guru = Guru::findorfail($id);

        $file_path = public_path() . "/images/foto/" . $guru->foto;
        unlink($file_path);

        $guru->delete();
        return redirect()->back();
    }
}
