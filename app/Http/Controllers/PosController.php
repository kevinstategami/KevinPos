<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Pos;
use App\Products;
use App\BarangKeluar;
use PDF;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pos = Pos::all();        
        return view('admin.laporan.pembelian.index')->with('pos', $pos);
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
        $transaksi = Transaksi::all();
        $transaksib['pos'] = Transaksi::all();
        $kodetransaksi = uniqid(10);
        foreach ($transaksi as $key => $value) {
            $barang = Products::where('nama', $value->nama)->first();
            $barang->stock = $barang->stock - $value->stock;
            $transaksibeneran = new Pos;            
            $transaksibeneran->nama = $value->nama;
            $transaksibeneran->stock = $value->stock;            
            $transaksibeneran->harga = $value->harga;            
            
            $barang->save();
            $transaksibeneran->save();

        $bk = new BarangKeluar;
        $bk->nama = $barang->nama;
        $bk->jumlah = $value->stock;
        $bk->via = 'pos';
        $bk->save();
        }
        $pdf = PDF::loadView('admin.pos.pdf', $transaksib);
        Transaksi::truncate();
        return $pdf->download('transaksi.pdf');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyall()
    {
       Pos::truncate();

        return redirect(url('dashboard/pos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function pdfall()
    {
        $pos['data'] = Pos::all();
        $pdf = PDF::loadview('admin.laporan.pembelian.pdfall', $pos);
        return $pdf->download('posAll.pdf');
    }

    public function pdf($id)
    {
        $pos['data'] = Pos::find($id);
        $pdf = PDF::loadview('admin.laporan.pembelian.pdf', $pos);
        return $pdf->download('pos.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Pos::find($id);
        $delete->delete();

        return redirect(url('dashboard/pos'));
    }
}
