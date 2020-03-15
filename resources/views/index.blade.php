@extends('head.main')
   @section('contend')
    <div id="home-slider">
        <div class="md-slide-items md-slider" id="md-slider-1" data-thumb-width="105" data-thumb-height="70">
			<div class="md-slide-item slide-0" data-timeout="6000">
				<div class="md-mainimg"><img src="images/ex/th-slide0.jpg" alt=""></div>
				<div class="md-objects">
					<div class="md-object rs slide-title" data-x="20" data-y="38" data-width="480" data-height="30" data-start="700" data-stop="5500" data-easein="random" data-easeout="keep">
						<p>Search Money for Your Creative Ideas?</p>
					</div>
					<div class="md-object rs slide-description" data-x="20" data-y="160" data-width="480" data-height="90" data-start="1400" data-stop="7500" data-easein="random" data-easeout="keep">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte.</p>
					</div>
					<div class="md-object rs" data-x="20" data-y="260" data-width="120" data-height="23" data-padding-top="9" data-padding-bottom="7" data-padding-left="10" data-padding-right="10" data-start="1800" data-stop="7500" data-easein="random" data-easeout="keep">
						<a href="#" class="btn btn-gray">Learn more</a>
					</div>
					<div class="md-object" data-x="495" data-y="0" data-width="612" data-height="365" data-start="1800" data-stop="7500" data-easein="fadeInRight" data-easeout="keep" style=""><img src="images/ex/th-slide-man.png" alt="Search Money for Your Creative Ideas" width="612" height="365" /></div>
				</div>
			</div>
			<div class="md-slide-item slide-1" data-timeout="6000">
				<div class="md-mainimg"><img src="images/ex/th-slide1.jpg" alt=""></div>
				<div class="md-objects">
					<div class="md-object rs slide-title" data-x="20" data-y="188" data-width="390" data-height="30" data-start="700" data-stop="5500" data-easein="random" data-easeout="random">
						<p>A creative engine</p>
					</div>
					<div class="md-object rs slide-description2" data-x="20" data-y="250" data-width="390" data-height="100" data-start="1400" data-stop="4500" data-easein="random" data-easeout="random">
						<p>Mauris volutpat, lectus vitae pretium sagittis, turpis augue euismod libero</p>
					</div>
					<div class="md-object" data-x="454" data-y="44" data-width="327" data-height="268" data-start="1000" data-stop="5500" data-easein="random" data-easeout="random" style=""><img src="images/ex/slide1_1.png" alt="Responsive" width="327" height="268" /></div>
					<div class="md-object" data-x="628" data-y="142" data-width="298" data-height="176" data-start="1600" data-stop="5100" data-easein="random" data-easeout="random" style=""><img src="images/ex/slide1_2.png" alt="Responsive" width="298" height="176" /></div>
					<div class="md-object" data-x="837" data-y="169" data-width="119" data-height="149" data-start="2200" data-stop="4800" data-easein="random" data-easeout="random" style=""><img src="images/ex/slide1_3.png" alt="Responsive" width="119" height="149" /></div>
					<div class="md-object" data-x="809" data-y="208" data-width="59" data-height="114" data-start="2800" data-stop="4500" data-easein="random" data-easeout="random" style=""><img src="images/ex/slide1_4.png" alt="Responsive" width="59" height="114" /></div>
				</div>
			</div>
			<div class="md-slide-item slide-2" data-timeout="4000">
				<div class="md-mainimg"><img src="images/ex/th-slide2.jpg" alt=""></div>
				<div class="md-objects">
					<div class="md-object slide-with-background" data-x="20" data-y="58" data-width="500" data-height="170" data-padding-top="30" data-padding-bottom="30" data-padding-left="35" data-padding-right="35" data-start="300" data-stop="3600" data-easein="random" data-easeout="keep">
						<h2 class="rs slide-title">Start your project today</h2>
						<p class="rs slide-description2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte.</p>
					</div>
				</div>
			</div>
		</div>
    </div><!--end: #home-slider -->
    <div class="home-feature-category">
        <div class="container_12 clearfix">
            <div class="grid_4 left-lst-category">
                <div class="wrap-lst-category">
                    <h3 class="title-welcome rs">Welcome to Kickstars!</h3>
                    <p class="description rs">Pellentesque laoreet sapien id lacus luctus non fringilla elit lobortis. Fusce augue diam, tempor posuere pharetra sed, feugiat non sapien.</p>
                    <nav class="lst-category">
                        <ul class="rs nav nav-category">
                            @foreach($categories as $category)
                    <li class="active">
                        <a href="#">
                            {{$category->name}}
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    @endforeach
                            
                            
                           <!-- <li>
                                <a href="#">
                                    Art
                                    <span class="count-val">(12)</span>
                                    <i class="icon iPlugGray"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Comics
                                    <span class="count-val">(12)</span>
                                    <i class="icon iPlugGray"></i>
                                </a>
                            </li>
                            <li>
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
                            </li>
                            <li>
                                <a href="#">
                                    Music
                                    <span class="count-val">(12)</span>
                                    <i class="icon iPlugGray"></i>
                                </a>
                            </li>-->
                        </ul>
                        <p class="rs view-all-category">
                            <a href="category.html" class="be-fc-orange">+ View all categories</a>
                        </p>
                    </nav><!--end: .lst-category -->
                </div>
            </div><!--end: .left-lst-category -->
            <div class="grid_8 marked-category">
                <div class="wrap-title clearfix">
                    <h2 class="title-mark rs">Staff Picks: <span class="fc-orange">Comics</span></h2>
                    <a href="category.html" class="count-project be-fc-orange">See all <span class="fw-b">24</span> Comics projects</a>
                </div>
                
                @if (($project->detailed_descriptions->sum('cost') == 0))
                @else
                <div class="box-marked-project project-short">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <a href="#" class="thumb-img">
                                <img src="images/ex/th-292x204-1.jpg" alt="$TITLE">
                            </a>
                            <div class="wrap-short-detail">
                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{route('project.show', $project->id)}}">{{$project->title_project}}</a></h3>
                                <p class="rs tiny-desc">by <a href="{{route('user.show', $project->user->id)}}" class="fw-b fc-gray be-fc-orange">{{$project->user->name}} {{$project->user->lastname}}</a> in <span class="fw-b fc-gray">{{$project->user->city}}, {{$project->user->stade}}, {{$project->user->country}}</span></p>
                                <p class="rs title-description">{{$project->general_description}}</p>
                            </div>
                            <p class="rs clearfix comment-view">
                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                <span class="sep">|</span>
                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                            </p>
                        </div>
                    </div>
                    <div class="bottom-project-info clearfix">
                        
                        
                        <div class="project-progress sys_circle_progress" data-percent="{{floor(($project->wallets->sum('balance')*(-1)*(100))/$project->detailed_descriptions->sum('cost'))}}">
                            <div class="sys_holder_sector"></div>
                        </div>
                        <div class="group-fee clearfix">
                            <div class="fee-item">
                                <p class="rs lbl">Bankers</p>
                                <span class="val">{{$project->wallets->count()}}</span>
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
                @endif
               
            </div><!--end: .marked-category -->
            <div class="clear"></div>
        </div>
    </div><!--end: .home-feature-category -->
    <div class="home-popular-project">
        <div class="container_12">
            <div class="grid_12 wrap-title">
                <h2 class="common-title">Popular</h2>
                <a class="be-fc-orange" href="category.html">View all</a>
            </div>
            <div class="clear"></div>
            <div class="lst-popular-project clearfix">
               @foreach($propu as $project)
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
                                            
                                            <span class="success" style="width:{{floor(($project->wallets->sum('balance')*(-1)*(100))/$project->detailed_descriptions->sum('cost'))}}%"></span>
                                            
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
            </div>
        </div>
    </div><!--end: .home-popular-project -->
    <div class="home-discover-friends">
        <div class="container_12">
            <div class="row-friends">
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-1.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-2.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-3.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-4.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-5.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-6.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-7.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-8.jpg" alt="$USER_NAME"/></a>
                <div class="clear"></div>
            </div>
            <div class="row-friends row-connect-fb">
                <a class="thumb-avatar t-first" href="#"><img src="images/ex/th-119x119-17.jpg" alt="$USER_NAME"/></a>
                <div class="connect-fb">
                    <p class="rs description">Discover great projects with your friends!</p>
                    <a href="#" class="btn btn-fb">Connect With Facebook</a>
                </div>
                <a class="thumb-avatar t-last" href="#"><img src="images/ex/th-119x119-1.jpg" alt="$USER_NAME"/></a>
                <div class="clear"></div>
            </div>
            <div class="row-friends">
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-9.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-10.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-11.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-12.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-13.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-14.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-15.jpg" alt="$USER_NAME"/></a>
                <a class="thumb-avatar" href="#"><img src="images/ex/th-119x119-16.jpg" alt="$USER_NAME"/></a>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--end: .home-discover-friends -->

    <div class="additional-info-line">
        <div class="container_12">
            <div class="grid_9">
                <h2 class="rs title">Vestibulum tristique, purus eget euismod vulputate, nisl erat suscipit mi!</h2>
                <p class="rs description">Duis placerat malesuada sapien, eu consequat mauris vestibulum vitae. Aliquam fermentum lorem ut leo ultricies semper. In sed ligula massa, vitae elementum mauris.</p>
            </div>
            <div class="grid_3 ta-r">
                <a class="btn bigger btn-red" href="#">Learn more</a>
            </div>
            <div class="clear"></div>
        </div>
    </div><!--end: .additional-info-line -->
   @endsection