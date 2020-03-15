@extends('head.main')
   @section('contend')
     <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li class="active"> <a href="#" class="be-fc-orange">Account</a></li>
                        @if((Auth::user())and(($user->id)==(Auth::user()->id)))
                      <li class="disable"><a href="#" class="be-fc-orange">Notifications</a></li>
                      <li><a href="#" class="be-fc-orange">Inbox</a></li>
                        @endif
                      <li><a href="#" class="be-fc-orange">Projects</a></li>
                         @if((Auth::user())and(($user->id)==(Auth::user()->id)))
                      <li><a href="#" class="be-fc-orange">Projects Inactive</a></li>
                        @endif
                      <li><a href="#" class="be-fc-orange">Sponsors</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Account</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="tab-pane-inside">
                                    <div class="project-author pb20">
                                        <div class="media">
                                            <a href="#" class="thumb-left">
                                                <img src="{{ asset('images/ex/th-90x90-1.jpg')}}" alt="$USER_NAME">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">{{$user->name}} {{$user->lastname}}</a></h4>
                                                <p class="rs">{{$user->city}}, {{$user->stade}}, {{$user->country}}</p>
                                                <p class="rs fc-gray pb10">5 projects</p>
                                                <p class="rs description">Mauris vel lacus vitae felis vestibulum volutpat. Etiam est nunc, venenatis in, tristique eu, imperdiet ac, nisl. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </div><!--end: .project-author -->
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
                        @if((Auth::user())and(($user->id)==(Auth::user()->id)))
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Notifications</h3>
                            <div class="tab-pane accordion-content">
                                <br /> Notifications<br /> <br /> <br /> <br /><br /><br />

                            </div><!--end: .tab-pane -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Inbox</h3>
                            <div class="tab-pane accordion-content">
                                <div class="box-list-comment">
                                    @foreach($messages as $message)
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-1.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">{{$message->user->name}} {{$message->user->lastname}}</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">{{$message->message}}</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    @endforeach
                                    
                                    <!--<div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-1.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">John Doe</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content"> Fusce tellus. Sed metus augue, convallis et, vehicula ut, pulvinar eu, ante. Integer orci tellus, tristique vitae, consequat nec, porta vel, lectus</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-2.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Eminem</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-3.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Snoop Dogg</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-4.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Obama</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Curabitur vel dolor ultrices ipsum dictum tristique. Praesent vitae lacus. Ut velit enim, vestibulum non, fermentum nec,</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/no-avatar.png')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Mark Lenon</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-1.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Dr. Dre</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content"> Morbi eget arcu. Morbi porta, libero id ullamcorper nonummy, nibh ligula pulvinar metus, eget consectetuer augue nisi quis lacus. Ut ac mi quis lacus mollis aliquam. Curabitur iaculis tempus eros. Curabitur vel mi sit amet magna malesuada ultrices</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div>-->
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
                        @endif
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Projects</h3>
                            <div class="tab-pane accordion-content">
                                @foreach($user->projects as $project)
                                 @if (($project->detailed_descriptions->sum('cost') == 0))
                                @else
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="{{ asset('images/ex/th-292x204-1.jpg')}}" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{route('project.show', $project->id)}}">{{$project->title_project}}</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">{{$project->user->name}}</a> in <span class="fw-b fc-gray">{{$project->user->city}}, {{$project->user->stade}}, {{$project->user->country}}</span></p>
                                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            </div>
                                            <p class="rs clearfix comment-view">
                                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                                <span class="sep">|</span>
                                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                            </p>
                                        </div>
                                    </div><!--end: .top-project-info -->
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
                                </div><!--end: .box-marked-project -->
                                @endif
                                @endforeach
                            </div><!--end: .tab-pane -->
                        </div>
                        
                        @if((Auth::user())and(($user->id)==(Auth::user()->id)))
                         <div>
                            <h3 class="rs alternate-tab accordion-label">Projects desa</h3>
                            <div class="tab-pane accordion-content">
                                @foreach($user->projects as $project)
                                 @if (($project->detailed_descriptions->sum('cost') == 0))
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="{{ asset('images/ex/th-292x204-1.jpg')}}" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{route('project.show', $project->id)}}">{{$project->title_project}}</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">{{$project->user->name}}</a> in <span class="fw-b fc-gray">{{$project->user->city}}, {{$project->user->stade}}, {{$project->user->country}}</span></p>
                                                <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            </div>
                                            <p class="rs clearfix comment-view">
                                                <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                                <span class="sep">|</span>
                                                <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                            </p>
                                        </div>
                                    </div><!--end: .top-project-info -->
                                    <div class="bottom-project-info clearfix">
                                        <div class="project-progress sys_circle_progress" data-percent="0">
                                            <div class="sys_holder_sector"></div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Bankers</p>
                                                <span class="val">0</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$0</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">ND</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div><!--end: .box-marked-project -->
                                @else
                                
                                @endif
                                @endforeach
                            </div><!--end: .tab-pane -->
                        </div>
                        @endif
                        
                        
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Projects Bankers</h3>
                            <div class="tab-pane accordion-content">
                                @foreach($useru as $wallet)
                                @foreach($wallet->project as $project)
                                @if (($project->detailed_descriptions->sum('cost') == 0))
                                @else
                                <div class="box-marked-project project-short inside-tab">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="#" class="thumb-img">
                                                <img src="{{ asset('images/ex/th-292x204-1.jpg')}}" alt="$TITLE">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{route('project.show', $project->id)}}">{{$project->title_project}}</a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">{{$project->user->name}}</a> in <span class="fw-b fc-gray">{{$project->user->city}}, {{$project->user->stade}}, {{$project->user->country}}</span></p>
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
                                </div><!--end: .box-marked-project -->
                                @endif
                                @endforeach
                                
                                @endforeach
                            </div><!--end: .tab-pane -->
                        </div>
                        
                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->
          @if((Auth::user())and(($user->id)==(Auth::user()->id)))
        <div class="sidebar grid_4">
            <div class="box-gray project-author">
                <h3 class="title-box">Account</h3>
                <div class="media">
                    <a href="#" class="thumb-left">
                        <img src="{{ asset('images/ex/th-90x90-1.jpg')}}" alt="$USER_NAME"/>
                    </a>
                    <div class="media-body">
                        <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">{{Auth::user()->name}} {{Auth::user()->lastname}}</a></h4>
                        <p class="rs">{{Auth::user()->city}}, {{Auth::user()->country}}</p>
                        <p class="rs fc-gray">x projects</p>
                    </div>
                </div>
                <div class="author-action">
                    <a class="btn btn-red" href="{{route('user.edit',Auth::user()->id)}}">Edit info</a>
                    <a class="btn btn-white" href="{{route('logout')}}">Logout</a>
                </div>
            </div><!--end: .project-author -->
        </div><!--end: .sidebar -->
         @else
         
         <div class="sidebar grid_4">
            <div class="box-gray project-author">
                <h3 class="title-box">Account</h3>
                <div class="media">
                    <a href="#" class="thumb-left">
                        <img src="{{ asset('images/ex/th-90x90-1.jpg')}}" alt="$USER_NAME"/>
                    </a>
                    <div class="media-body">
                        <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">{{$user->name}} {{$user->lastname}}</a></h4>
                        <p class="rs">{{$user->city}}, {{$user->country}}</p>
                        <p class="rs fc-gray">x projects</p>
                    </div>
                </div>
                <div class="author-action">
                    <a class="btn btn-red" href="{{route('msj',$user->id)}}">send message</a>
                    
                </div>
            </div><!--end: .project-author -->
        </div><!--end: .sidebar -->
         
         @endif
        <div class="clear"></div>
    </div>
   @endsection