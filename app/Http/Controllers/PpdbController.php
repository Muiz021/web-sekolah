<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Display the PPDB page.
     */
    public function index()
    {
        return view('front.pages.ppdb.ppdb');
    }

    /**
     * Store the PPDB form data and generate the PDF file.
     */
    public function store(Request $request)
    {
        try {
            $ppdb = Ppdb::create($request->all());

            // Generate the PDF file and stream it to the browser.
            $pdf = PDF::loadView('front.pages.ppdb.kartu-ppdb', compact('ppdb'))->setPaper('A4', 'potrait');
            $pdf->render();
            $waktu = \Carbon\Carbon::now();
            return $pdf->stream("kartu_ppdb_$waktu.pdf");
        } catch (\Exception $e) {
            // Handle any errors and return an appropriate response.
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the PPDB card for the specified ID.
     */
    public function view($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        return view('front.pages.ppdb.kartu-ppdb', compact('ppdb'));
    }
}
