<!DOCTYPE html>
<html>
<head>
    <title>Single dropdown search | Kickstars</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/jquery.sidr.light.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="css/ie7.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->
    <link rel="stylesheet" href="css/responsive.css"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.sidr.min.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<div id="wrapper">
<header id="header">
        <div class="wrap-top-menu">
            <div class="container_12 clearfix">
                <div class="grid_12">
                    <nav class="top-menu">
                        <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="sep"></li>
                            <li><a href="all-pages.html">All Pages</a></li>
                            <li class="sep"></li>
                            <li><a href="how-it-work.html">Help</a></li>
                            <li class="sep"></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <a id="btn-toogle-menu" class="btn-toogle-menu" href="#alternate-menu">
                            <span class="line-bar"></span>
                            <span class="line-bar"></span>
                            <span class="line-bar"></span>
                        </a>
                        <div id="right-menu">
                            <ul class="alternate-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="all-pages.html">All Pages</a></li>
                                <li><a href="how-it-work.html">Help</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="top-message clearfix">
                        <i class="icon iFolder"></i>
                        <span class="txt-message">Nulla egestas nulla ac diam ultricies id viverra nisi adipiscing.</span>
                        <i class="icon iX"></i>
                        <div class="clear"></div>
                    </div>
                    <i id="sys_btn_toggle_search" class="icon iBtnRed make-right"></i>
                </div>
            </div>
        </div><!-- end: .wrap-top-menu -->
        <div class="container_12 clearfix">
            <div class="grid_12 header-content">
                <div id="sys_header_right" class="header-right">
                    <div class="account-panel">
                        <a href="#" class="btn btn-red sys_show_popup_login">Register</a>
                        <a href="#" class="btn btn-black sys_show_popup_login">Login</a>
                    </div>
                    <div class="form-search">
                        <form action="#">
                            <label for="sys_txt_keyword">
                                <input id="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Search projects"/>
                            </label>
                            <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>
                            <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>
                        </form>
                    </div>
                </div>
                <div class="header-left">
                    <h1 id="logo">
                        <a href="index.html"><img src="images/logo.png" alt="$SITE_NAME"/></a>
                    </h1>
                    <div class="main-nav clearfix">
                        <div class="nav-item">
                            <a href="#" class="nav-title">Discover</a>
                            <p class="rs nav-description">Great Projects</p>
                        </div>
                        <span class="sep"></span>
                        <div class="nav-item">
                            <a href="#" class="nav-title">Start</a>
                            <p class="rs nav-description">Your Project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown-search-result">
            <div class="container_12">
                <div class="grid_12 wrap-title-result">
                    <div class="title-result">Projects in <a href="#" class="fc-white">London, United Kingdom</a></div>
                    <i class="icon iBigX"></i>
                    <i class="iPickUp"></i>
                </div>
                <div class="clear"></div>
                <div class="list-project-result">
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
                                        <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Pellentesque placerat elementum adipiscing.</p>
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
                            </div>
                        </div>
                    </div><!--end: .grid_3 > .project-short-->
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
                                        <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Pellentesque placerat elementum adipiscing.</p>
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
                            </div>
                        </div>
                    </div><!--end: .grid_3 > .project-short-->
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
                                        <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Pellentesque placerat elementum adipiscing.</p>
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
                            </div>
                        </div>
                    </div><!--end: .grid_3 > .project-short-->
                    <div class="grid_3">
                        <div class="project-short sml-thumb">
                            <div class="top-project-info">
                                <div class="content-info-short clearfix">
                                    <a href="#" class="thumb-img">
                                        <img src="images/ex/th-192x135-3.jpg" alt="$TITLE">
                                    </a>
                                    <div class="wrap-short-detail">
                                        <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>
                                        <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                        <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Pellentesque placerat elementum adipiscing.</p>
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
                                        <span class="val">$138,662</span>
                                    </div>
                                    <div class="sep"></div>
                                    <div class="fee-item">
                                        <p class="rs lbl">Days Left</p>
                                        <span class="val">44</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .grid_3 > .project-short-->
                </div>
                <div class="grid_12">
                    <div class="confirm-result">
                        Were you looking for projects in <a href="#" class="fc-white">London, KY</a>, in <a href="#" class="fc-white">London, Canada</a>, or matching the word "<a href="#" class="fc-white">london</a>"?
                        <a href="#" class="view-all">View all</a>
                        <span class="clear"></span>
                    </div>
                </div>
            </div>
        </div>
    </header><!--end: #header -->

    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="single-page">
                <h2 class="rs single-title">Ineteresting article</h2>
                <p class="rs post-by">by <a href="#">Jonh Doe</a></p>
                <div class="box-single-content">
                    <div class="editor-content">
                        <p>
                            <img class="img-desc" src="images/ex/th-552x152-1.jpg" alt="$DESCRIPTION">
                        </p>
                        <p>Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. <span class="fc-orange">Pellentesque placerat elementum adipiscing.</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                        <p>Etiam quis libero odio. Donec laoreet diam sed arcu vehicula consequat. Proin faucibus pretium consequat. <span class="fw-b fc-black">Aliquam vulputate aliquet nisl</span>, a sagittis ipsum ultrices a. Nunc risus tellus, vulputate eget lobortis eget, facilisis et tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                        <!-- AddThis Button BEGIN -->
                        <div class="social-sharing">
                            <div class="addthis_toolbox addthis_default_style">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                            <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                        </div><!-- AddThis Button END -->
                    </div>
                </div>
            </div>
        </div><!--end: .content -->
        <div class="sidebar grid_4">
            <div class="box-gray">
                <h3 class="title-box">Sections</h3>
                <p class="rs description pb20">Pellentesque laoreet sapien id lacus luctus non fringilla elit lobortis. Fusce augue diam, tempor posuere pharetra sed, feugiat non sapien.</p>
                <ul class="rs nav nav-category">
                    <li>
                        <a href="#">
                            About
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            How It Works
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Membership
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Success Stories
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Press
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Games
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Stats
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-gray">
                <h3 class="title-box">Text Widget</h3>
                <p class="rs description pb20">Nam sollicitudin malesuada dapibus. Suspendisse mollis pellentesque eros. Aenean congue tempor neque, vel malesuada augue auctor in. In aliquam faucibus interdum.</p>
                <a class="btn bigger fill-width btn-white" href="#">Large download button</a>
                <a class="btn bigger fill-width btn-blue" href="#">Large download button</a>

            </div>
        </div><!--end: .sidebar -->
        <div class="clear"></div>
    </div>

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
    <footer id="footer">
        <div class="container_12 main-footer">
            <div class="grid_3 about-us">
                <h3 class="rs title">About</h3>
                <p class="rs description">Donec rutrum elit ac arcu bibendum rhoncus in vitae turpis. Quisque fermentum gravida eros non faucibus. Curabitur fermentum, arcu sed cursus commodo.</p>
                <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@megadrupal.com">info@megadrupal.com</a></p>
                <p class="rs">+1 (555) 555 - 55 - 55</p>
            </div><!--end: .contact-info -->
            <div class="grid_3 recent-tweets">
                <h3 class="rs title">Recent Tweets</h3>
                <div class="lst-tweets" id="sys_lst_tweets">
                    
                </div>
            </div><!--end: .recent-tweets -->
            <div class="clear clear-2col"></div>
            <div class="grid_3 email-newsletter">
                <h3 class="rs title">Newsletter Signup</h3>
                <div class="inner">
                    <p class="rs description">Nam aliquet, velit quis consequat interdum, odio dolor elementum.</p>
                    <form action="#">
                        <div class="form form-email">
                            <label class="lbl" for="txt-email">
                                <input id="txt-email" type="text" class="txt fill-width" placeholder="Enter your e-mail address"/>
                            </label>
                            <button class="btn btn-green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div><!--end: .email-newsletter -->
            <div class="grid_3">
                <h3 class="rs title">Discover &amp; Create</h3>
                <div class="footer-menu">
                    <ul class="rs">
                        <li><a class="be-fc-orange" href="#">What is Kickstars</a></li>
                        <li><a class="be-fc-orange" href="#">Start a project</a></li>
                        <li><a class="be-fc-orange" href="#">Project Guidlines</a></li>
                        <li><a class="be-fc-orange" href="#">Press</a></li>
                        <li><a class="be-fc-orange" href="#">Stats</a></li>
                    </ul>
                    <ul class="rs">
                        <li><a class="be-fc-orange" href="#">Staff Picks</a></li>
                        <li><a class="be-fc-orange" href="#">Popular</a></li>
                        <li><a class="be-fc-orange" href="#">Recent</a></li>
                        <li><a class="be-fc-orange" href="#">Small Projects</a></li>
                        <li><a class="be-fc-orange" href="#">Most Funded</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="copyright">
            <div class="container_12">
                <div class="grid_12">
                    <a class="logo-footer" href="index.html"><img src="images/logo-2.png" alt="$SITE_NAME"/></a>
                    <p class="rs term-privacy">
                        <a class="fw-b be-fc-orange" href="single.html">Terms & Conditions</a>
                        <span class="sep">/</span>
                        <a class="fw-b be-fc-orange" href="single.html">Privacy Policy</a>
                        <span class="sep">/</span>
                        <a class="fw-b be-fc-orange" href="#">FAQ</a>
                    </p>
                    <p class="rs ta-c fc-gray-dark site-copyright">HTML by <a href="http://megadrupal.com" title="Drupal Developers" target="_blank">MegaDrupal</a>. Designed by <a href="http://bestwebsoft.com/" title="Web development company" target="_blank">BestWebSoft</a>.</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </footer><!--end: #footer -->

