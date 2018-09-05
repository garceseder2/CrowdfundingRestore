<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Conservation;
use Auth;
use Session;

class ConservationController extends Controller
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
    public function store(Request $request)
    {
        //
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
    
    public function menssages($id)
    {
        //
        $us = User::find($id);
        $session = Auth::user()->id;
        //dd($id);
        //$msjs = Conservation::where('user_id', $session)->orwhere('to_id', $session)->get();
        $msjs = Conservation::where('user_id', $id)->orwhere('to_id', $id)->get();
        //dd($msjs);
        return view('menssage/send')->with('us', $us)->with('msjs', $msjs);
        
    }
    
    public function send(Request $request, $id)
    {
        $msj = new Conservation($request->all());
        $msj->user_id = Auth::user()->id;
        $msj->to_id = $id;
        //dd($request->all());
        $msj->save();
        return redirect('/message/'.$id);
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
        //
    }
}
