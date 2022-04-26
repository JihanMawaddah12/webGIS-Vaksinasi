<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Pendaftaran;
use App\Models\Tematik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RouteMap extends Controller
{
    public function index()
    {
        $coor = [];
        $arr = [];
        $index = 0;
        $data = HalamanData2::all();

        foreach ($data as $item) {
            $info[$index] = [$item->alamat, $item->lat, $item->long, $item->lokasi];
            $index++;
        }
        return view('routeMap', [
            'geofile' => [],
            'color' => [],
            'data' => $info,
        ]);
    }
    public function pendaftaran()
    {
        $coor = [];
        $arr = [];
        $index = 0;
        $data = HalamanData2::all();
        $kecamatan = Tematik::all();
        $desa = Desa::all();
        foreach ($data as $item) {
            $info[$index] = [$item->alamat, $item->lat, $item->long, $item->lokasi, $item->id, $item->kapasitas - $item->pendaftaran->count(), $item->deskripsi];
            $index++;
        }
        return view('pendaftaran', [
            'geofile' => [],
            'color' => [],
            'data' => $info,
            'kecamatan' => $kecamatan,
            'desa' => $desa,

        ]);
    }
    public function daftar(Request $request)
    {
        $check = Pendaftaran::where([
            'nik' => $request->nik,
            'dosis' => $request->dosis,
        ])->get();
        if ($check->count() > 0) {
            return Redirect::back()->with('error', 'w');
        }
        Pendaftaran::create($request->all());
        return redirect('/');
    }
}