</div>

<div class="popup-common" id="sys_popup_common">
    <div class="overlay-bl-bg"></div>
    <div class="container_12 pop-content">
        <div class="grid_12 wrap-btn-close ta-r">
            <i class="icon iBigX closePopup"></i>
        </div>
        <div class="grid_6 prefix_1">
            <div class="form login-form">
                <form action="#">
                    <h3 class="rs title-form">Register</h3>
                    <div class="box-white">
                        <h4 class="rs title-box">New to Kickstars?</h4>
                        <p class="rs">A Kickstars account is required to continue.</p>
                        <div class="form-action">
                            <label for="txt_name">
                                <input id="txt_name" class="txt fill-width" type="text" placeholder="Enter full name"/>
                            </label>
                            <div class="wrap-2col clearfix">
                                <div class="col">
                                    <label for="txt_email">
                                        <input id="txt_email" class="txt fill-width" type="email" placeholder="Enter your e-mail address"/>
                                    </label>
                                    <label for="txt_re_email">
                                        <input id="txt_re_email" class="txt fill-width" type="email" placeholder="Re-enter your e-mail adress"/>
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="txt_password">
                                        <input id="txt_password" class="txt fill-width" type="password" placeholder="Enter password"/>
                                    </label>
                                    <label for="txt_re_password">
                                        <input id="txt_re_password" class="txt fill-width" type="password" placeholder="Re-enter password"/>
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
        <div class="grid_4">
            <div class="form login-form">
                <form action="#">
                    <h3 class="rs title-form">Login</h3>
                    <div class="box-white">
                        <h4 class="rs title-box">Already Have an Account?</h4>
                        <p class="rs">Please log in to continue.</p>
                        <div class="form-action">
                            <label for="txt_email_login">
                                <input id="txt_email_login" class="txt fill-width" type="email" placeholder="Enter your e-mail address"/>
                            </label>
                            <label for="txt_password_login">
                                <input id="txt_password_login" class="txt fill-width" type="password" placeholder="Enter password"/>
                            </label>

                            <label for="chk_remember" class="rs pb20 clearfix">
                                <input id="chk_remember" type="checkbox" class="chk-remember"/>
                                <span class="lbl-remember">Remember me</span>
                            </label>
                            <p class="rs ta-c pb10">
                                <button class="btn btn-red btn-submit" type="submit">Login</button>
                            </p>
                            <p class="rs ta-c">
                                <a href="#" class="fc-orange">I forgot my password</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
</body>
</html>