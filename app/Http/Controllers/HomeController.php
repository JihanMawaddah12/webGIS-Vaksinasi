<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Tematik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($tematik_id = false)
    {
        $kec = [];
        $jumlah = [];
        $kec2 = [];
        $jumlah2 = [];
        $kec3 = [];
        $jumlah3 = [];
        if ($tematik_id) {
            $dosis1 = HalamanData::with('tematik')->where([['kelompok', 'dosis 1'], ['tematik_id', $tematik_id]])->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as views'), 'tematik_id')
                ->groupBy(['date', 'tematik_id'])
                ->get();


            $id = 0;
            foreach ($dosis1 as $value) {
                $kec[$id] = $value->date;
                $jumlah[$id] = $value->views;
                $id += 1;
            }
            $dosis2 = HalamanData::with('tematik')->where([['kelompok', 'dosis 2'], ['tematik_id', $tematik_id]])->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as views'), 'tematik_id')
                ->groupBy(['date', 'tematik_id'])
                ->get();


            $id = 0;
            foreach ($dosis2 as $value) {
                $kec2[$id] = $value->date;
                $jumlah2[$id] = $value->views;
                $id += 1;
            }
            $dosis3 = HalamanData::with('tematik')->where([['kelompok', 'dosis 3'], ['tematik_id', $tematik_id]])->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as views'), 'tematik_id')
                ->groupBy(['date', 'tematik_id'])
                ->get();


            $id = 0;
            foreach ($dosis3 as $value) {
                $kec3[$id] = $value->date;
                $jumlah3[$id] = $value->views;
                $id += 1;
            }
        }
        $target = HalamanData::where('kelompok', 'target')->sum(DB::raw('nakes + petugas_publik + lansia + masyarakat_umum + remaja'));
        $jmlh_dosis1 = HalamanData::where('kelompok', 'dosis 1')->sum(DB::raw('nakes + petugas_publik + lansia + masyarakat_umum + remaja'));
        $jmlh_dosis2 = HalamanData::where('kelompok', 'dosis 2')->sum(DB::raw('nakes + petugas_publik + lansia + masyarakat_umum + remaja'));
        $jmlh_dosis3 = HalamanData::where('kelompok', 'dosis 3')->sum(DB::raw('nakes + petugas_publik + lansia + masyarakat_umum + remaja'));
        $geofile = [];
        $color = [];
        $coor = [];
        $index = 0;
        $index2 = 0;
        $tematik = Tematik::all();
        $data = HalamanData2::all();
        foreach ($tematik as $item) {
            $geofile[$index] = 'storage/' . $item->geojson;
            $index++;
        }
        foreach ($tematik as $item) {
            $color[$item->kecamatan] = $item->warna;
        }
        foreach ($data as $item) {
            $coor[$index2] = [$item->alamat, $item->lat, $item->long];
            $index2++;
        }

        return view('home', [
            'kec' => $kec,
            'jumlah' => $jumlah,
            'kec2' => $kec2,
            'jumlah2' => $jumlah2,
            'kec3' => $kec3,
            'jumlah3' => $jumlah3,
            'target' => $target,
            'dosis1' => $jmlh_dosis1,
            'dosis2' => $jmlh_dosis2,
            'dosis3' => $jmlh_dosis3,
            'geofile' => $geofile,
            'color' => $color,
            'data' => $coor,
            'tematik' => $tematik,
            'state' => $tematik_id
        ]);
    }
}
