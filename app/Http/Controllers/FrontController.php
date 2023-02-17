<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

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
}
