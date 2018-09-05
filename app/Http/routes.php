<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {return view('index');});


Route::group(['prefix' => '', 'middleware' => 'auth'], function(){
    
    Route::resource('project','ProjectController');
    Route::resource('tags','TagsController');
    Route::resource('categories','CategoriesController');
    Route::resource('detailed','DetailedDescriptionController');
    Route::resource('comment','CommentController');
    Route::resource('answers','AnswersController');
    Route::resource('balance/load','WalletController');
    
    
    Route::get('/put/{proyecto}',
              /* function(){
                   return view('/detailed/detailedof/detailed');
               },*/ ["as" => "put.project", "uses" => "WalletController@detailed"]);
    
    Route::post('/buck/{proyecto}',
              /* function(){
                   return view('/detailed/detailedof/detailed');
               },*/ ["as" => "buck.this.project", "uses" => "WalletController@storex"]);
    
    
    Route::get('/message/{user}',
              /* function(){
                   return view('/detailed/detailedof/detailed');
               },*/ ["as" => "msj", "uses" => "ConservationController@menssages"]);
    
    
    Route::post('send/message/{user}',
              /* function(){
                   return view('/detailed/detailedof/detailed');
               },*/ ["as" => "send.message", "uses" => "ConservationController@send"]);
    
    /* Route::get('/photo',
               ["as" => "photo", "uses" => "ConservationController@menssages"]);*/
    
    Route::post('upload/photo',
               ["as" => "send.photo", "uses" => "UsersController@uploadimage"]);
    
    
}); 

    
    Route::resource('registrer','UsersController');
    Route::resource('','IndexController');
    Route::resource('search','HeadController');
    Route::resource('user','UsersController');
/*Route::get('/head/main',
               function(){
                   return view('/detailed/detailedof/detailed');
               }, ["as" => "buscar.project", "uses" => "HeadController@index"]);*/


    Route::get('/detailed/detailedof/{proyecto}',
              /* function(){
                   return view('/detailed/detailedof/detailed');
               },*/ ["as" => "detailed.project", "uses" => "DetailedDescriptionController@detailed"]);

Route::post('/detailed/{proyecto}',
              /* function(){
                   return view('/detailed/detailedof/detailed');
               },*/ ["as" => "detailed.save", "uses" => "DetailedDescriptionController@storex"]);
    

Route::resource('log','LogController');
Route::resource('auth','LogController');
Route::get('log',["as" => "logout", "uses" => "LogController@logout"]);


