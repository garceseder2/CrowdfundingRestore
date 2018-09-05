@extends('head.main')
@section('contend')

    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                 <div>
                            <h3 class="rs alternate-tab accordion-label">New Project</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="form form-profile">
                                    
                                    {!! Form::open(['route' => ['project.update', $project->id] , 'method' => 'PUT']) !!}
                                   
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="title_project">Title:</label>
                                            <div class="val">
                                                
                                                <input class="txt" type="text" id="title_project" name='title_project' value="{{$project->title_project}}">
                                                
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name1">Category:</label>
                                            <div class="val">
                                                 <select class="txt" type="txt" id="category_id" name='category_id'>
                                                     <option value="" disabled selected>Choose your option</option>
                                                     
                                                    @foreach($categories as $category)
                                                     <option value="{{$category['id']}}"> {{$category['name']}} </option>
                                                     @endforeach
                                                     
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="general_description">Description General:</label>
                                            <div class="val">
                                                <textarea class="txt fill-width" name="general_description" id="general_description" cols="30" rows="10" value=''>{{$project->general_description}}</textarea>
                                                <p class="rs description-input">ooo</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="bussines_potential">Businness Potential:</label>
                                            <div class="val">
                                                <textarea class="txt fill-width" name="bussines_potential" id="bussines_potential" cols="30" rows="10" value=''>{{$project->bussines_potential}}</textarea>
                                                <p class="rs description-input">ooo</p>
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="collection_time">Collection time:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="collection_time" name='collection_time' value="{{$project->collection_time}}">
                                                
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name1">Percentage again:</label>
                                            <div class="val">
                                                <input class="txt" type="numeric" id="percentage_gain" name='percentage_gain' value="{{$project->percentage_gain}}">
                                                
                                            </div>
                                        </div>
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="txt_name1">Tags:</label>
                                            <div class="val">
                                                 <select class="txt" type="txt" id="label" name='label[]' multiple>
                                                     <option value="" disabled selected>Choose your option</option>
                                                      @foreach($tags as $tag)
                                                     <option value="{{$tag['id']}}"> {{$tag['label']}} </option>
                                                     @endforeach
                                                     
                                                </select>
                                            </div>
                                        </div> 
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red btn-submit-all">Save Project</button>
                                        </p>
                                   
                                     {!! Form::close() !!}
                                    
                                    
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="box-gray project-author">
                <h3 class="title-box">Project by</h3>
                <div class="media">
                    <a href="#" class="thumb-left">
                        <img src="images/ex/th-90x90-1.jpg" alt="$USER_NAME"/>
                    </a>
                    <div class="media-body">
                        <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">John Doe</a></h4>
                        <p class="rs">Chicago, IL</p>
                        <p class="rs fc-gray">5 projects</p>
                    </div>
                </div>
                <div class="author-action">
                    <a class="btn btn-red" href="#">Edit info</a>
                    <a class="btn btn-white" href="#">Logout</a>
                </div>
            </div><!--end: .project-author -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
@endsection