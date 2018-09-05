@extends('head.main')
   @section('contend')
<div class="layout-2cols">
        <div class="content grid_9">
            <div class="search-result-page">
                
                
                <div class="list-project-in-category">
                    <div class="lbl-type clearfix">
                        <h4 class="rs title-lbl"><a href="#" class="be-fc-orange">Popular this week</a></h4>
                        <a href="#" class="view-all be-fc-orange">View all</a>
                    </div>
                    <div id="list-project-ajax" class="list-project">
                        
                        
                        @foreach($projects as $project)
                        @if (($project->detailed_descriptions->sum('cost') == 0))
                        
                        @else
                        
                                      @if((($project->wallets->sum('balance')*(-1)*(100))/$project->detailed_descriptions->sum('cost'))>= 100)
                <div class="grid_3">
                            <div class="project-short sml-thumb">
                                <div class="top-project-info">
                                    <div class="content-info-short clearfix">
                                        <a href="#" class="thumb-img">
                                            <img src="{{ asset('images/ex/th-292x204-1.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="wrap-short-detail">
                                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{route('project.show', $project->id)}}">{{$project->title_project}}</a></h3>
                                            <p class="rs tiny-desc">by <a href="{{route('user.show', $project->user->id)}}" class="fw-b fc-gray be-fc-orange">{{$project->user->name}}  {{$project->user->lastname}}</a></p>
                                            <p class="rs title-description">{{substr($project->general_description, 0, 120)}} ...</p>
                                            <p class="rs project-location">
                                                <i class="icon iLocation"></i>
                                                {{$project->user->city}}, {{$project->user->stade}}, {{$project->user->country}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-project-info clearfix">
                                    <div class="line-progress">
                                        <div class="bg-progress">
                                            
                                            <span class="success" style="width: {{floor(($project->wallets->sum('balance')*(-1)*(100))/$project->detailed_descriptions->sum('cost'))}}"></span>
                                            
                                        </div>
                                    </div>
                                    <div class="group-fee clearfix">
                                        <div class="fee-item">
                                            <p class="rs lbl">Funded</p>
                                            <span class="val">{{floor(($project->wallets->sum('balance')*(-1)*(100))/$project->detailed_descriptions->sum('cost'))}}%</span>
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
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
               
               
                @else
                        
                        <div class="grid_3">
                            <div class="project-short sml-thumb">
                                <div class="top-project-info">
                                    <div class="content-info-short clearfix">
                                        <a href="#" class="thumb-img">
                                            <img src="{{ asset('images/ex/th-292x204-1.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="wrap-short-detail">
                                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{route('project.show', $project->id)}}">{{$project->title_project}}</a></h3>
                                            <p class="rs tiny-desc">by <a href="{{route('user.show', $project->user->id)}}" class="fw-b fc-gray be-fc-orange">{{$project->user->name}}  {{$project->user->lastname}}</a></p>
                                            <p class="rs title-description">{{substr($project->general_description, 0, 120)}} ...</p>
                                            <p class="rs project-location">
                                                <i class="icon iLocation"></i>
                                                {{$project->user->city}}, {{$project->user->stade}}, {{$project->user->country}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-project-info clearfix">
                                    <div class="line-progress">
                                        <div class="bg-progress">
                                            <span  style="width: {{floor(($project->wallets->sum('balance')*(-1)*(100))/$project->detailed_descriptions->sum('cost'))}}%"></span>
                                        </div>
                                    </div>
                                    <div class="group-fee clearfix">
                                        <div class="fee-item">
                                            <p class="rs lbl">Funded</p>
                                            <span class="val">{{floor(($project->wallets->sum('balance')*(-1)*(100))/$project->detailed_descriptions->sum('cost'))}}%</span>
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
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div> 
        
                
                @endif
                @endif
                        
                        
                       
                        @endforeach
                        
                        
                        <!--<div class="grid_3">
                            <div class="project-short sml-thumb">
                                <div class="top-project-info">
                                    <div class="content-info-short clearfix">
                                        <a href="#" class="thumb-img">
                                            <img src="images/ex/th-192x135-1.jpg" alt="$TITLE">
                                        </a>
                                        <div class="wrap-short-detail">
                                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>
                                            <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                            <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class="rs project-location">
                                                <i class="icon iLocation"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-project-info clearfix">
                                    <div class="line-progress">
                                        <div class="bg-progress">
                                            <span class="success" style="width: 123%"></span>
                                        </div>
                                    </div>
                                    <div class="group-fee clearfix">
                                        <div class="fee-item">
                                            <p class="rs lbl">Funded</p>
                                            <span class="val">123%</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Pledged</p>
                                            <span class="val">$25,000</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Days Left</p>
                                            <span class="val">18</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="project-short sml-thumb">
                                <div class="top-project-info">
                                    <div class="content-info-short clearfix">
                                        <a href="#" class="thumb-img">
                                            <img src="images/ex/th-192x135-2.jpg" alt="$TITLE">
                                        </a>
                                        <div class="wrap-short-detail">
                                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>
                                            <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                            <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class="rs project-location">
                                                <i class="icon iLocation"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-project-info clearfix">
                                    <div class="line-progress">
                                        <div class="bg-progress">
                                            <span  style="width: 21%"></span>
                                        </div>
                                    </div>
                                    <div class="group-fee clearfix">
                                        <div class="fee-item">
                                            <p class="rs lbl">Funded</p>
                                            <span class="val">21%</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Pledged</p>
                                            <span class="val">$850K</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Days Left</p>
                                            <span class="val">2</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        
                       
                        
                        <div class="grid_3">
                            <div class="project-short sml-thumb">
                                <div class="top-project-info">
                                    <div class="content-info-short clearfix">
                                        <a href="#" class="thumb-img">
                                            <img src="images/ex/th-292x204-1.jpg" alt="$TITLE">
                                        </a>
                                        <div class="wrap-short-detail">
                                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>
                                            <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                            <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class="rs project-location">
                                                <i class="icon iLocation"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-project-info clearfix">
                                    <div class="line-progress">
                                        <div class="bg-progress">
                                            <span  style="width: 50%"></span>
                                        </div>
                                    </div>
                                    <div class="group-fee clearfix">
                                        <div class="fee-item">
                                            <p class="rs lbl">Funded</p>
                                            <span class="val">50%</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Pledged</p>
                                            <span class="val">$38,000</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Days Left</p>
                                            <span class="val">25</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="project-short sml-thumb">
                                <div class="top-project-info">
                                    <div class="content-info-short clearfix">
                                        <a href="#" class="thumb-img">
                                            <img src="images/ex/th-192x135-1.jpg" alt="$TITLE">
                                        </a>
                                        <div class="wrap-short-detail">
                                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>
                                            <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                            <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class="rs project-location">
                                                <i class="icon iLocation"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-project-info clearfix">
                                    <div class="line-progress">
                                        <div class="bg-progress">
                                            <span class="success" style="width: 123%"></span>
                                        </div>
                                    </div>
                                    <div class="group-fee clearfix">
                                        <div class="fee-item">
                                            <p class="rs lbl">Funded</p>
                                            <span class="val">123%</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Pledged</p>
                                            <span class="val">$25,000</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Days Left</p>
                                            <span class="val">18</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="project-short sml-thumb">
                                <div class="top-project-info">
                                    <div class="content-info-short clearfix">
                                        <a href="#" class="thumb-img">
                                            <img src="images/ex/th-192x135-2.jpg" alt="$TITLE">
                                        </a>
                                        <div class="wrap-short-detail">
                                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>
                                            <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                            <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class="rs project-location">
                                                <i class="icon iLocation"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-project-info clearfix">
                                    <div class="line-progress">
                                        <div class="bg-progress">
                                            <span  style="width: 21%"></span>
                                        </div>
                                    </div>
                                    <div class="group-fee clearfix">
                                        <div class="fee-item">
                                            <p class="rs lbl">Funded</p>
                                            <span class="val">21%</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Pledged</p>
                                            <span class="val">$850K</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Days Left</p>
                                            <span class="val">2</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>-->
                        
<!--                        <div class="clear"></div>-->
                    </div>
                </div><!--end: .list-project-in-category -->
                <!--<p class="rs ta-c">
                    <a id="showmoreproject" class="btn btn-black btn-load-more" href="#">Show more projects</a>
                </p>-->
            </div><!--end: .search-result-page -->
        </div><!--end: .content -->
        <div class="sidebar grid_3">
            <!--<div class="left-list-category">
                <h4 class="rs title-nav">Featured</h4>
                <ul class="rs nav nav-category">
                    <li>
                        <a href="#">
                            Staff Picks
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            Popular
                            <span class="count-val">(2)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Now Launched
                            <span class="count-val">(212)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ending Soon
                            <span class="count-val">(35)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Small Project
                            <span class="count-val">(67)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Most Funded
                            <span class="count-val">(23)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Curated Pages
                            <span class="count-val">(52)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                </ul>
            </div>-->
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
                    
                    <!--<li>
                        <a href="#">
                            Design
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Fashion
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Film
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Games
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                        <ul class="rs nav-sub-category">
                            <li>
                                <a href="#">
                                    Comedy
                                    <span class="count-val">(12)</span>
                                    <i class="dotSquare"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Animation
                                    <span class="count-val">(12)</span>
                                    <i class="dotSquare"></i>
                                </a>
                            </li>
                        </ul>end: .nav-sub-category
                    </li>
                    <li>
                        <a href="#">
                            Music
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Photography
                            <span class="count-val">(35)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Publishing
                            <span class="count-val">(92)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Technology
                            <span class="count-val">(13)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Theater
                            <span class="count-val">(29)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>-->
                </ul>
            </div><!--end: .left-list-category -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
   @endsection