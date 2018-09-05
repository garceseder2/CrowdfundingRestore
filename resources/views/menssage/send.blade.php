@extends('head.main')
   @section('contend') 
<div class="content grid_8">
            <div class="single-page">
                <div class="wrapper-box box-post-comment">
                    <h2 class="common-title">Contact Us</h2>
                    
                
                    
                    <div class="box-white">
                         @foreach($msjs as $msj)
                            @if((Auth::user()->id == $msj->user_id) or (Auth::user()->id == $msj->to_id))
                        
                                @if (Auth::user()->id == $msj->user_id)
                        
          <div>
            <div><p class="rs tiny-desc"><a href="{{route('user.show', $msj->user->id)}}" class="fw-b fc-gray be-fc-orange">{{ $msj->user->name }} {{ $msj->user->lastname }}: </a></p>{{ $msj->message }}</div>
          </div>
                                @else
                        
                        <div>
            <div><p class="rs tiny-desc"><a href="{{route('user.show', $msj->user->id)}}" class="fw-b fc-gray be-fc-orange">{{ $msj->user->name }} {{ $msj->user->lastname }}: </a></p>{{ $msj->message }}
                            </div>
          </div>
                        
                            @endif
                        @endif
                @endforeach
                        <form id="contact-form" class="clearfix" action="{{route('send.message', $us->id)}}" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="form form-post-comment">
                                <div class="right-input">
                                    <label for="txt_content_contact">
                                        <textarea name="message" id="txt_content_contact" cols="30" rows="10" class="txt fill-width" placeholder="Your message"></textarea>
                                    </label>
                                </div>
                                <div class="clear"></div>
                                <p class="rs ta-r clearfix">
									<span id="response"></span>
                                   
                                   <input type="submit" class="btn btn-white btn-submit-comment" value="Send">
                               </p>
                            </div>
                        </form>
                    </div>
                    
                   
                    
                </div><!--end: .box-list-comment -->
            </div>
        </div><!--end: .content -->
@endsection 