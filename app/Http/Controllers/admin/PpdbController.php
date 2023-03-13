<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ppdb;
use App\Models\PpdbStatus;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PpdbController extends Controller
{
    public function index()
    {
        $ajarans = TahunAjaran::all();
        $status = PpdbStatus::latest()->first();
        return view('admin.pages.ppdb.index', compact('status', 'ajarans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        TahunAjaran::create($request->all());
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
        $data = TahunAjaran::findOrFail($id);
        $data->update($request->all());
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
        $data = TahunAjaran::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateStatus(Request $request)
    {
        $status = PpdbStatus::find($request->status_id);
        $status->is_active = $request->is_active;
        $status->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function listSiswa(Request $request)
    {
        $awal = $request->tgl_awal;
        $tgl_2 = $request->tgl_akhir;
        $akhir = date('Y-m-d', strtotime($tgl_2 . ' +1 day'));

        $data = Ppdb::whereBetween('created_at', [$awal, $akhir])->get();

        return view('admin.pages.ppdb.list-siswa', compact('data'));
    }
}
