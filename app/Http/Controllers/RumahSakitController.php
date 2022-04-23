<?php

namespace App\Http\Controllers;

use App\Models\HalamanData2;
use App\Models\Pendaftaran;
use App\Models\RumahSakit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RumahSakit::orderBy('created_at','DESC')->get();
        return view('rumahsakit', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = HalamanData2::all();
        return view('tambah_rumahsakit', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rm = HalamanData2::find($request->halaman_data2_id);
        $user = User::create([
            'email'=>$request->email,
            'name' => $rm->lokasi,
            'level'=> 'rs',
            'password' => Hash::make($request->password) 
        ]);
        RumahSakit::create([
            'halaman_data2_id' => $rm->id,
            'user_id'=>$user->id
        ]);
        return redirect()->route('rumah sakit');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HalamanData2::all();
        $user = User::find($id);
        return view('edit_rumahsakit', ['user' => $user,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rm = HalamanData2::find($request->halaman_data2_id);
        $user = User::find($request->user_id);
        $user->email = $request->email;
        $user->name = $rm->lokasi;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        RumahSakit::where('user_id', $request->user_id)->update([
            'halaman_data2_id'=>$rm->id
        ]);
        return redirect()->route('rumah sakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RumahSakit::where('user_id',$id)->first()->delete();
        User::find($id)->delete();
        return back();
    }
}
