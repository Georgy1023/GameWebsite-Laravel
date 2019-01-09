<!-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</div> -->
<!DOCTYPE html>
<!--
    Name: GoodGames - Game Portal / Store HTML Template
    Version: 1.4.1
    Author: nK
    Website: https://nkdev.info/
    Purchase: https://themeforest.net/item/goodgames-portal-store-html-gaming-template/17704593?ref=_nK
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2018.
-->
    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>VG || TS2</title>

    <meta name="description" content="Welcome to our game, vsky2">
    <meta name="keywords" content="game, vsky2, vortex, vortex-gaming, rpg, rpggame">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="{{URL::to('/assets')}}/images/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::to('/assets')}}/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="{{URL::to('/assets')}}/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="{{URL::to('/assets')}}/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{URL::to('/assets')}}/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{URL::to('/assets')}}/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/assets')}}/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/assets')}}/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{URL::to('/assets')}}/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/assets')}}/vendor/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{{URL::to('/assets')}}/css/goodgames.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{URL::to('/assets')}}/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{URL::to('/assets')}}/vendor/jquery/dist/jquery.min.js"></script>
    <style>

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .termsprivacy li {
        float:left;
        padding-left:30px;
    }

    .termsprivacy {
        padding-top:25px;
        padding-left:200px;
        list-style-type: none;
    }

    .termsprivacy li a {
        color:white;
    }
    #check_terms_policy li{
        float:left;
    }
    #check_terms_policy{
        list-style-type: none;
    }
    #termsPrivacy{
        -webkit-transform: scale(2); /* Safari and Chrome */
    }
    </style>
    @stack('header-style')
    
