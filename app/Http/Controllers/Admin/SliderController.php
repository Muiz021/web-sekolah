<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;


class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.slider.index', compact('sliders'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, ['image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);
        
        $image = $request->file('image');
        $destinationPath = 'images/slider/';
        $profileImage = time() . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        
        Slider::create(['image' => $profileImage, 'urutan' => $request->urutan,]);
        
        return redirect()->back();
    }
    
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
        $this->validate($request, ['image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);
        
        $slider = Slider::findorfail($id);
        
        if ($request->file('image')) {
            $file_path = public_path() . "/images/slider/" . $slider->image;
            unlink($file_path);
            
            $image = $request->file('image');
            $destinationPath = 'images/slider/';
            $profileImage = time() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            $slider->update(['image' => $profileImage, 'urutan' => $request->urutan]);
        } else {
            $slider->update(['urutan' => $request->urutan]);
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
        $slider = Slider::findorfail($id);
        
        $file_path = public_path() . "/images/slider/" . $slider->image;
        unlink($file_path);
        
        $slider->delete();
        return redirect()->back();
    }
}
