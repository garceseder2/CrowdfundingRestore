@extends('head.main')
@section('contend')
<div class="" id="">
     
    <div class="overlay-bl-bg"></div>
    <div class="container_12 pop-content">
      
        <div class="grid_8 prefix_1">
            <div class="form login-form">
                <form method="POST" action="{{route('user.store')}}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <h3 class="rs title-form">Register</h3>
                    <div class="box-white">
                        <h4 class="rs title-box">New to Kickstars?</h4>
                        <p class="rs">A Kickstars account is required to continue.</p>
                       
                        <div class="form-action">
                            <div class="wrap-2col clearfix">
                                <div class="col">
                                    <label for="name">
                                <input id="name" name="name" class="txt fill-width" type="text" placeholder="Enter name"/>
                            </label>

                                </div>
                                <div class="col">
                                    <label for="lastname">
                                <input id="lastname" name="lastname" class="txt fill-width" type="text" placeholder="Enter lastname"/>
                            </label>
                                   
                                </div>
                            </div>
                            <div class="wrap-2col clearfix">
                                <div class="col">
                                    <label for="email">
                                        <input id="email" name="email" class="txt fill-width" type="email" placeholder="Enter your e-mail address"/>
                                    </label>
                                    <label for="re_email">
                                        <input id="re_email" name='re_email' class="txt fill-width" type="email" placeholder="Re-enter your e-mail adress"/>
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="re_password">
                                        <input id="password" name="password" class="txt fill-width" type="password" placeholder="Enter password"/>
                                    </label>
                                    <label for="re_password">
                                        <input id="re_password" name='re_password' class="txt fill-width" type="password" placeholder="Re-enter password"/>
                                    </label>
                                </div>
                            </div>
                            <p class="rs pb10">By signing up, you agree to our <a href="#" class="fc-orange">terms of use</a> and <a href="#" class="fc-orange">privacy policy</a>.</p>
                            <p class="rs ta-c">
                                <button class="btn btn-red btn-submit" type="submit">Register</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="clear"></div>
    </div>
</div>
@endsection