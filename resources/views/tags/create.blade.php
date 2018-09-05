@extends('head.main')
@section('contend')
<div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                 <div>
                            <h3 class="rs alternate-tab accordion-label">New Tag</h3>
                            <div class="tab-pane accordion-content active">
                                <div class="form form-profile">
                                    <form action="{{route('tags.store')}}" method="POST">
                                         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <div class="row-item clearfix">
                                            <label class="lbl" for="title_project">Tag:</label>
                                            <div class="val">
                                                <input class="txt" type="text" id="label" name='label' value="">
                                                
                                            </div>
                                        </div>
                                        <p class="wrap-btn-submit rs ta-r">
                                            <button class="btn btn-red btn-submit-all">Save all</button>
                                        </p>
                                    </form>
                                </div>
                            </div><!--end: .tab-pane -->
                        </div>
            </div>
        </div><!--end: .content -->
  
        <div class="clear"></div>
    </div>
@endsection