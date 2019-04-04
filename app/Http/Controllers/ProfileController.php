<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $r)
    {
        $post = new Profile;
        $post->nama = $r->input('nama');
        $post->telp = $r->input('telp');
        $post->kode_pos = $r->input('kode_pos');
        $post->deskripsi = $r->input('deskripsi');
        $post->alamat = $r->input('alamat');
        if(Input::hasFile('gambar')){
            $gambar = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('gambar')->getClientOriginalExtension();
            Input::file('gambar')->move(storage_path('gambar'),$gambar);
            $post->gambar = $gambar;
        }

        $post->save();

        return redirect(url('dashboard/profile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Profile::where('id')->first();
        return view('admin.masterproduk.profile.index')->with('data', $data);
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
    public function update(Request $r)
    {
        $update = Profile::find($r->input('id'));
        $update->nama = $r->input('nama');
        $update->telp = $r->input('telp');
        $update->kode_pos = $r->input('kode_pos');
        $update->deskripsi = $r->input('deskripsi');
        $update->alamat = $r->input('alamat');

        if($r->input('gambar') !="")
        {
        $update->gambar = $update->gambar;
        }else{   

        if(Input::hasFile('gambar')){
            $gambar = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('gambar')->getClientOriginalExtension();
            Input::file('gambar')->move(storage_path('gambar'),$gambar);
            $update->gambar = $gambar;
            }
        }

        $update->save();

        return redirect(url('dashboard/profile'));
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
