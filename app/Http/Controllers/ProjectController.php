<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Http\Requests\ProjectRequest;

use Auth;
use Session;
use App\User;
use App\Label;
use App\Category;
use App\Detailed_description;
use App\Comments;
use App\Answers;
use DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all()->take(9);
        $categories = Category::all();
        
        //$projects->user;
        //dd($categories);
        return view('project.index')->with('projects', $projects)->with('categories', $categories);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $tags = Label::all();
        
        //dd($categories);
        
        return view('project.create', compact('categories'), compact('tags'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        //
//        if ($request->name('name'))
//        {
//            $file = $request->file('image');
//            $name='crowdrestore'.time().'.'$name->getClientOriginalExtension();
//            $path=public_path().'/images/';
//            $name->move($path, $name);
//        }
        
        
        //dd($request->all());
        $project = new Project($request->all());
        $project->user_id = Auth::user()->id;
        $project->save();
        $project->labels()->sync($request->label);
        
       /* $detailed = new Detailed_description();
        $detailed->detailed_descriptions()->associate($project);
        $detailed->save();*/
         $identif = Project::orderBy('id', 'desc')->first();
        //dd($project);
        return redirect('/detailed/detailedof/'.$identif->id);
        //echo 'ojo';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $project = Project::find($id);
         return view('project.show')->with('project', $project);
        
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
       $categories = Category::all();
        $tags = Label::all();
        $project = Project::find($id);
        
        //dd($project);
        
        return view('project.edit')->with('categories', $categories)->with('tags', $tags)->with('project', $project);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        //
        //dd($id);
        $project = Project::find($id);
       $project->title_project = $request->title_project;
       $project->category_id = $request->category_id;
       $project->general_description = $request->general_description;
       $project->bussines_potential = $request->bussines_potential;
       $project->collection_time = $request->collection_time;
       $project->percentage_gain = $request->percentage_gain;
    
       $project->save();
        flash('Updated Project');
        return redirect('/project/'.$id.'/edit');
        
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
