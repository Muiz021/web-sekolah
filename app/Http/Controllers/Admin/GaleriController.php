<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index()
    {
        $galleries = Galeri::all();
        return view('admin.pages.galeri.index', compact('galleries'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, ['foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);
        
        $foto = $request->file('foto');
        $destinationPath = 'images/galeri/';
        $profileImage = time() . "." . $foto->getClientOriginalExtension();
        $foto->move($destinationPath, $profileImage);
        
        Galeri::create(['foto' => $profileImage, 'judul' => $request->judul]);
        
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
    
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);
        
        $galeri = Galeri::findorfail($id);
        
        if ($request->file('foto')) {
            $file_path = public_path() . "/images/galeri/" . $galeri->foto;
            unlink($file_path);
            
            $foto = $request->file('foto');
            $destinationPath = 'images/galeri/';
            $profileImage = time() . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            
            $galeri->update(['foto' => $profileImage, 'judul' => $request->judul, 'is_active' => $request->is_active]);
        } else {
            $galeri->update(['judul' => $request->judul, 'is_active' => $request->is_active]);
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
        $galeri = Galeri::findorfail($id);
        
        $file_path = public_path() . "/images/galeri/" . $galeri->foto;
        unlink($file_path);
        
        $galeri->delete();
        return redirect()->back();
    }
}
