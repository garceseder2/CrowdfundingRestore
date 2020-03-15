<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Conservation;
use App\Image_user;
use Auth;
use Session;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$users = User::all();
        return view('user.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responseregister
     */
    public function create()
    {
        //
        
        return view('user.create')->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        //dd($request->all());
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
       
       //echo 'se ha registrado el ususario '. $user->name. ' de forma exitosa';
        flash('Created user');
         return redirect('/'); 
    }
    
    
    public function uploadimage(Request $request)
    {
        
        if ($request->file('name'))
        {
            $file = $request->file('name');
            $name = 'crowdrestore'.time().'.'.$file->getClientOriginalExtension();
            $path=public_path().'/images/';
            $file->move($path, $name);
            
        }
        //$image = new Image_user();
        $image = new Image_user();
            $image->name = $name;
            $image->user_id = Auth::user()->id;
            $image->save();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $useru = User::find($id)->wallets->where('transaction', 'buck');
        $useru->each(function($useru){
            $useru->project;
        });
        $messages = Conservation::where('to_id', $id)->get();
        
       //dd($useru);
        return view('user.show')->with('user', $user)->with('messages', $messages)->with('useru', $useru);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
        
    }    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
       $user = User::find($id);
       $user->name = $request->name;
       $user->lastname = $request->lastname;
       $user->email = $request->email;
       $user->id_document = $request->id_document;
       $user->birthday = $request->birthday;
       $user->gender = $request->gender;
       $user->adders_1 = $request->adders_1;
       $user->adders_2 = $request->adders_2;
       $user->country = $request->country;
       $user->stade = $request->stade;
       $user->city = $request->city;
       $user->postalcode = $request->postalcode;
       $user->save();
        flash('Updated user');
        return redirect('/user/'.$id.'/edit');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($request->all());//
    }
}
