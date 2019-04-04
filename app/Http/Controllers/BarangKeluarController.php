<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangKeluar;
use PDF;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BarangKeluar::all();
        return view('admin.laporan.barang.keluar')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function pdfall()
    {
        $barangkeluar['data'] = BarangKeluar::all();
        $pdf = PDF::loadview('admin.laporan.barang.pdfall_keluar', $barangkeluar);
        return $pdf->download('BarangKeluarAll.pdf');
    }

    public function pdf($id)
    {
        $BarangKeluar['data'] = BarangKeluar::find($id);
        $pdf = PDF::loadview('admin.laporan.barang.pdf_keluar', $BarangKeluar);
        return $pdf->download('BarangKeluar.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyall()
    {
       BarangKeluar::truncate();

        return redirect(url('dashboard/barang_keluar'));
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
        $delete = BarangKeluar::find($id);
        $delete->delete();

        return redirect(url('dashboard/barang_keluar'));
    }
}
