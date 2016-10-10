<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="icon" type="image/png" href="{{asset('frontend/images/splash/android-chrome-192x192.png')}}"
          sizes="192x192">
    <link rel="apple-touch-icon" sizes="196x196"
          href="{{asset('frontend/images/splash/apple-touch-icon-196x196.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset('frontend/images/splash/apple-touch-icon-180x180.png')}}">
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{asset('frontend/images/splash/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{asset('frontend/images/splash/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{asset('frontend/images/splash/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('frontend/images/splash/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/images/splash/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/splash/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('frontend/images/splash/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('frontend/images/splash/apple-touch-icon-57x57.png')}}">
    <link rel="icon" type="image/png" href="{{asset('frontend/images/splash/favicon-96x96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{asset('frontend/images/splash/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('frontend/images/splash/favicon-16x16.png')}}" sizes="16x16">
    <link rel="shortcut icon" href="{{asset('frontend/images/splash/favicon.ico')}}" type="image/x-icon"/>

    <title>Epsilon 4.0</title>

    <link href="{{asset('frontend/styles/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/styles/framework.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/styles/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/styles/animate.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="dual-sidebar">

<div id="preloader">
    <div id="status">
        <div class="preloader-logo"></div>
        <h3 class="center-text">Welcome</h3>
        <p class="center-text smaller-text">
            We're loading the content, give us a second. This won't take long!
        </p>
    </div>
</div>

<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->

<div id="header-fixed">
    <a class="open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>
    <a class="header-logo" href="/"></a>
    <a class="open-right-sidebar" href="#"><i class="fa fa-envelope-o"></i></a>
</div>

<!-- Ball Footer Menu -->


<div class="all-elements">
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">
            <div class="sidebar-header">
                <div class="sidebar-header-logo">
                    <a href="/"></a>
                </div>
                <div class="sidebar-header-icons">
                    <a href="https://www.facebook.com/laboratory.furnace"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/kejiafurnace1"><i class="fa fa-twitter"></i></a>
                    <a href="tel:+8617737149370"><i class="fa fa-phone"></i></a>
                    <a href="sms:+8617737149370"><i class="fa fa-comments-o"></i></a>
                    <a href="#" class="close-sidebar"><i class="fa fa-times"></i></a>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="sidebar-menu half-bottom">
                <div class="sidebar-divider">
                    Navigation
                </div>

                <a class="menu-item" href="/">
                    <i class="bg-red-light fa fa-home"></i>
                    <em>Home</em>
                    <i class="fa fa-circle"></i>
                </a>

                <div class="has-submenu">
                    <a class="menu-item show-submenu submenu-active" href="/products">
                        <i class="bg-red-dark fa fa-list"></i>
                        <em>Products</em>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <div class="submenu submenu-active">
                        <a class="submenu-item" href="/product"> <i class="fa fa-angle-right"></i><em>Product detail</em><i class="fa fa-circle"></i></a>

                        @foreach($categories as $category)
                            <a class="submenu-item" href="/category/{{$category->id}}"> <i class="fa fa-angle-right"></i><em>{{$category->name}}</em><i class="fa fa-circle"></i></a>
                        @endforeach

                    </div>
                </div>

                <a class="menu-item" href="/about">
                    <i class="bg-green-dark fa fa-file-o"></i>
                    <em>About Us</em>
                    <i class="fa fa-circle"></i>
                </a>

                <a class="menu-item" href="/news">
                    <i class="bg-blue-dark fa fa-pencil"></i>
                    <em>News</em>
                    <i class="fa fa-circle"></i>
                </a>

                <a class="menu-item" href="/contact">
                    <i class="bg-night-dark fa fa-envelope-o"></i>
                    <em>Contact</em>
                    <i class="fa fa-circle"></i>
                </a>
                <a class="menu-item close-sidebar" href="#">
                    <i class="bg-red-dark fa fa-times"></i>
                    <em>Close</em>
                    <i class="fa fa-circle"></i>
                </a>
            </div>

            <div class="sidebar-divider">
                Get social with us
            </div>

            <div class="sidebar-menu half-bottom">
                <a class="menu-item" href="https://www.facebook.com/laboratory.furnace">
                    <i class="facebook-color fa fa-facebook"></i>
                    <em>Facebook</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="https://twitter.com/kejiafurnace1">
                    <i class="twitter-color fa fa-twitter"></i>
                    <em>Twitter</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="https://plus.google.com/u/0/111313825639484954555">
                    <i class="google-color fa fa-google-plus"></i>
                    <em>Google Plus</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="https://www.youtube.com/playlist?list=PLmqvV5aBarUxjvnVrqZ9-MO1XhNI7YILh">
                    <i class="youtube-color fa fa-youtube-play"></i>
                    <em>YouTube</em>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>

            <div class="sidebar-divider">
                Get in touch with us
            </div>

            <div class="sidebar-menu">
                <a class="menu-item" href="tel:+8617737149370">
                    <i class="bg-green-dark fa fa-phone"></i>
                    <em>Call Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="sms:+8617737149370">
                    <i class="bg-blue-dark fa fa-comment-o"></i>
                    <em>Text Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="mailto:info@furnace-tech.com?subject=Message from Kejia Website">
                    <i class="bg-magenta-dark fa fa-envelope-o"></i>
                    <em>Mail Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item close-sidebar" href="#">
                    <i class="bg-red-dark fa fa-times"></i>
                    <em>Close</em>
                    <i class="fa fa-circle"></i>
                </a>
            </div>
            <p class="sidebar-footer">Copyright 2017. All rights reserved</p>
        </div>

        <!--Right Sidebar -->

        <div class="snap-drawer snap-drawer-right">
            <div class="sidebar-header">
                <div class="sidebar-header-logo">
                    <a href="/"></a>
                </div>
                <div class="sidebar-header-icons">
                    <a href="https://www.facebook.com/laboratory.furnace"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/kejiafurnace1"><i class="fa fa-twitter"></i></a>
                    <a href="tel:+8617737149370"><i class="fa fa-phone"></i></a>
                    <a href="sms:+8617737149370"><i class="fa fa-comments-o"></i></a>
                    <a href="#" class="close-sidebar"><i class="fa fa-times"></i></a>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="sidebar-divider">
                Send us a message
            </div>

            <div class="container no-bottom">
                <div class="sidebar-form contact-form no-bottom">

                    <em>
                        Your message is important to us and we reply to all of them asap.
                    </em>

                    <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                        Awesome! We'll get back to you!
                    </div>

                    <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                        <fieldset>
                            <div class="formValidationError" id="contactNameFieldError">Name is required!</div>
                            <div class="formValidationError" id="contactEmailFieldError">Mail address required!</div>
                            <div class="formValidationError" id="contactEmailFieldError2">Mail address must be valid!
                            </div>
                            <div class="formValidationError" id="contactMessageTextareaError">Message field is empty!
                            </div>
                            <div class="formFieldWrap">
                                <input onfocus="if (this.value=='Name') this.value = ''"
                                       onblur="if (this.value=='') this.value = 'Name'" type="text"
                                       name="contactNameField" value="Name" class="contactField requiredField"
                                       id="contactNameField"/>
                            </div>
                            <div class="formFieldWrap">
                                <input onfocus="if (this.value=='Email') this.value = ''"
                                       onblur="if (this.value=='') this.value = 'Email'" type="text"
                                       name="contactEmailField" value="Email"
                                       class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                            </div>
                            <div class="formTextareaWrap">
                                <textarea onfocus="if (this.value=='Message') this.value = ''"
                                          onblur="if (this.value=='') this.value = 'Message'"
                                          name="contactMessageTextarea" class="contactTextarea requiredField"
                                          id="contactMessageTextarea">Message</textarea>
                            </div>
                            <div class="formSubmitButtonErrorsWrap">
                                <input type="submit" class="buttonWrap button button-green contactSubmitButton"
                                       id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="sidebar-divider">
                get in touch with us
            </div>

            <div class="sidebar-menu">
                <a class="menu-item" href="https://www.facebook.com/laboratory.furnace">
                    <i class="facebook-color fa fa-facebook"></i>
                    <em>Facebook</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item" href="mailto:info@furnace-tech.com">
                    <i class="bg-magenta-dark fa fa-envelope-o"></i>
                    <em>Mail Us</em>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a class="menu-item close-sidebar" href="#">
                    <i class="bg-red-dark fa fa-times"></i>
                    <em>Close</em>
                    <i class="fa fa-angle-circle"></i>
                </a>
            </div>
            <p class="sidebar-footer">Copyright 2017. All rights reserved</p>
        </div>

        <div id="content" class="snap-content">
            <div class="content">
                <div class="header-clear-large"></div>
                <!--Page content goes here, fixed elements go above the all elements class-->

                @yield('content')

                <div class="decoration"></div>
                <div class="footer">
                    <p class="center-text">Copyright 2017. All rights reserved.</p>
                    <div class="footer-icons">
                        <a href="https://www.facebook.com/laboratory.furnace" class="scale-hover facebook-color social-ball"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/kejiafurnace1" class="scale-hover twitter-color social-ball"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/u/0/111313825639484954555" class="scale-hover google-color social-ball"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="scale-hover back-to-top bg-green-dark social-ball"><i
                                    class="fa fa-angle-up"></i></a>
                        <a href="#" class="scale-hover show-share-bottom bg-magenta-dark social-ball"><i
                                    class="fa fa-retweet"></i></a>
                    </div>
                </div>

                <!-- End of entire page content-->
            </div>
        </div>
    </div>
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Back to top</a>
</div>

<!--Fly up share box and notifications go here -->
<!--These are the only features that should be placed outside the all-elements class-->
<div class="share-bottom">
    <h3>Let's get social!</h3>
    <div class="share-socials-bottom">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}">
            <i class="fa fa-facebook facebook-color"></i>
            Facebook
        </a>
        <a href="https://twitter.com/home?status=Check%20out%20Lab Furnace on%20{{url('/')}}">
            <i class="fa fa-twitter twitter-color"></i>
            Twitter
        </a>
        <a href="https://plus.google.com/share?url={{url('/')}}">
            <i class="fa fa-google-plus google-color"></i>
            Google
        </a>

        <a href="https://pinterest.com/pin/create/button/?{{url('/')}}/&media={{url('/frontend/images/logo-dark.png')}}&description=Kejia Lab Furnace">
            <i class="fa fa-pinterest-p pinterest-color"></i>
            Pinterest
        </a>
        <a href="sms:+8617737149370">
            <i class="fa fa-comment-o sms-color"></i>
            Text
        </a>
        <a href="mailto:info@furnace-tech.com">
            <i class="fa fa-envelope-o mail-color"></i>
            Email
        </a>
        <div class="clear"></div>
    </div>
    <a href="#" class="close-share-bottom">Close</a>
</div>

<div class="top-notification-1 top-notification bg-blue-dark">
    <h4>Did you know?</h4>
    <p>
        Easy way to make sure your messages get read!
    </p>
    <a href="#" class="close-top-notification"><i class="fa fa-times"></i></a>
</div>
<div class="bottom-notification-1 bottom-notification bg-green-dark">
    <h4>Did you know?</h4>
    <p>
        Easy way to make sure your messages get read!
    </p>
    <a href="#" class="close-bottom-notification"><i class="fa fa-times"></i></a>
</div>
<div class="bottom-notification-2 bottom-notification bg-orange-dark timeout-notification">
    <h4>Timeout: 5 Seconds</h4>
    <p>
        I'll go away on my own after a few seconds!
    </p>
</div>
<div class="top-notification-2 top-notification bg-red-dark timeout-notification">
    <h4>Timeout: 5 Seconds</h4>
    <p>
        I'll go away on my own after a few seconds!
    </p>
</div>

<script type="text/javascript" src="{{asset('frontend/scripts/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/jqueryui.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/framework-plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/custom.js')}}"></script>
</body>