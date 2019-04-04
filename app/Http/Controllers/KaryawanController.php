<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = User::all();
        return view('admin.masterproduk.karyawan.index')->with('karyawan',$karyawan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.masterproduk.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new User;
        $post->name = $r->input('name');
        $post->username = $r->input('username');
        $post->telp = $r->input('telp');
        $post->password = bcrypt($r->input('password'));
        $post->role = $r->input('role');
        $post->save();

        return redirect(url('dashboard/karyawan'));
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
        $edit = User::find($id);
        return view('admin.masterproduk.karyawan.edit')->with('edit', $edit);
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
        $update = User::find($r->input('id'));
        $update->name = $r->input('name');
        $update->username = $r->input('username');
        $update->telp = $r->input('telp');

        if($r->input('password') != "")
        {
            $update->password = bcrypt($r->input('password'));
        }else{
            $update->password = $update->password;
        }
        $update->role = $r->input('role');
        $update->save();

        return redirect(url('dashboard/karyawan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();

        return redirect(url('dashboard/karyawan'));
    }
}
