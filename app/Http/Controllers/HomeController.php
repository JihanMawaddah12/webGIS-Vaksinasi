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
    public function index($id_param = false)
    {
        $kec = [];
        $jumlah = [];
        $kec2 = [];
        $jumlah2 = [];
        $kec3 = [];
        $jumlah3 = [];
        if (!$id_param) {
            $tem = Tematik::first();
            
            $id_param = $tem->id;
        }else{
            $tem = Tematik::find($id_param);
        }
        $dosis1 = HalamanData::with('tematik')->where([['kelompok', 'dosis 1'], ['tematik_id', $id_param]])->select('*', DB::raw('DATE(tanggal) as date'), 'tematik_id', 'id')
            ->groupBy(['date', 'tematik_id'])
            ->get();


        $id = 0;
        foreach ($dosis1 as $value) {
            $kec[$id] = $value->date;
            $jumlah[$id] = $value->nakes + $value->petugas_publik + $value->lansia + $value->masyarakat_umum + $value->remaja;
            $id += 1;
        }
        $dosis2 = HalamanData::with('tematik')->where([['kelompok', 'dosis 2'], ['tematik_id', $id_param]])->select('*', DB::raw('DATE(tanggal) as date'), 'tematik_id')
            ->groupBy(['date', 'tematik_id'])
            ->get();

        $id = 0;
        foreach ($dosis2 as $value) {
            $kec2[$id] = $value->date;
            $jumlah2[$id] = $value->nakes + $value->petugas_publik + $value->lansia + $value->masyarakat_umum + $value->remaja;
            $id += 1;
        }
        $dosis3 = HalamanData::with('tematik')->where([['kelompok', 'dosis 3'], ['tematik_id', $id_param]])->select('*', DB::raw('DATE(tanggal) as date'), 'tematik_id')
            ->groupBy(['date', 'tematik_id'])
            ->get();


        $id = 0;
        foreach ($dosis3 as $value) {
            $kec3[$id] = $value->date;
            $jumlah3[$id] = $value->nakes + $value->petugas_publik + $value->lansia + $value->masyarakat_umum + $value->remaja;
            $id += 1;
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
            $geofile[$index] = '/storage/' . $item->geojson;
            $index++;
        }
        foreach ($tematik as $item) {
            $color[$item->kecamatan] = $item->warna;
        }
        foreach ($data as $item) {
            $coor[$index2] = [$item->alamat, $item->lat, $item->long];
            $index2++;
        }
        $kpersen1 = "";
        $kpersen2 = "";
        $kpersen3 = "";
        $ktpersen1 = "";
        $ktpersen2 = "";
        $ktpersen3 = "";

        $dpersen1 = "";
        $dpersen2 = "";
        $dpersen3 = "";
        $dtpersen1 = "";
        $dtpersen2 = "";
        $dtpersen3 = "";

        $krendah1 = HalamanData::with('tematik')->where('kelompok', 'Dosis 1')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw(' tematik_id'))->orderBy('total', 'asc')->first();
        if ($krendah1) {
            $kpersen1 = $krendah1->tematik->data1->where('Kelompok', 'Target')->first();
        }

        $krendah2 = HalamanData::with('tematik')->where('kelompok', 'Dosis 2')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw(' tematik_id'))->orderBy('total', 'asc')->first();
        if ($krendah2) {
            $kpersen2 = $krendah2->tematik->data1->where('Kelompok', 'Target')->first();
        }

        $krendah3 = HalamanData::with('tematik')->where('kelompok', 'Dosis 3')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw(' tematik_id'))->orderBy('total', 'asc')->first();
        if ($krendah3) {
            $kpersen3 = $krendah3->tematik->data1->where('Kelompok', 'Target')->first();
        }

        $ktinggi1 = HalamanData::with('tematik')->where('kelompok', 'Dosis 1')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw(' tematik_id'))->orderBy('total', 'desc')->first();
        if ($ktinggi1) {
            $ktpersen1 = $ktinggi1->tematik->data1->where('Kelompok', 'Target')->first();
        }

        $ktinggi2 = HalamanData::with('tematik')->where('kelompok', 'Dosis 2')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw(' tematik_id'))->orderBy('total', 'desc')->first();
        if ($ktinggi2) {
            $ktpersen2 = $ktinggi2->tematik->data1->where('Kelompok', 'Target')->first();
        }

        $ktinggi3 = HalamanData::with('tematik')->where('kelompok', 'Dosis 3')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw(' tematik_id'))->orderBy('total', 'desc')->first();
        if ($ktinggi3) {
            $ktpersen3 = $ktinggi3->tematik->data1->where('Kelompok', 'Target')->first();
        }

        $drendah1 = HalamanData::with('desa')->where('kelompok', 'Dosis 1')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw('kelompok'), DB::raw('desa_id'))->orderBy('total', 'asc')->first();
        if ($drendah1) {
            $dpersen1 = $drendah1->desa->data1->where('Kelompok', 'Target')->first();
        }

        $drendah2 = HalamanData::with('desa')->where('kelompok', 'Dosis 2')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw('desa_id'))->orderBy('total', 'asc')->first();
        if ($drendah2) {
            $dpersen2 = $drendah2->desa->data1->where('Kelompok', 'Target')->first();
        }

        $drendah3 = HalamanData::with('desa')->where('kelompok', 'Dosis 3')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw('desa_id'))->orderBy('total', 'asc')->first();
        if ($drendah3) {
            $dpersen3 = $drendah3->desa->data1->where('Kelompok', 'Target')->first();
        }

        $dtinggi1 = HalamanData::with('desa')->where('kelompok', 'Dosis 1')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw('desa_id'))->orderBy('total', 'desc')->first();
        if ($dtinggi1) {
            $dtpersen1 = $dtinggi1->desa->data1->where('Kelompok', 'Target')->first();
        }

        $dtinggi2 = HalamanData::with('desa')->where('kelompok', 'Dosis 2')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw('desa_id'))->orderBy('total', 'desc')->first();
        if ($dtinggi2) {
            $dtpersen2 = $dtinggi2->desa->data1->where('Kelompok', 'Target')->first();
        }
        $dtinggi3 = HalamanData::with('desa')->where('kelompok', 'Dosis 3')->select(DB::raw('(nakes + petugas_publik + lansia + masyarakat_umum + remaja) as total'), DB::raw(' kelompok'), DB::raw('desa_id'))->orderBy('total', 'desc')->first();
        if ($dtinggi3) {
            $dtpersen3 = $dtinggi3->desa->data1->where('Kelompok', 'Target')->first();
        }
        $dosis1_nakes = HalamanData::where('kelompok', 'Dosis 1')->sum('nakes');
        $dosis1_petugas = HalamanData::where('kelompok', 'Dosis 1')->sum('petugas_publik');
        $dosis1_lansia = HalamanData::where('kelompok', 'Dosis 1')->sum('lansia');
        $dosis1_masyarakat = HalamanData::where('kelompok', 'Dosis 1')->sum('masyarakat_umum');
        $dosis1_remaja = HalamanData::where('kelompok', 'Dosis 1')->sum('remaja');
        $dosis1_usia = HalamanData::where('kelompok', 'Dosis 1')->sum('usia');

        $target_nakes = HalamanData::where('kelompok', 'Target')->sum('nakes');
        $target_petugas = HalamanData::where('kelompok', 'Target')->sum('petugas_publik');
        $target_lansia = HalamanData::where('kelompok', 'Target')->sum('lansia');
        $target_masyarakat = HalamanData::where('kelompok', 'Target')->sum('masyarakat_umum');
        $target_remaja = HalamanData::where('kelompok', 'Target')->sum('remaja');
        $target_usia = HalamanData::where('kelompok', 'Target')->sum('usia');



        $dosis2_nakes = HalamanData::where('kelompok', 'Dosis 2')->sum('nakes');
        $dosis2_petugas = HalamanData::where('kelompok', 'Dosis 2')->sum('petugas_publik');
        $dosis2_lansia = HalamanData::where('kelompok', 'Dosis 2')->sum('lansia');
        $dosis2_masyarakat = HalamanData::where('kelompok', 'Dosis 2')->sum('masyarakat_umum');
        $dosis2_remaja = HalamanData::where('kelompok', 'Dosis 2')->sum('remaja');
        $dosis2_usia = HalamanData::where('kelompok', 'Dosis 1')->sum('usia');

        $dosis3_nakes = HalamanData::where('kelompok', 'Dosis 3')->sum('nakes');
        $dosis3_petugas = HalamanData::where('kelompok', 'Dosis 3')->sum('petugas_publik');
        $dosis3_lansia = HalamanData::where('kelompok', 'Dosis 3')->sum('lansia');
        $dosis3_masyarakat = HalamanData::where('kelompok', 'Dosis 3')->sum('masyarakat_umum');
        $dosis3_remaja = HalamanData::where('kelompok', 'Dosis 3')->sum('remaja');
        $dosis3_usia = HalamanData::where('kelompok', 'Dosis 1')->sum('usia');

        return view('home', [
            'target_nakes' => $target_nakes,
            'target_petugas' => $target_petugas,
            'target_lansia' => $target_lansia,
            'target_masyarakat' => $target_masyarakat,
            'target_remaja' => $target_remaja,
            'target_usia' => $target_usia,
            'dosis1_nakes' => $dosis1_nakes,
            'dosis1_petugas' => $dosis1_petugas,
            'dosis1_lansia' => $dosis1_lansia,
            'dosis1_masyarakat' => $dosis1_masyarakat,
            'dosis1_remaja' => $dosis1_remaja,
            'dosis1_usia' => $dosis1_usia,
            'dosis2_nakes' => $dosis2_nakes,
            'dosis2_petugas' => $dosis2_petugas,
            'dosis2_lansia' => $dosis2_lansia,
            'dosis2_masyarakat' => $dosis2_masyarakat,
            'dosis2_remaja' => $dosis2_remaja,
            'dosis2_usia' => $dosis2_usia,
            'dosis3_nakes' => $dosis3_nakes,
            'dosis3_petugas' => $dosis3_petugas,
            'dosis3_lansia' => $dosis3_lansia,
            'dosis3_masyarakat' => $dosis3_masyarakat,
            'dosis3_remaja' => $dosis3_remaja,
            'dosis3_usia' => $dosis3_usia,
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
            'state' => $id_param,
            'krendah1' => $krendah1,
            'krpersen1' => $kpersen1 ? ($kpersen1->nakes + $kpersen1->petugas_publik + $kpersen1->lansia + $kpersen1->masyarakat_umum + $kpersen1->remaja) : 0,
            'krendah2' => $krendah2,
            'krpersen2' => $kpersen2 ? ($kpersen2->nakes + $kpersen2->petugas_publik + $kpersen2->lansia + $kpersen2->masyarakat_umum + $kpersen2->remaja) : 0,
            'krendah3' => $krendah3,
            'krpersen3' => $kpersen3 ? ($kpersen3->nakes + $kpersen3->petugas_publik + $kpersen3->lansia + $kpersen3->masyarakat_umum + $kpersen3->remaja) : 0,
            'ktinggi1' => $ktinggi1,
            'ktpersen1' => $ktpersen1 ? ($ktpersen1->nakes + $ktpersen1->petugas_publik + $ktpersen1->lansia + $ktpersen1->masyarakat_umum + $ktpersen1->remaja) : 0,
            'ktinggi2' => $ktinggi2,
            'ktpersen2' => $ktpersen2 ? ($ktpersen2->nakes + $ktpersen2->petugas_publik + $ktpersen2->lansia + $ktpersen2->masyarakat_umum + $ktpersen2->remaja) : 0,
            'ktinggi3' => $ktinggi3,
            'ktpersen3' => $ktpersen2 ? ($ktpersen3->nakes + $ktpersen3->petugas_publik + $ktpersen3->lansia + $ktpersen3->masyarakat_umum + $ktpersen3->remaja) : 0,

            'drendah1' => $drendah1,
            'drpersen1' => $dpersen1 ? ($dpersen1->nakes + $dpersen1->petugas_publik + $dpersen1->lansia + $dpersen1->masyarakat_umum + $dpersen1->remaja) : 0,
            'drendah2' => $drendah2,
            'drpersen2' => $dpersen2 ? ($dpersen2->nakes + $dpersen2->petugas_publik + $dpersen2->lansia + $dpersen2->masyarakat_umum + $dpersen2->remaja) : 0,
            'drendah3' => $drendah3,
            'drpersen3' => $dpersen3 ? ($dpersen3->nakes + $dpersen3->petugas_publik + $dpersen3->lansia + $dpersen3->masyarakat_umum + $dpersen3->remaja) : 0,

            'dtinggi1' => $dtinggi1,
            'dtpersen1' => $dtpersen1 ? ($dtpersen1->nakes + $dtpersen1->petugas_publik + $dtpersen1->lansia + $dtpersen1->masyarakat_umum + $dtpersen1->remaja) : 0,
            'dtinggi2' => $dtinggi2,
            'dtpersen2' => $dtpersen2 ? ($dtpersen2->nakes + $dtpersen2->petugas_publik + $dtpersen2->lansia + $dtpersen2->masyarakat_umum + $dtpersen2->remaja) : 0,
            'dtinggi3' => $dtinggi3,
            'dtpersen3' => $dtpersen3 ? ($dtpersen3->nakes + $dtpersen3->petugas_publik + $dtpersen3->lansia + $dtpersen3->masyarakat_umum + $dtpersen3->remaja) : 0,
            'tem' => $tem->kecamatan
        ]);
    }
}
