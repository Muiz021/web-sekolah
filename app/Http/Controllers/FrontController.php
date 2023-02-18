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

    public function berita(Request $request)
    {
        if($request){
            $beritaSekolah = BeritaSekolah::where('judul','like','%'.$request->cari.'%')->paginate(5);
        }else{
            $beritaSekolah = BeritaSekolah::paginate(5);
        }
        $postTerbaru = BeritaSekolah::orderBy('created_at','DESC')->limit(6)->get();


        return view('front.pages.berita.berita',compact('beritaSekolah','postTerbaru','request'));
    }

    public function berita_detail(Request $request, $slug)
    {
         if($request){
            $cariBerita = BeritaSekolah::where('judul','like','%'.$request->cari.'%')->get();
        }
        $beritaSekolah = BeritaSekolah::where('slug',$slug)->first();
        $postTerbaru = BeritaSekolah::orderBy('created_at','DESC')->limit(6)->get();
        return view('front.pages.berita.detail-berita',compact('beritaSekolah','postTerbaru','cariBerita','request'));
    }
}
