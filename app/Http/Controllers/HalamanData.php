<?php

namespace App\Http\Controllers;

use App\Imports\Vaksin;
use App\Models\Desa;
use App\Models\HalamanData as ModelsHalamanData;
use App\Models\Tematik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

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
            'data' => ModelsHalamanData::orderBy('tanggal','DESC')->get()
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
        $desa = Desa::all();
        return view('tambah_data', ['tematik' => $tematik, 'desa' => $desa]);
    }
    public function import(Request $request)
    {
        Excel::import(new Vaksin, $request->file('file')->store('temp'));
        return back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        ModelsHalamanData::create($request->all());
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
        $desa = Desa::all();

        $tematik = Tematik::all();
        return view('edit', [
            'data' => ModelsHalamanData::with('tematik')->find($id),
            'id' => $id,
            'tematik' => $tematik,
            'desa'=>$desa
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

        ModelsHalamanData::find($id)->update($request->all());
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
