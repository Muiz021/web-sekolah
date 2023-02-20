<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\ProfilKepalaSekolah;
use App\Models\VisiDanMisi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BeritaSekolah;
use App\Models\ProfilSekolah;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function home()
    {
        $tentangSekolah = ProfilSekolah::first();
        $visiDanMisiSekolah = VisiDanMisi::first();
        $tentangKepalaSekolah = ProfilKepalaSekolah::first();
        return view('front.pages.home',compact('tentangSekolah','visiDanMisiSekolah','tentangKepalaSekolah'));
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

    public function tentang_sekolah()
    {
        $tentangSekolah = ProfilSekolah::first();
        return view('front.pages.profil.tentang-sekolah',compact('tentangSekolah'));
    }

    public function visi_dan_misi_sekolah()
    {
        $visiDanMisiSekolah = VisiDanMisi::first();
        return view('front.pages.profil.visi-dan-misi',compact('visiDanMisiSekolah'));
    }

    public function tentang_kepala_sekolah()
    {
        $tentangKepalaSekolah = ProfilKepalaSekolah::first();
        return view('front.pages.profil.tentang-kepala-sekolah',compact('tentangKepalaSekolah'));
    }
}
