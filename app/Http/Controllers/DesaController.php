<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('desa', [
            'data' => Desa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_desa');
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
        $fileName = $request->geojson->store('public/geojson');
        $fileName = str_replace("public/", "", $fileName);
        Desa::create([
            'desa' => $request->desa,
            'geojson' => $fileName
        ]);
        return redirect()->route('halaman desa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit_desa', [
            'data' => Desa::find($id),
            'id' => $id
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
        if ($request->hasFile('geojson')) {
            $file_path = storage_path('app/public/' . $request->geojson_lama);
            if (File::exists($file_path)) File::delete($file_path);
            $fileName = $request->geojson->store('public/geojson');
            $fileName = str_replace("public/", "", $fileName);
        } else {
            $fileName = $request->geojson_lama;
        }
        Desa::find($id)->update([
            'desa' => $request->desa,
            'geojson' => $fileName
        ]);
        return redirect()->route('halaman desa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desa = Desa::find($id);
        $file_path = storage_path('app/public/' . $desa->geojson);
        if (File::exists($file_path)) File::delete($file_path);
        $desa->delete();
        return back();
    }
}
