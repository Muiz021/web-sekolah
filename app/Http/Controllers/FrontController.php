<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BeritaSekolah;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.pages.home');
    }

    public function guru()
    {
        $gurus = Guru::all();
        return view('front.pages.guru', compact('gurus'));
    }

    public function berita()
    {
        $beritaSekolah = BeritaSekolah::get();
        $postTerbaru = BeritaSekolah::orderBy('created_at','DESC')->limit(6)->get();
        return view('front.pages.berita.berita',compact('beritaSekolah','postTerbaru'));
    }

    public function berita_detail($slug)
    {
        $beritaSekolah = BeritaSekolah::where('slug',$slug)->first();
        $postTerbaru = BeritaSekolah::orderBy('created_at','DESC')->limit(10)->get();
        return view('front.pages.berita.detail-berita',compact('beritaSekolah','postTerbaru'));
    }
}
