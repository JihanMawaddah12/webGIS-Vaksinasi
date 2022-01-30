<?php

namespace App\Http\Controllers;

use App\Models\HalamanData as ModelsHalamanData;
use App\Models\Tematik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HalamanData extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("halaman_data", [
            'data' => ModelsHalamanData::with('tematik')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tematik = Tematik::all();
        return view('tambah_data', ['tematik' => $tematik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        ModelsHalamanData::create([
            'tematik_id' => $request->kecamatan,
            'kelompok' => $request->kelompok,
            'nakes' => $request->nakes,
            'petugas_publik' => $request->petugas_publik,
            'lansia' => $request->lansia,
            'masyarakat_umum' => $request->masyarakat_umum,
            'remaja' => $request->remaja,
        ]);
        return redirect()->route('halaman data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('detail', [
            'data' => ModelsHalamanData::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tematik = Tematik::all();
        return view('edit', [
            'data' => ModelsHalamanData::with('tematik')->find($id),
            'id' => $id,
            'tematik' => $tematik,
        ]);
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

        ModelsHalamanData::find($id)->update([
            'tematik_id' => $request->kecamatan,
            'kelompok' => $request->kelompok,
            'nakes' => $request->nakes,
            'petugas_publik' => $request->petugas_publik,
            'lansia' => $request->lansia,
            'masyarakat_umum' => $request->masyarakat_umum,
            'remaja' => $request->remaja,
        ]);
        return redirect()->route('halaman data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsHalamanData::find($id)->delete();
        return back();
    }
}
