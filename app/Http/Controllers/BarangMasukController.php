<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangMasuk;
use PDF;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BarangMasuk::all();
        return view('admin.laporan.barang.masuk')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfall()
    {
        $barangmasuk['data'] = BarangMasuk::all();
        $pdf = PDF::loadview('admin.laporan.barang.pdfall_masuk', $barangmasuk);
        return $pdf->download('BarangKeluarAll.pdf');
    }

    public function pdf($id)
    {
        $barangmasuk['data'] = BarangMasuk::find($id);
        $pdf = PDF::loadview('admin.laporan.barang.pdf_masuk', $barangmasuk);
        return $pdf->download('BarangMasuk.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyall()
    {
       BarangMasuk::truncate();

        return redirect(url('dashboard/pos'));
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
        $delete = BarangMasuk::find($id);
        $delete->delete();

        return redirect(url('dashboard/barang_masuk'));
    }
}
