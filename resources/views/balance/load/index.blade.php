@extends('head.main')
@section('contend')
  <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                 <div>
                            <h3 class="rs alternate-tab accordion-label">Load balance</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="form form-profile">
                                    <form action="{{route('balance.load.store')}}" method="POST">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="title_project">US$:</label>
                                            <div class="val">
                                                <input class="txt" type="text" id="balance" name='balance' value="">  
                                            </div>
                                        </div>
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red btn-submit-all">ok</button>
                                        </p>
                                    </form>
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
            </div>
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>
@endsection