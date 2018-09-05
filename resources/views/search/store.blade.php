@extends('head.main')
   @section('contend')
 <div class="layout-2cols">
        <div class="content grid_9">
            <div class="search-result-page">
                <div class="top-lbl-val">
                    <h3 class="common-title">Discover / <span class="fc-orange">Search</span></h3>
                    <div class="count-result">
                        <span class="fw-b fc-black">560</span> projects found for “<span class="fw-b fc-black">craft</span>”
                    </div>
                    <div class="confirm-search">Were you looking for projects in <a href="#" class="fw-b be-fc-orange">Crafts</a>?</div>
                </div>
                <div id="list-search-ajax" class="list-project-result">
                    
                    @foreach($buscar as $project)
                    <div class="project-short larger">
                        <div class="top-project-info">
                            <div class="content-info-short clearfix">
                                <a href="#" class="thumb-img">
                                    <img src="images/ex/th-292x204-2.jpg" alt="$TITLE">
                                </a>
                                <div class="wrap-short-detail">
                                    <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">{{$project->title_project}}</a></h3>
                                    <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">{{$project->user->name}} {{$project->user->lastname}}</a> in <span class="fw-b fc-gray">{{$project->user->city}}, {{$project->user->country}}</span></p>
                                    <p class="rs title-description">{{substr($project->general_description, 0, 120)}} ...</p>

                                </div>
                                <p class="rs clearfix comment-view">
                                    <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                    <span class="sep">|</span>
                                    <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                </p>
                            </div>
                        </div><!--end: .top-project-info -->
                        <div class="bottom-project-info clearfix">
                            <div class="project-progress sys_circle_progress" data-percent="53">
                                <div class="sys_holder_sector"></div>
                            </div>
                            <div class="group-fee clearfix">
                                <div class="fee-item">
                                    <p class="rs lbl">Bankers</p>
                                    <span class="val">270</span>
                                </div>
                                <div class="sep"></div>
                                <div class="fee-item">
                                    <p class="rs lbl">Pledged</p>
                                    <span class="val">${{$project->detailed_descriptions->sum('cost')}}</span>
                                </div>
                                <div class="sep"></div>
                                <div class="fee-item">
                                    <p class="rs lbl">Days Left</p>
                                    <span class="val">25</span>
                                </div>
                            </div>
                            <a class="btn btn-red btn-buck-project" href="#">Buck this project</a>
                            <div class="clear"></div>
                        </div>
                    </div><!--end: project-short item -->
                    @endforeach
                </div>
                <p class="rs ta-c">
                    <a id="showmoreresults" class="btn btn-black btn-load-more" href="#">Show more projects</a>
                </p>
            </div><!--end: .search-result-page -->
        </div><!--end: .content -->
     
        <div class="sidebar grid_3">
           
            <div class="left-list-category">
                <h4 class="rs title-nav">Category</h4>
                <ul class="rs nav nav-category">
                    @foreach($categories as $category)
                    <li>
                        <a href="{{route('categories.show', $category->id)}}">
                            {{$category->name}}
                            
                            <span class="count-val">({{$category->projects->count()}})</span>
                            
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div><!--end: .left-list-category -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
@endsection