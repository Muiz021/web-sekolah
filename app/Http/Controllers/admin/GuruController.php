<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guru;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();
        return view('admin.pages.guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $foto = $request->file('foto');
        $destinationPath = 'images/foto/';
        $profileImage = Str::slug($request->nama) . "." . $foto->getClientOriginalExtension();
        $foto->move($destinationPath, $profileImage);

        Guru::create([
            'foto' => $profileImage,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $guru = Guru::findorfail($id);

        if ($request->file('foto')) {
            $file_path = public_path() . "/images/foto/" . $guru->foto;
            unlink($file_path);

            $foto = $request->file('foto');
            $destinationPath = 'images/foto/';
            $profileImage = Str::slug($request->nama) . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);

            $guru->update([
                'foto' => $profileImage,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan
            ]);
        } else {
            $guru->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan
            ]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
