<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Guru;
use App\Models\PpdbStatus;
use App\Models\ProfilKepalaSekolah;
use App\Models\Slider;
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
        $tentangSekolah = ProfilSekolah::latest()->first();
        $visiDanMisiSekolah = VisiDanMisi::latest()->first();
        $tentangKepalaSekolah = ProfilKepalaSekolah::latest()->first();
        $beritas = BeritaSekolah::latest()->take(4)->get();
        $gurus = Guru::all();
        $sliders = Slider::take(5)->orderBy('urutan', 'asc')->get();
        return view('front.pages.home', compact('tentangSekolah', 'gurus', 'beritas', 'visiDanMisiSekolah', 'tentangKepalaSekolah', 'sliders'));
    }

    public function guru()
    {
        $gurus = Guru::all();
        return view('front.pages.guru', compact('gurus'));
    }

    public function berita(Request $request)
    {
        if ($request) {
            $beritaSekolah = BeritaSekolah::where('judul', 'like', '%' . $request->cari . '%')->paginate(5);
        } else {
            $beritaSekolah = BeritaSekolah::paginate(5);
        }
        $postTerbaru = BeritaSekolah::orderBy('created_at', 'DESC')->limit(6)->get();


        return view('front.pages.berita.berita', compact('beritaSekolah', 'postTerbaru', 'request'));
    }

    public function berita_detail(Request $request, $slug)
    {
        if ($request) {
            $cariBerita = BeritaSekolah::where('judul', 'like', '%' . $request->cari . '%')->get();
        }
        $beritaSekolah = BeritaSekolah::where('slug', $slug)->first();
        $postTerbaru = BeritaSekolah::orderBy('created_at', 'DESC')->limit(6)->get();
        return view('front.pages.berita.detail-berita', compact('beritaSekolah', 'postTerbaru', 'cariBerita', 'request'));
    }

    public function tentang_sekolah()
    {
        $tentangSekolah = ProfilSekolah::latest()->first();
        $galleries = Galeri::where('is_active', 1)->take(6)->get();
        return view('front.pages.profil.tentang-sekolah', compact('tentangSekolah', 'galleries'));
    }

    public function visi_dan_misi_sekolah()
    {
        $visiDanMisiSekolah = VisiDanMisi::latest()->first();
        return view('front.pages.profil.visi-dan-misi', compact('visiDanMisiSekolah'));
    }

    public function tentang_kepala_sekolah()
    {
        $tentangKepalaSekolah = ProfilKepalaSekolah::latest()->first();
        return view('front.pages.profil.tentang-kepala-sekolah', compact('tentangKepalaSekolah'));
    }
}