</head>
<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
    
            



    <!--
        Additional Classes:
            .nk-header-opaque
    -->
    <header class="nk-header nk-header-opaque">

        
        
    <!-- START: Top Contacts -->
    <div id="paymentStatus" style="position: fixed;top: 1em;right: 1em; width:20%; margin-top:-25px;">
         @if ($message = Session::get('success'))
            <div class="w3-panel w3-green w3-display-container" style="margin-top:10px;">
                <span style="margin-top: -5px;" onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                <p style="padding-top: 5px;" style="margin-top:-5px;">{!! $message !!}</p>
            </div>
            <?php Session::forget('success');?>
        @endif
      

         @if ($message = Session::get('success'))
            <div class="w3-panel w3-green w3-display-container" style="margin-top:10px;">
                <span style="margin-top: -5px;" onclick="this.parentElement.style.display='none'"
                        class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                <p style="padding-top: 5px;" style="margin-top:-5px;">{!! $message !!}</p>
            </div>
            <?php Session::forget('error');?>
        @endif
    </div>
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-left">
                <ul class="nk-social-links">
                    <li><a class="nk-social-instagram" href="https://www.instagram.com/vortexgaming.vsky2/"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-twitter" href="https://twitter.com/VortexG85623108" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a class="nk-social-facebook" href="https://www.facebook.com/V-Sky-2-340975886472544/"><span class="fab fa-facebook"></span></a></li>


                    <!-- Additional Social Buttons
                        <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                        <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                        <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                        <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                        <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                        <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                        <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                        <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                        <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                        <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                        <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                        <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                        <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                        <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                        <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                        <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                        <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                        <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                    -->
                </ul>
            </div>
            <div class="nk-contacts-right">
                <ul class="nk-contacts-icons">
                    
                    <!-- <li>
                        <a href="#" data-toggle="modal" data-target="#modalSearch">
                            <span class="fa fa-search"></span>
                        </a>
                    </li> -->

                    <li>
                        <div class="flex-center position-ref full-height">
                            @if (Route::has('login'))
                               
                                <div class="top-right links">

                                    @auth
       
                                        @if(Auth::user()->email_verified_at==NULL)
                                        
                                        <div class="container align-middle">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="card bg-dark" style="color:white;">
                                                        <!-- <div class="card-header" style="border-bottom: 1px solid rgba(255,255,255,.125);">{{ __('Verify Your Email Address') }}</div> -->

                                                        <div class="card-body">
                                                            @if (session('resent'))
                                                                <div class="alert alert-success" style="    background-color: rgb(255,255,255);" role="alert">
                                                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                                                </div>
                                                            @endif

                                                            {{ __('Before proceeding, please check your email for a verification link.') }}
                                                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                
                                         @endif
                                           @if(Auth::user()->email_verified_at!=NULL)
                                        <a>
                                            Welcome {{ Auth::user()->name }} | Your GameID: {{Auth::user()->gameid}}<span class="caret"></span>
                                        </a>
                                        @endif
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                Signout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>


                                </div>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                Sign Out
                        <span class="fa fa-sign-out"></span>
                        </a>
                    </li>
                    <!--@if(Auth::user()->email_verified_at!=NULL)-->
                    <!--<li style="margin-right:80px;"> -->
                    <!--    <a href="#" data-toggle="modal" data-target="#modalPayfornations">-->
                    <!--        Donations-->
                    <!--        <span class="fa fa-usd"></span>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <!--@endif-->
                    @else
                    <li style="margin-right:80px;"> 
                        <a href="#" data-toggle="modal" data-target="#modalSignin">
                            <span class="fa fa-sign-in"></span>
                            Sign In
                        </a>
                    </li>
                    <li style="margin-right:80px;"> 
                        <a href="#" data-toggle="modal" data-target="#modalSignup">
                            <span class="fa fa-plus"></span>
                            Sign Up
                        </a>
                    </li>
                    

                    @endauth
                    @endif
                    
                    
                    <!-- <li>
                        <span class="nk-cart-toggle">
                            <span class="fa fa-shopping-cart"></span>
                            <span class="nk-badge">27</span>
                        </span>
                        <div class="nk-cart-dropdown">
                            
                            <div class="nk-widget-post">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="{{URL::to('/assets')}}/images/product-5-xs.jpg" alt="In all revolutions of">
                                </a>
                                <h3 class="nk-post-title">
                                    <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                    <a href="store-product.html">In all revolutions of</a>
                                </h3>
                                <div class="nk-gap-1"></div>
                                <div class="nk-product-price">€ 23.00</div>
                            </div>
                            
                            <div class="nk-widget-post">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="{{URL::to('/assets')}}/images/product-7-xs.jpg" alt="With what mingled joy">
                                </a>
                                <h3 class="nk-post-title">
                                    <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                    <a href="store-product.html">With what mingled joy</a>
                                </h3>
                                <div class="nk-gap-1"></div>
                                <div class="nk-product-price">€ 14.00</div>
                            </div>
                            
                            <div class="nk-gap-2"></div>
                            <div class="text-center">
                                <a href="store-checkout.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Proceed to Checkout</a>
                            </div>
                        </div>
                    </li> -->
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Top Contacts -->

        

        <!--
            START: Navbar

            Additional Classes:
                .nk-navbar-sticky
                .nk-navbar-transparent
                .nk-navbar-autohide
        -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">
                    
                    <a href="{{URL::to('/')}}" class="nk-nav-logo">
                        <img src="{{URL::to('/assets')}}/images/logo.png" alt="VG ||TS2">
                    </a>
                    
                    <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                        
            <li class=" nk-drop-item">
                <a href="{{URL::to('/')}}">
                    Home
                    
                </a>
                <!-- <ul class="dropdown"> -->
                            
            <!-- <li>
                <a href="elements.html">
                    Elements (Shortcodes)
                    
                </a>
            </li>
            <li class=" nk-drop-item">
                <a href="forum.html">
                    Forum
                    
                </a><ul class="dropdown">
                            
            <li>
                <a href="forum.html">
                    Forum
                    
                </a>
            </li>
            <li>
                <a href="forum-topics.html">
                    Topics
                    
                </a>
            </li>
            <li>
                <a href="forum-single-topic.html">
                    Single Topic
                    
                </a>
            </li>
                        </ul>
            </li>
            <li>
                <a href="widgets.html">
                    Widgets
                    
                </a>
            </li>
            <li>
                <a href="coming-soon.html">
                    Coming Soon
                    
                </a>
            </li>
            <li>
                <a href="offline.html">
                    Offline
                    
                </a>
            </li>
            <li>
                <a href="404.html">
                    404
                    
                </a>
            </li> -->
                        <!-- </ul> -->
            </li>
            <li class=" nk-drop-item">
                <a href="https://forum.vortex-gaming.net">
                    Forum
                </a>
            </li>
            
            <li class=" nk-drop-item">
                <a href="{{URL::to('/download_guide')}}">
                    Downloads
                </a>
            </li>
            <li class=" nk-drop-item">
                <a href="https://support.vortex-gaming.net/">
                    Support
                </a>
            </li>
            <!--<li class=" nk-drop-item">-->
            <!--    <a href="http://support.vortex-gaming.net">-->
            <!--        Support-->
                    
            <!--    </a><ul class="dropdown">-->
            <!--    </ul>-->
            <!--</li>-->
                    </ul>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        
                            <li class="single-icon d-lg-none">
                                <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                    <span class="nk-icon-burger">
                                        <span class="nk-t-1"></span>
                                        <span class="nk-t-2"></span>
                                        <span class="nk-t-3"></span>
                                    </span>
                                </a>
                            </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>
    
