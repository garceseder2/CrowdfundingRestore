<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Category;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         //dd($request->title_project);
       
        $buscar = Project::Search($request->title_project)->paginate(10);
        $buscar->each(function($buscar){
            $buscar->user;
            $buscar->category;
            $buscar->labels;
        });
        
        
        
      
         return view('search.index')->with('buscar', $buscar);
    }
    
  /*  public function head()
    {
        $buscar = Project::paginate(4)->get();
        $busca = Project::all();
       // dd($busca);
        return view('/head/main')->with('buscar', $buscar);
    }*/

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
        //dd($request->all());
        $str=$request->title_project;
        // strtolower($str);
        //$str=strtolower($str);
            //dd($str);
         $buscar = Project::Search($str)->paginate(10);
        
        
        $buscar->each(function($buscar){
            $buscar->user;
            $buscar->category;
            $buscar->labels;
        });
        //dd($buscar);
        
         $categories = Category::take(8)->get();
        // dd($buscar);
        
        return view('search.store')->with('buscar', $buscar)->with('categories', $categories);
        
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
