<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangMasuk;
use App\Products;
use App\Kategori;
use App\Curr;
use App\Disc;
use App\Unit;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.masterkonfig.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $curr = Curr::all();
        $disc = Disc::all();
        $unit = Unit::all();
        return view('admin.masterkonfig.products.create')->with('kategori',$kategori)->with('curr',$curr)->with('disc',$disc)->with('unit',$unit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new Products;
        $post->nama = $r->input('nama');
        $post->stock = $r->input('stock');
        $post->kategori = $r->input('kategori');
        $post->curr = $r->input('curr');
        $post->unit = $r->input('unit');

        if($r->input('disc') == "")
        {
        $post->harga_jual = $r->input('harga_jual');
        }else{
        $hasil = $r->input('harga_jual') * $r->input('disc')/100;
        $post->harga_jual = $r->input('harga_jual') - $hasil;
        }

        $post->harga_beli = $r->input('harga_beli');
        $post->disc = $r->input('disc');
        $post->deskripsi = $r->input('deskripsi');
        $post->save();

        $masuk = new BarangMasuk;
        $masuk->nama = $r->input('nama');
        $masuk->jumlah = $r->input('stock');
        $masuk->via = $r->input('via');
        $masuk->save();

        return redirect(url('dashboard/products'));
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
        $edit = Products::find($id);
        $kategori = Kategori::all();
        $curr = Curr::all();
        $disc = Disc::all();
        $unit = Unit::all();
        return view('admin.masterkonfig.products.edit')->with('edit',$edit)->with('kategori',$kategori)->with('curr',$curr)->with('disc',$disc)->with('unit',$unit);
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
        $update = Products::find($r->input('id'));
        $update->nama = $r->input('nama');
        $update->stock = $r->input('stock');
        $update->kategori = $r->input('kategori');
        $update->curr = $r->input('curr');
        $update->unit = $r->input('unit');
        $update->harga_jual = $r->input('harga_jual');

        if($r->input('disc') == $update->disc && $r->input('harga_jual') == $update->harga_jual)
        {
        $update->harga_jual = $r->input('harga_jual');
        }else{        
        $hasil = $r->input('harga_jual') * $r->input('disc')/100;
        $update->harga_jual = $r->input('harga_jual') - $hasil;
        }

        $update->disc = $r->input('disc');
        $update->deskripsi = $r->input('deskripsi');
        $update->save();

        $masuk = new BarangMasuk;
        $masuk->nama = $r->input('nama');
        $masuk->jumlah = $r->input('stock');
        $masuk->via = 'gudang';
        $masuk->save();

        return redirect(url('dashboard/products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Products::find($id);
        $delete->delete();

        return redirect(url('dashboard/products'));
    }
}
