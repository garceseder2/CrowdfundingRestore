@extends('head.main')
   @section('contend')
<!DOCTYPE html>
<html>
<body>

<div id="wrapper">
    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                <h2 class="rs project-title">{{$project->title_project}}</h2>
                <p class="rs post-by">by <a href="#">{{$project->user->name}} {{$project->user->lastname}}</a></p>
                <div class="project-short big-thumb">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <div class="thumb-img">
                                <div class="rslides_container">
                                  <ul class="rslides" id="slider1">
                                    <li><img src="{{ asset('images/ex/th-552x411-2.jpg')}}" alt=""></li>
                                    <li><img src="{{ asset('images/ex/th-552x411-2.jpg')}}"></li>
                                    <li><img src="{{ asset('images/ex/th-552x411-2.jpg')}}"></li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .top-project-info -->
                    <div class="bottom-project-info clearfix">
                        @if (($project->detailed_descriptions->sum('cost') == 0))
                        <div class="project-progress sys_circle_progress" data-percent="0">
                            <div class="sys_holder_sector"></div>
                        </div>
                        @else
                        <div class="project-progress sys_circle_progress" data-percent="{{floor(($project->wallets->sum('balance')*(-1)*(100))/$project->detailed_descriptions->sum('cost'))}}">
                            <div class="sys_holder_sector"></div>
                        </div>
                        @endif
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
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li class="active"><a href="#">About</a></li>
<!--                      <li><a href="#" class="be-fc-orange">Updates (0)</a></li>-->
                      <li><a href="#" class="be-fc-orange">Backers ({{$project->wallets->count()}})</a></li>
                      <li><a href="#" class="be-fc-orange">Comments ({{$project->Comments->count()}})</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">About</h3>
                            <div class="tab-pane active accordion-content">
                                <div class="editor-content">
                                    <h3 class="rs title-inside">{{$project->title_project}}</h3>
                                    <p class="rs post-by">by <a href="#" class="fw-b fc-gray be-fc-orange">{{$project->user->name}}</a> in <span class="fw-b fc-gray">{{$project->user->city}}, {{$project->user->stade}} - {{$project->user->country}}</span></p>
                                    <p>{{$project->general_description}}</p>
                                   
                                    <p>
                                        <img class="img-desc" src="{{ asset('images/ex/th-552x411-2.jpg')}}" alt="$DESCRIPTION"/>
                                        <span class="img-label">Me and project friends on meeting</span>
                                    </p>
                                    
                                    <!--<div class="social-sharing">
                                       
                                        <div class="addthis_toolbox addthis_default_style">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                        </div>
                                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                                       
                                    </div>-->
                                </div>
                                <div class="project-btn-action">
                                    <a class="btn big btn-red" href="{{route('detailed.project', $project->id)}}">Detailed project</a>
                                    <a class="btn big btn-black" href="#">Report this project</a>
                                </div>
                            </div><!--end: .tab-pane(About) -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Backers ({{$project->wallets->count()}})</h3>
                            <div class="tab-pane accordion-content">
                                
                                
                                
                                <div class="tab-pane-inside">
                                    @foreach($project->wallets as $user)
                                    <div class="project-author pb20">
                                        <div class="media">
                                            <a href="#" class="thumb-left">
                                                <img src="images/ex/th-90x90-1.jpg" alt="$USER_NAME"/>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">{{$user->user->name}} {{$user->user->lastname}}</a></h4>
                                                <p class="rs">{{$user->user->city}}, {{$user->user->stade}}, {{$user->user->country}}</p>
                                                <p class="rs fc-gray">{{$user->user->projects->count()}} projects</p>
                                            </div>
                                        </div>
                                    </div><!--end: .project-author -->
                                    @endforeach
                                </div>
                              
                                
                                <div class="project-btn-action">
                                    <!--<a class="btn btn-red" href="#">Ask a question</a>
                                    <a class="btn btn-black" href="#">Report this project</a>-->
                                </div>
                            </div><!--end: .tab-pane(Backers) -->
                        </div>
                        <div>
                            <h3 class="rs active alternate-tab accordion-label">Comments (2)</h3>
                            <div class="tab-pane accordion-content">
                                <div class="box-list-comment">
                                    @foreach($project->Comments as $comment)
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-1.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">{{$comment->user->name}} {{$comment->user->lastname}}</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">{{$comment->comment}}</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    @foreach($comment->answers as $answer)
                                    <div class="media comment-item lv2">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-3.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">{{$answer->user->name}} {{$answer->user->lastname}}</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <p class="rs comment-content">{{$answer->answer}}</p>
                                            <p class="rs time-post">5 days ago</p>
                                        </div>
                                    </div><!--end: .comment-item -->
                                    @endforeach
                                    
                                    @if(Auth::user())
                                    <div class="media comment-item lv2">
                                        <a href="#" class="thumb-left">
                                            <img src="{{ asset('images/ex/th-90x90-3.jpg')}}" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">{{Auth::user()->name}} {{Auth::user()->lastname}}</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <div>
                                                <form action="{{route('answers.store')}}" method="POST">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <input type="hidden" name="comments_id" value="{{$comment->id}}">
                                        <input type="hidden" id="project_id" name="project_id" value="{{$project->id}}">
                                       
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="general_description">Reply:</label>
                                            <div class="val">
                                                <textarea class="txt fill-width" name="answer" id="answer" cols="50"></textarea>
                                                <p class="rs description-input"></p>
                                            </div>
                                        </div>
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red btn-submit-all">Reply</button>
                                        </p>
                                    </form>
                                            </div>
                                            
                                        </div>
                                    </div><!--end: .comment-item -->
                                    @endif
                                    
                                    @endforeach
                                    <div class="media comment-item">
                                        <a href="#" class="thumb-left">
                                            <img src="images/ex/th-90x90-1.jpg" alt="$TITLE">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="rs comment-author">
                                                <a href="#" class="be-fc-orange fw-b">Dr. Dre</a>
                                                <span class="fc-gray">say:</span>
                                            </h4>
                                            <div>
                                            <form action="{{route('comment.store')}}" method="POST">
                                        <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
                                        <input type="hidden" id="project_id" name="project_id" value="{{$project->id}}">
                                       
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="general_description">Description General:</label>
                                            <div class="val">
                                                <textarea class="txt fill-width" id="comment" name="comment" id="comment" cols="55"></textarea>
                                                <p class="rs description-input"></p>
                                            </div>
                                        </div>
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button id='commentary' class="btn btn-red btn-submit-all">Comment</button>
                                        </p>
                                    </form>
                                            </div>
                                        </div>
                                    </div><!--end: .comment-item -->
                                </div>
                            </div><!--end: .tab-pane(Comments) -->
                        </div>
                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="project-runtime">
                <div class="box-gray">
                    <div class="project-date clearfix">
                        <i class="icon iCalendar"></i>
                        <span class="val"><span class="fw-b">Launched: </span>Apr 8, 2013</span>
                    </div>
                    <div class="project-date clearfix">
                        <i class="icon iClock"></i>
                        <span class="val"><span class="fw-b">Funding ends: </span>Apr 8, 2013</span>
                    </div>
                    <a class="btn btn-green btn-buck-project" href="{{route('put.project', $project->id)}}">
                        <span class="lbl">Buck This Project</span>
                        <span class="desc">$1 minimum</span>
                    </a>
                    <p class="rs description">This project will only be funded if at least $15,000 is pledged by Wednesday May 8, 2:05pm EDT.</p>
                </div>
            </div><!--end: .project-runtime -->
            <div class="project-author">
                <div class="box-gray">
                    <h3 class="title-box">Project by</h3>
                    <div class="media">
                        <a href="#" class="thumb-left">
                            <img src="images/ex/th-90x90-1.jpg" alt="$USER_NAME"/>
                        </a>
                        <div class="media-body">
                            <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">{{$project->user->name}}</a></h4>
                            <p class="rs">{{$project->user->city}}, {{$project->user->stade}} - {{$project->user->country}}</p>
                            <p class="rs fc-gray">5 projects</p>
                        </div>
                    </div>
                    <div class="author-action">
                        <a class="btn btn-red" href="#">Contact me</a>
                        <a class="btn btn-white" href="#">See full bio</a>
                    </div>
                </div>
            </div><!--end: .project-author -->
            <div class="clear clear-2col"></div>
            <div class="wrap-nav-pledge">
                <ul class="rs nav nav-pledge accordion">
                    <li>
                        <div class=" pledge-label accordion-label clearfix">
                            <i class="icon iPlugGray"></i>
                            <span class="pledge-amount">Pledge $17 or more</span>
                            <span class="count-val">(12 of 31)</span>
                        </div>
                        <div class=" pledge-content accordion-content">
                            <div class="pledge-detail">
                                <p class="rs pledge-description">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class="rs fw-b pb20">Ocupated (2 of 10)</p>
                                <p class="rs"><span class="fw-b">Estimated delivery:</span> Aug 2013</p>
                                <p class="rs fw-thin fc-gray pb20">Ships within the US only</p>
                                <p class="rs ta-c"><a class="btn big btn-red" href="#">Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class=" pledge-label accordion-label clearfix">
                            <i class="icon iPlugGray"></i>
                            <span class="pledge-amount">Pledge $32 or more</span>
                            <span class="count-val">(42 of 111)</span>
                        </div>
                        <div class=" pledge-content accordion-content">
                            <div class="pledge-detail">
                                <p class="rs pledge-description">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class="rs fw-b pb20">Ocupated (2 of 10)</p>
                                <p class="rs"><span class="fw-b">Estimated delivery:</span> Aug 2013</p>
                                <p class="rs fw-thin fc-gray pb20">Ships within the US only</p>
                                <p class="rs ta-c"><a class="btn big btn-red" href="#">Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class="active pledge-label accordion-label clearfix">
                            <i class="icon iPlugGray"></i>
                            <span class="pledge-amount">Pledge $50 or more</span>
                            <span class="count-val">(7 of 13)</span>
                        </div>
                        <div class="active pledge-content accordion-content">
                            <div class="pledge-detail">
                                <p class="rs pledge-description">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class="rs fw-b pb20">Ocupated (2 of 10)</p>
                                <p class="rs"><span class="fw-b">Estimated delivery:</span> Aug 2013</p>
                                <p class="rs fw-thin fc-gray pb20">Ships within the US only</p>
                                <p class="rs ta-c"><a class="btn big btn-red" href="#">Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class=" pledge-label accordion-label clearfix">
                            <i class="icon iPlugGray"></i>
                            <span class="pledge-amount">Pledge $54 or more</span>
                            <span class="count-val">(2 of 10)</span>
                        </div>
                        <div class=" pledge-content accordion-content">
                            <div class="pledge-detail">
                                <p class="rs pledge-description">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class="rs fw-b pb20">Ocupated (12 of 30)</p>
                                <p class="rs"><span class="fw-b">Estimated delivery:</span> Aug 2013</p>
                                <p class="rs fw-thin fc-gray pb20">Ships within the US only</p>
                                <p class="rs ta-c"><a class="btn big btn-red" href="#">Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class=" pledge-label accordion-label clearfix">
                            <i class="icon iPlugGray"></i>
                            <span class="pledge-amount">Pledge $130 or more</span>
                            <span class="count-val">(23 of 47)</span>
                        </div>
                        <div class=" pledge-content accordion-content">
                            <div class="pledge-detail">
                                <p class="rs pledge-description">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class="rs fw-b pb20">Ocupated (2 of 10)</p>
                                <p class="rs"><span class="fw-b">Estimated delivery:</span> Aug 2013</p>
                                <p class="rs fw-thin fc-gray pb20">Ships within the US only</p>
                                <p class="rs ta-c"><a class="btn big btn-red" href="#">Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                    <li>
                        <div class=" pledge-label accordion-label clearfix">
                            <i class="icon iPlugGray"></i>
                            <span class="pledge-amount">Pledge $110 or more</span>
                            <span class="count-val">(23 of 39)</span>
                        </div>
                        <div class=" pledge-content accordion-content">
                            <div class="pledge-detail">
                                <p class="rs pledge-description">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class="rs fw-b pb20">Ocupated (2 of 10)</p>
                                <p class="rs"><span class="fw-b">Estimated delivery:</span> Aug 2013</p>
                                <p class="rs fw-thin fc-gray pb20">Ships within the US only</p>
                                <p class="rs ta-c"><a class="btn big btn-red" href="#">Buck this project</a></p>
                            </div>
                        </div>
                    </li><!--end: pledge-item -->
                </ul>
            </div><!--end: .wrap-nav-pledge -->
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
</div>
</body>
</html>
@endsection