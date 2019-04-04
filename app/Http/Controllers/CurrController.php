<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curr;

class CurrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curr = Curr::all();
        return view('admin.masterkonfig.curr.index')->with('curr', $curr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.masterkonfig.curr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $post = new Curr;
        $post->curr = $r->input('curr');
        $post->save();

        return redirect(url('dashboard/curr'));
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
        $edit = Curr::find($id);
        return view('admin.masterkonfig.curr.edit')->with('edit', $edit);
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
        $update = Curr::find($r->input('id'));
        $update->curr = $r->input('curr');
        $update->save();

        return redirect(url('dashboard/curr'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Curr::find($id);
        $delete->delete();

        return redirect(url('dashboard/curr'));
    }
}
