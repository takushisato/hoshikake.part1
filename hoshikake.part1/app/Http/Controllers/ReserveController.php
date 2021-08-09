<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $reserves = Reserve::all();
        return view('list', ['reserves' => $reserves]);
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
    public function store(Request $request)
    {
        $reserve = new Reserve;
        $reserve->name = request('name');
        $reserve->mail = request('mail');
        $reserve->telephone = request('telephone');
        $reserve->message = request('message');
        $reserve->preferred_date = request('preferred_date');
        $reserve->save();
        return redirect()->route('reserve.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function show(Reserve $reserve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserve $reserve, $id)
    {
        $reserve = Reserve::find($id);
        return view('edit', ['reserve' => $reserve, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserve $reserve, $id)
    {
        $reserve = Reserve::find($id);
        $reserve->name = request('name');
        $reserve->mail = request('mail');
        $reserve->telephone = request('telephone');
        $reserve->message = request('message');
        $reserve->preferred_date = request('preferred_date');
        $reserve->save();
        return redirect()->route('reserve.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserve = Reserve::find($id);
        $reserve->delete();
        return redirect()->route('reserve.list'); 
    }
}
