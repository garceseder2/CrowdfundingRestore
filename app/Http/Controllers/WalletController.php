<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Wallet;
use App\Project;
use App\User;
use Auth;
use Session;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('balance.load.index');
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
        $project = new Wallet($request->all());
        $project->user_id = Auth::user()->id;
        $project->transaction = 'up';
        $project->save();
        return redirect('/balance/load/');
    }
    
    public function storex(Request $request, $id)
    {
        
        
        if (($request->balance)>0)
{
                    if ((Auth::user()->wallets->sum('balance')-$request->balance)<0)
{
     flash('You do not have enough balance for the investment');
            return redirect('/put/'.$id);
}
else
{
       $wallet = new Wallet($request->all());
        $wallet->user_id = Auth::user()->id;
        $wallet->balance = $request->balance*(-1);
        //dd($project->balanace);
        $wallet->transaction = 'buck';
        $wallet->save();
        $wallet->project()->sync($request->project);
         flash('Your investment has been successful');
        return redirect('/put/'.$id);
}
    
}
else
{
    
         flash('Minimum investment of US $ 1');
        return redirect('/put/'.$id);
}
        
        
        //dd($request->all());
    }
    
      public function detailed($id)
    {
        //dd($id);
        $project = Project::find($id);
        
        //dd($project);
         //$fases = Detailed_description::where('project_id', $id)->get();*/
         //return view('/detailed/detailedof/detailed', compact('project'), compact('fases'));
         return view('balance/load/put')->with('project', $project);
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