@yield('content')
<!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalPayfornations" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0"><span class="text-main-1">Donate</span> us</h4>
                <div class="nk-gap-1"></div>
                <br/>
               
                <form class="nk-form text-white"  method="POST" action="{{URL::to('paypal')}}">
                    @csrf
                    <div class="row vertical-gap" style="padding-left:15px; padding-bottom:30px;">
                        <p>Donate us and get rewarded with ingame credits!</p>
                    </div>
                    <div class="form-group row" method="POST" id="payment-form"  action="{{URL::to('paypal')}}">
                        <div class="row" style="padding-left:15px">
                            
                            <div class="col-md-6">
                                <input placeholder = "USD" id="amount" type="number" class="form-control" name="amount" required autofocus>
                            </div>
                            <div class="col-md-1">
                            </div>
                            <label id="pointLabel" for="amount" class="col-md-4 col-form-label text-md-right"> </label>
                        
                        </div>
                    </div>
                 
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <button type="submit" id="btn_donate" class="btn btn-primary">
                                Donate us
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalSignin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>
                <div class="nk-gap-1"></div>
                <br/>
                <form class="nk-form text-white"  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row vertical-gap">
                        <div class="row" style="padding-left:25px">

                            <div class="nk-gap"></div>
                            <input placeholder = "Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            <div class="nk-gap"></div>
                            <input placeholder = "Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="https://support.vortex-gaming.net/pwreset.php">Forgot your password?</a></small> </br>
                                <small><a href="#"  onclick="$('#modalSignin').modal('hide');" data-toggle="modal" data-target="#modalSignup">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="nk-modal modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0"><span class="text-main-1">Sign</span> Up</h4>
                <div class="nk-gap-1"></div>
                <br/>
                <form id="register_form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="gameid" class="col-md-4 col-form-label text-md-right">GameID</label>

                            <div class="col-md-6">
                                <input id="gameid" type="text" class="form-control{{ $errors->has('gameid') ? ' is-invalid' : '' }}" name="gameid" value="{{ old('gameid') }}" required autofocus>

                                @if ($errors->has('gameid'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gameid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="signup_email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="notice form-group row">
                            <ul id="check_terms_policy">
                                <li style="margin-top: 7px;padding-right: 10px;"><input id="termsPrivacy" type="checkbox" name="legal-accepted" id="legal-accepted"></li>
                                <li style="width:90%">
                                    <label for="legal-accepted">By clicking "Register", I agree to this <a href="{{URL::to('terms')}}">Terms of Use</a> and <a href="{{URL::to('privacy')}}">Privacy Policy</a>.</label>
                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="btn_register" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- START: Scripts -->
 <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> Us</h4>
                    <form class="nk-widget-content" method="get" action="{{URL::to('/subscribe')}}"> 
                        <div class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Send</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Latest</span> Posts</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="#" class="nk-post-image">
                                        <img src="{{URL::to('/assets')}}/added_images/News/post-1-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="#">VORTEX V-SKY 2...</a></div>
                                    <div class="nk-post-date">  
                                        <span class="fa fa-calendar"></span>  Oct 9, 2018
                                        <!--<span class="fa fa-comments"></span> <a href="#">4</a>-->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="#" class="nk-post-image">
                                        <img src="{{URL::to('/assets')}}/added_images/News/post-2-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="#">VORTEX INFORMATION...</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span>  Oct 9, 2018
                                        <!--<span class="fa fa-comments"></span> <a href="#">7</a>-->
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">In</span> Twitter</h4>
                    <div class="nk-widget-content">
                        <div class="nk-twitter-list" data-twitter-count="1"></div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                Copyright &copy; 2018 <a href="#" target="_blank">  Vortex Gaming</a>
            </div>
            <div>
                <ul class="termsprivacy">
                    <li><a href="{{URL::to('terms')}}">Terms of Use</a></li>
                    <li><a href="{{URL::to('privacy')}}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
                     <li><a class="nk-social-instagram" href="https://www.instagram.com/vortexgaming.vsky2/"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-twitter" href="https://twitter.com/VortexG85623108" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a class="nk-social-facebook" href="https://www.facebook.com/V-Sky-2-340975886472544/"><span class="fab fa-facebook"></span></a></li>
                    <!-- Additional Social Buttons
                        <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                        <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                        <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                        <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                        <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                        <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                        <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                        <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                        <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                        <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                        <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                        <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                        <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                        <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                        <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                        <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                        <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                        <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                    -->
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
<!-- Object Fit Polyfill -->
<script src="{{URL::to('/assets')}}/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="{{URL::to('/assets')}}/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="{{URL::to('/assets')}}/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="{{URL::to('/assets')}}/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="{{URL::to('/assets')}}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="{{URL::to('/assets')}}/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="{{URL::to('/assets')}}/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="{{URL::to('/assets')}}/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="{{URL::to('/assets')}}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="{{URL::to('/assets')}}/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="{{URL::to('/assets')}}/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="{{URL::to('/assets')}}/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="{{URL::to('/assets')}}/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="{{URL::to('/assets')}}/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="{{URL::to('/assets')}}/vendor/moment/min/moment.min.js"></script>
<script src="{{URL::to('/assets')}}/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="{{URL::to('/assets')}}/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="{{URL::to('/assets')}}/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="{{URL::to('/assets')}}/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="{{URL::to('/assets')}}/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="{{URL::to('/assets')}}/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="{{URL::to('/assets')}}/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="{{URL::to('/assets')}}/js/goodgames.min.js"></script>
<script src="{{URL::to('/assets')}}/js/goodgames-init.js"></script>
<!-- END: Scripts -->

<script>
    $(document).ready(function(){
        $("#btn_register").addClass('disabled');
        $('#pointLabel').text($('#amount').val()*90+" points");
        $('#termsPrivacy').click(function(){
            if($(this).is(":checked")){
                $("#btn_register").removeClass('disabled');
            }
            if(!$(this).is(":checked")){
                $("#btn_register").addClass('disabled');
            }
        });
        
       $('#btn_register').click(function(e){

            var email = $('#signup_email').val();
            if (email.indexOf("outlook.com") >= 0 || email.indexOf("hotmail.com") >= 0){
                alert("We don't provide outlook mail and hot mail. you can use gmail or others.");
                e.preventDefault();
            }
            else{
                if($(this).hasClass("disabled")==false){
                    $('#register_form').submit();
                }
                if($(this).hasClass("disabled")==true){
                    e.preventDefault();
                }
            }
        });
        $('#amount').keyup(function(){
            var pointText = $(this).val()*90;
            $('#pointLabel').text(pointText+" points");
        }); 
        $('#btn_donate').click(function(e){
            if($('#amount').val() == 0){
                e.preventDefault();
            } 
        });
        $('#paymentStatus').fadeIn(2000);
        $('#paymentStatus').fadeOut(5000);
        $("#gameid").keypress(function(event){
            var ew = event.which;
            if(48 <= ew && ew <= 57)
                return true;
            if(65 <= ew && ew <= 90)
                return true;
            if(97 <= ew && ew <= 122)
                return true;
            return false;
        });
        
        $("#name").keypress(function(event){
            var ew = event.which;
            if(48 <= ew && ew <= 57)
                return true;
            if(65 <= ew && ew <= 90)
                return true;
            if(97 <= ew && ew <= 122)
                return true;
            return false;
        });

    });
</script>
 @stack('footer-script')
</body>
</html>