<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProjectDetailRequest;
use App\Http\Controllers\Controller;
use App\Project;
use App\Detailed_description;

class DetailedDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function store(ProjectDetailRequest $request)
    {
        //
    }
    
    public function storex(ProjectDetailRequest $request, $id)
    {
        $fase = Detailed_description::where('project_id', $id)->orderBy('id', 'desc')->first();
        $fase2 = Project::find($id)->detailed_descriptions->count();
        
        //if (($fase2)<1)
        //{
             $project = new Detailed_description($request->all());
        //dd($id);
        $project->project_id=$id;
        if ($fase==null){
            $project->stage=1;
        }else{
            $project->stage=$fase->stage+1;    
        }
        $project->save();
        return redirect('/detailed/detailedof/'.$id);
            
       /* }else{
            flash('You must enter at least one detail');
        return redirect('/detailed/detailedof/'.$id);    
        }*/
        
        
        //$user = DB::table('users')->first();
        
        
        //dd($users);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$projects = Project::all();
        
    }
    
    
     public function detailed($id)
    {
        
         $project = Project::find($id);
        
        //dd($project);
         $fases = Detailed_description::where('project_id', $id)->get();
         
         return view('/detailed/detailedof/detailed', compact('project'), compact('fases'));
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
