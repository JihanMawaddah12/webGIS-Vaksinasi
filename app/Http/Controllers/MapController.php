<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Tematik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geofile = [];
        $color = [];
        $coor = [];
        $jmlh = [];
        $jmlh_target = [];
        $index = 0;
        $index2 = 0;
        $tematik = Tematik::all();
        $data = HalamanData2::all();
        $vaksins1 = HalamanData::where('kelompok', 'Dosis 1')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('tematik_id'))->get();
        $vaksins2 = HalamanData::where('kelompok', 'Dosis 2')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('tematik_id'))->get();
        $vaksins3 = HalamanData::where('kelompok', 'Dosis 3')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('tematik_id'))->get();
        $targets = HalamanData::where('kelompok', 'Target')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('tematik_id'))->get();
        foreach ($tematik as $value) {
             $jmlh['1'][$value->kecamatan] = 0;
             $jmlh['2'][$value->kecamatan] = 0;
             $jmlh['3'][$value->kecamatan] = 0;
        }
        foreach ($vaksins1 as $vaksin) {
            $jmlh['1'][$vaksin->tematik->kecamatan] = $vaksin->total;
        }
        foreach ($vaksins2 as $vaksin) {
            $jmlh['2'][$vaksin->tematik->kecamatan] = $vaksin->total;
        }
        foreach ($vaksins3 as $vaksin) {
            $jmlh['3'][$vaksin->tematik->kecamatan] = $vaksin->total;
        }
        foreach ($targets as $target) {
            if (isset($jmlh_target[$target->tematik->kecamatan])) {
                $jmlh_target[$target->tematik->kecamatan] = +$target->total;
            } else {
                $jmlh_target[$target->tematik->kecamatan] = $target->total;
            }
        }

        foreach ($tematik as $item) {
            $geofile[$index] = 'storage/' . $item->geojson;
            $index++;
        }
        foreach ($tematik as $item) {
            $color[$item->kecamatan] = $item->warna;
        }
        $kecamatan = $tematik->pluck('kecamatan');
        foreach ($data as $item) {
            $coor[$index2] = [$item->alamat, $item->lat, $item->long];
            $index2++;
        }
        return view('maps', [
            'geofile' => $geofile,
            'tematik' =>  $kecamatan,
            'color' => $color,
            'jumlah' => $jmlh,
            'data' => $coor,
            'jmlh_target' => $jmlh_target
        ]);
    }
    public function indexTitik()
    {
        $geofile = [];
        $color = [];
        $coor = [];
        $index = 0;
        $index2 = 0;
        $data = HalamanData2::all();

        foreach ($data as $item) {
            $coor[$index2] = [$item->lokasi, $item->lat, $item->long];
            $index2++;
        }

        return view('maps_titik', [
            'data' => $coor
        ]);
    }
    public function indexDesa()
    {
        $geofile = [];
        $color = [];
        $coor = [];
        $index = 0;
        $index2 = 0;
        $desa = Desa::all();
        $data = HalamanData2::all();
        $jmlh = [];
        $jmlh_target = [];
        $vaksins1 = HalamanData::where('kelompok', 'Dosis 1')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('desa_id'))->get();
        $vaksins2 = HalamanData::where('kelompok', 'Dosis 2')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('desa_id'))->get();
        $vaksins3 = HalamanData::where('kelompok', 'Dosis 3')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('desa_id'))->get();
        $targets = HalamanData::where('kelompok', 'Target')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('desa_id'))->get();
        foreach ($desa as $value) {
            $jmlh['1'][$value->desa] = 0;
            $jmlh['2'][$value->desa] = 0;
            $jmlh['3'][$value->desa] = 0;
        }
        foreach ($vaksins1 as $vaksin) {
            $jmlh['1'][$vaksin->desa->desa] = $vaksin->total;
        }
        foreach ($vaksins2 as $vaksin) {
            $jmlh['2'][$vaksin->desa->desa] = $vaksin->total;
        }
        foreach ($vaksins3 as $vaksin) {
            $jmlh['3'][$vaksin->desa->desa] = $vaksin->total;
        }

        foreach ($targets as $target) {
            if ($target->desa) {
                if (isset($jmlh_target[$target->desa->desa])) {
                    $jmlh_target[$target->desa->desa] = +$target->total;
                } else {
                    $jmlh_target[$target->desa->desa] = $target->total;
                }
            }
        }

        foreach ($desa as $item) {
            $geofile[$index] = 'storage/' . $item->geojson;
            $index++;
        }
        foreach ($desa as $item) {
            $color[$item->desa] = $item->warna;
        }
        foreach ($data as $item) {
            $coor[$index2] = [$item->lokasi, $item->lat, $item->long];
            $index2++;
        }
        $desa = $desa->pluck('desa');

        return view('maps_desa', [
            'geofile' => $geofile,
            'tematik' =>  $desa,
            'color' => $color,
            'jumlah' => $jmlh,
            'data' => $coor,
            'jmlh_target' => $jmlh_target
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
