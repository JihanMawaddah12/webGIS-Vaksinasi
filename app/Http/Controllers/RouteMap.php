<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use Illuminate\Http\Request;

class RouteMap extends Controller
{
    public function index()
    {
        $coor = [];
        $arr = [];
        $index = 0;
        $data = HalamanData::all();

        foreach ($data as $item) {
            $info[$index] = [$item->alamat, $item->lat, $item->long];
            $index++;
        }
        return view('routeMap', [
            'geofile' => [],
            'color' => [],
            'data' => $info,
        ]);
    }
}
