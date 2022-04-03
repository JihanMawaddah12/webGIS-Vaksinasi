<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class RouteMap extends Controller
{
    public function index()
    {
        $coor = [];
        $arr = [];
        $index = 0;
        $data = HalamanData2::all();

        foreach ($data as $item) {
            $info[$index] = [$item->alamat, $item->lat, $item->long,$item->lokasi];
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

        foreach ($data as $item) {
            $info[$index] = [$item->alamat, $item->lat, $item->long, $item->lokasi, $item->id];
            $index++;
        }
        return view('pendaftaran', [
            'geofile' => [],
            'color' => [],
            'data' => $info,
        ]);
    }
    public function daftar(Request $request){
        Pendaftaran::create($request->all());
        return redirect('/');
    }
}
