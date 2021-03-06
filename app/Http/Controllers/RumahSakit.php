<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;

class RumahSakit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Pendaftaran::where(['halaman_data2_id' => auth()->user()->rm->halaman_data2_id, 'status' => 0])->get();
        $daftar = Daftar::first();
        if ($daftar) {
            $daftar->delete();
        }
        return view('rs.dashboard', ['data' => $data, 'daftar' => $daftar]);
    }

    public function verifikasi($id)
    {
        Pendaftaran::find($id)->update(['status' => 1]);
        return back();
    }
    public function verif()
    {

        $data = Pendaftaran::where(['halaman_data2_id' => auth()->user()->rm->halaman_data2_id, 'status' => 1])->get();
        return view('rs.verifikasi', ['data' => $data]);
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
        Pendaftaran::find($id)->delete();
        return back();
    }
}
