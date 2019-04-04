<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Products;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $transaksi = Transaksi::all();        
        $products = Products::all();
        return view('admin.pos.form')->with('products', $products)->with('transaksi', $transaksi);
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
        $products = Products::find($r->input('id_barang'));
        $post = new Transaksi;
        $post->nama = $products->nama;
        $post->stock = 1;
        $post->harga = $products->harga_jual;
        $post->save();

        return redirect(url('dashboard/transaksi'));
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
        $edit = Transaksi::find($id);
        return view('admin.pos.edit')->with('edit', $edit);
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
        $update = Transaksi::find($r->input('id'));
        $update->stock = $r->input('jumlah');
        $update->harga = $r->input('jumlah') * $update->harga;
        $update->save();

        return redirect(url('dashboard/transaksi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Transaksi::find($id);
        $delete->delete();

        return redirect(url('dashboard/transaksi'));
    }
}
