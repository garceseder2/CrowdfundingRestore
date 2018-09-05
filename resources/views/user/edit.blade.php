@extends('head.main')
   @section('contend')
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li class="active"><a href="#">Profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Profile</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="form form-profile">
                                    {!! Form::open(['route' => ['user.update', $user->id] , 'method' => 'PUT']) !!}
                                      <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name1">Name:</label>
                                            <div class="val">
                                                <input class="txt" type="text" name="name" id="txt_name1" value="{{$user->name}}">
                                                
                                            </div>
                                            <label class="lbl" for="txt_name1">Lastname:</label>
                                            <div class="val">
                                                <input class="txt" type="text" name="lastname" id="txt_name1" value="{{$user->lastname}}">
                                                <p class="rs description-input">Your name is displayed on your profile.</p>
                                            </div>
                                             <label class="lbl" for="txt_email">Email:</label>
                                            <div class="val">
                                                <input class="txt" type="email" name="email" id="txt_email" value="{{$user->email}}">
                                                <p class="rs description-input">Your name is displayed on your profile.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name1">Britday:</label>
                                            <div class="val">
                                                <input class="txt" type="date" name="birthday" id="txt_name1" value="{{$user->birthday}}">
                                            </div>
                                        </div>
                                        
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name1">ID Document:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" name="id_document" id="txt_name1" value="{{$user->id_document}}">
                                            </div>
                                            <label class="lbl" for="txt_name1">Gender:</label>
                                            <div class="val">
                                                <select class="" name="gender">
                                                    <option value="M">M</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </div>
                                        </div>
                                
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_location">Location:</label>
                                            <div class="val">
                                                <input class="txt" type="text" id="txt_location" value="{{$user->country}}" name="country" placeholder="Country" >
                                                <input class="txt" type="text" id="txt_location" value="{{$user->stade}}" name="stade" placeholder="Stade" >
                                                <input class="txt" type="text" id="txt_location" value="{{$user->city}}" name="city" placeholder="city" >
                                                
<!--                                                <button class="btn btn-white">Choose location</button>-->
                                            </div>
                                            <label class="lbl" for="txt_location">Addres:</label>
                                            <div class="val">
                                                <input class="txt" type="text" id="txt_location" value="{{$user->adders_1}}" name="adders_1" placeholder="Address 1" >
                                                <input class="txt" type="text" id="txt_location" value="{{$user->adders_2}}" name="adders_2" placeholder="Address 2" >
                                                <input class="txt" type="text" id="txt_location" value="{{$user->postalcode}}" name="postalcode" placeholder="Postal Code" >
<!--                                                <button class="btn btn-white">Choose location</button>-->
                                            </div>
                                        </div>
<!--
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_time_zone">Time zone:</label>
                                            <div class="val">
                                                <input class="txt" type="text" id="txt_time_zone" value="">
                                            </div>
                                        </div>
-->
                                       <!-- <div class="row-item clearfix">
                                            <label class="lbl" for="txt_bio">Biography:</label>
                                            <div class="val">
                                                <textarea class="txt fill-width" name="txt_bio" id="txt_bio" cols="30" rows="10"></textarea>
                                                <p class="rs description-input">We suggest a short bio. If it’s 300 characters or less it’ll look great on your profile.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name2">Profile URL:</label>
                                            <div class="val">
                                                <p class="rs display-val"><a href="#" class="be-fc-orange">www.kickstars.com/profile/</a></p>
                                                <input class="txt" type="text" id="txt_name2" value="John Doe">
                                                <p class="rs description-input">You can set a vanity URL here/ Ince set. this vanity URL can not be changed.</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_web">Web:</label>
                                            <div class="val">
                                                <input class="txt txt-website" type="text" id="txt_web" value="">
                                                <button class="btn btn-white">Add</button>
                                            </div>
                                        </div>-->
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red btn-submit-all">Save all settings</button>
                                        </p>
                                    {!! Form::close() !!}
                                   <!-- <form action="{{route('user.destroy')}}" method="DELETE">
                                        
                                    </form>-->
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="box-gray project-author">
                <h3 class="title-box">Project by</h3>
                <div class="media">
                    <a href="#" class="thumb-left">
                        <img src="{{ asset('images/ex/th-90x90-1.jpg')}}" alt="$USER_NAME"/>
                    </a>
                    <div class="media-body">
                        <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">John Doe</a></h4>
                        <p class="rs">Chicago, IL</p>
                        <p class="rs fc-gray">5 projects</p>
                    </div>
                </div>
                {!! Form::open(['route' => ['send.photo'] , 'method' => 'POST', 'files' => true]) !!}
                                            <label class="lbl" for="txt_location">Photo:</label>
                                            <div class="val">
                                                <input class="txt" type="file" id="txt_location" value="{{$user->adders_2}}" name="name" placeholder="Address 2" >
                                            </div>
                                        
                                        <div class="author-action">
                    <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red">Upload Photo</button>
                                            <a class="btn btn-white" href="#">Logout</a>
                                        </p>
                </div>
                                       
                                        
                                    {!! Form::close() !!}
                
                
                
            </div><!--end: .project-author -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
     @endsection