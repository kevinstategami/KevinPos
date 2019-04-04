<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use PDF;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.masterkonfig.kategori.index')->with('kategori', $kategori);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.masterkonfig.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new Kategori;
        $post->kategori = $r->input('kategori');
        $post->save();

        return redirect(url('dashboard/kategori'));
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
        $edit = Kategori::find($id);
        return view('admin.masterkonfig.kategori.edit')->with('edit', $edit);
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
        $update = Kategori::find($r->input('id'));
        $update->kategori = $r->input('kategori');
        $update->save();

        return redirect(url('dashboard/kategori'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Kategori::find($id);
        $delete->delete();

        return redirect(url('dashboard/kategori'));
    }

    public function pdfall()
    {
        $kategori['data'] = Kategori::all();
        $pdf = PDF::loadview('admin.masterkonfig.kategori.pdfall', $kategori);
        return $pdf->download('KategoriAll.pdf');
    }

    public function pdf($id)
    {
        $Kategori['data'] = Kategori::find($id);
        $pdf = PDF::loadview('admin.masterkonfig.kategori.pdf', $Kategori);
        return $pdf->download('Kategori.pdf');
    }
}
