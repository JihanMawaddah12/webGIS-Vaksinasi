<?php

namespace App\Http\Controllers;

use App\Models\HalamanData as ModelsHalamanData;
use App\Models\HalamanData2 as ModelsHalamanData2;
use App\Models\Tematik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HalamanData2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("halaman_data2", [
            'data' => ModelsHalamanData2::with('tematik')->get()
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
        return view('tambah_data2', ['tematik' => $tematik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = "";
        if ($request->hasFile('gambar')) {
            $fileName = $request->gambar->store('public/images');
            $fileName = str_replace("public/", "", $fileName);
        }
        ModelsHalamanData2::create([
            'tematik_id' => $request->kecamatan,
            'lokasi' => $request->lokasi,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'gambar' => $fileName,
            'long' => $request->long,
            'lat' => $request->lat,
        ]);
        return redirect()->route('halaman data2');
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
            'data' => ModelsHalamanData2::find($id)

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
        return view('edit2', [
            'data' => ModelsHalamanData2::with('tematik')->find($id),
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
        $fileName = "";
        if ($request->hasFile('gambar')) {
            $file_path = storage_path('app/public/' . $request->gambar_lama);
            if (File::exists($file_path)) File::delete($file_path);
            $fileName = $request->gambar->store('public/images');
            $fileName = str_replace("public/", "", $fileName);
        } else {
            $fileName = $request->gambar_lama;
        }
        ModelsHalamanData2::find($id)->update([
            'tematik_id' => $request->kecamatan,
            'lokasi' => $request->lokasi,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'gambar' => $fileName,
            'long' => $request->long,
            'lat' => $request->lat,
        ]);
        return redirect()->route('halaman data2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelsHalamanData2::find($id);
        $file_path = storage_path('app/public/' . $data->gambar);
        if (File::exists($file_path)) File::delete($file_path);
        $data->delete();
        return back();
    }
}
