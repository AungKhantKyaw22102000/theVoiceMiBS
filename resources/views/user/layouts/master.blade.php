<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="The Voice of MiBS Season II" />
    <meta name="keywords" content="The Voice of MiBS Season II" />
    <meta name="author" content="Aung Khant Kyaw" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/nice-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/swiper.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/dark_theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/responsive.css') }}" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('user/images/favicon.png') }}" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('user/images/loader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
    <div class="cursor"></div>

    <!-- navi wrapper Start -->
    <!-- top navi wrapper start -->
    <div class="m24_main_wrapper">
        <div id="sidebar" class="bounce-to-right">
            <div id="toggle_close">×</div>
            <div id='cssmenu'>
                <a href="index.php"><img src="{{ asset('user/images/logo2.png') }}" alt="logo"></a>
                <ul class="sidebb">
                    <li><a href='index.php'><i class="flaticon-home"></i>index</a></li>
                    <li><a href="music_blog.php"> <i class="flaticon-album"></i>Music Blog</a></li>
                    <li><a href='contact_us.php'><i class="flaticon-internet"></i>contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- top navi wrapper end -->
    <div class="m24_navi_main_wrapper ms_cover">
        <div class="container-fluid">
            <div class="m24_logo_wrapper">
                <div class="ms_logo_div">
                    <a href="index.php">
                        <img src="{{ asset('user/images/logo2.png') }}" alt="logo">
                    </a>
                </div>
                <div id="toggle">
                    <a href="#"><i class="flaticon-menu-1"></i></a>
                </div>
            </div>

            <div class="m24_header_right_Wrapper d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <div class="m24_signin_wrapper">
                    <a href="#" data-toggle="modal" data-target="#login_modal"><img src="{{asset('user/images/pf.png')}}"
                            alt="img">
                        <div class="login_top_wrapper">
                            <p>login/register</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="m24_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">

                    </ul>
                </div>
                <!-- mainmenu end -->
                <div class="navi_searchbar_wrapper">
                    <!-- <i class="flaticon-magnifying-glass"></i> -->
                    <!-- <input type="text" id="justAnotherInputBox" placeholder="Search for Songs, Artists, Playlists and More.." /> -->
                </div>
                <div class="d-block d-sm-block d-md-block d-lg-block d-xl-none">
                    <div class="search_bar">
                        <div class="res_search_bar" id="search_button"> <i class="fa fa-ellipsis-v"></i>
                        </div>
                        <div id="search_open" class="res_search_box">
                            <div class="m24_signin_wrapper responsive_search_toggle">
                                <a href="#" data-toggle="modal" data-target="#login_modal"><img
                                        src="{{asset('user/images/pf.png')}}" alt="img">
                                    <div class="login_top_wrapper">
                                        <p>login/register</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m24_navi_langauage_box">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="lang_list_wrapper d-none d-sm-none d-md-none d-lg-none d-xl-block">
                        <label for="checkbox">Theme</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navi wrapper End -->

    @yield('content')

    <!-- footer Wrapper start -->
    <div class="foter_top_wrapper ms_cover">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="section2_bottom_wrapper ms_cover">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="btm_foter_box">

                        <p>Copyright © 2024 <a href="index.php"> Madlab </p>
                        <div class="aboutus_social_icons">
                            <a href="https://mibs.com.mm" target="blank">Get MiBS <i
                                    class="flaticon-play-button"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer wrapper end-->
    </div>

    <!-- login register  modal section -->
    <div class="modal fade lang_ms_banner" id="login_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="m24_language_box ms_cover">
                            <h1>Login / Sign In</h1>
                            <p>for unlimited music streaming & a personalised experience</p>
                        </div>
                        <form action="admin/user_function/login.php" method="POST">
                            <div class="login_form_wrapper">
                                <div class="icon_form comments_form">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter Email Address*">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="icon_form comments_form">
                                    <input type="password" name="pw" class="form-control"
                                        placeholder="Enter Password *">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="login_remember_box">
                                    <label class="control control--checkbox">keep me signed in
                                        <input type="checkbox">
                                        <span class="control__indicator"></span>
                                    </label>
                                    <a href="#" class="forget_password">
                                        Forgot Password ?
                                    </a>
                                </div>
                            </div>
                            <div class="lang_apply_btn_wrapper ms_cover">
                                <div class="lang_apply_btn">
                                    <button type="submit">login now</button>
                                </div>
                                <div class="cancel_wrapper">
                                    <a href="#" class="" data-dismiss="modal">cancel</a>
                                </div>
                                <div class="dont_have_account ms_cover">
                                    <p>Don’t have an acount ? <a href="#register_modal" data-toggle="modal">register
                                            here</a>
                                        Or <a href="#confirm_modal" data-toggle="modal">Verify Account</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade lang_ms_banner" id="confirm_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="m24_language_box ms-cover">
                            <h1>Verify Your Account</h1>
                            <p>If you want to vote the songs, You have to confirm your Account!</p>
                        </div>
                        <form action="admin/user_function/verify_user.php" method="POST">
                            <div class="login_form_wrapper">
                                <div class="icon_form comment_form">
                                    <input type="text" class="form-control" name="verification_code"
                                        placeholder="Enter Your Confirmation Code">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <div class="lang_apply_btn_wrapper ms_cover">
                                <div class="lang_apply_btn">
                                    <button type="submit" name="verify">login now</button>
                                </div>
                                <div class="cancel_wrapper">
                                    <a href="#" class="" data-dismiss="modal">cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade lang_ms_banner" id="register_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="m24_language_box ms_cover">
                            <h1>Register / Sign Up</h1>
                            <p>for unlimited music streaming & a personalised experience</p>
                        </div>
                        <form action="admin/user_function/insert_user.php" method="POST">
                            <div class="login_form_wrapper">
                                <div class="icon_form comments_form">
                                    <input type="text" class="form-control" name="user_name"
                                        placeholder="Enter your name">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="icon_form comments_form">
                                    <input type="email" class="form-control" name="employee_id"
                                        placeholder="Enter Email Address*">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="icon_form comments_form">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter Password *">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="icon_form comments_form">
                                    <input type="password" name="retype_password" class="form-control"
                                        placeholder="confirm password*">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <div class="lang_apply_btn_wrapper ms_cover">
                                <div class="lang_apply_btn">
                                    <button type="submit" name="submit">register</button>
                                </div>
                                <div class="cancel_wrapper">
                                    <a href="#" class="" data-dismiss="modal">cancel</a>
                                </div>
                                <div class="dont_have_account ms_cover">
                                    <p>Don’t have an acount ? <a href="#login_modal" data-toggle="modal">login
                                            here</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- login register  modal end -->

    <!-- playllist wrapper start -->
    <div class="adonis-player-wrap">
        <div id="adonis_jp_container" class="master-container-holder" role="application" aria-label="media player">
            <div id="adonis_jplayer_main" class="jp-jplayer"></div>
            <div class="adonis-player-horizontal">
                <div class="master-container-fluid">
                    <div class="row adonis-player">
                        <div class="col-sm-4 col-lg-4 col-xl-3 col-4">
                            <div class="media current-item">
                                <div class="song-poster">
                                    <img class="box-rounded-sm" src="{{ asset('user/js/mp3/browse/browse-overview-4.jpg') }}"
                                        alt="">
                                </div>
                                <div class="des">
                                    <div class="jp-title" aria-label="title">&nbsp;</div>
                                    <div class="artist-name"><a href="#">Please Select A Song</a></div>
                                </div>
                                <div class="des_option_wrapper">
                                    <div class="ms_tranding_more_icon">
                                    </div>
                                </div>
                            </div>
                            <div class="jp-details">
                                <div class="jp-title" aria-label="title">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-xl-6 col-4 resp">
                            <div class="player-controls">

                                <div class="control-primary">
                                    <a class="jp-play" role="button" tabindex="0">
                                        <span class="adonis-icon icon-play icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                                <path
                                                    d="M27.703 14.461l-24.945-14.187c-0.272-0.174-0.604-0.278-0.96-0.278-0.993 0-1.798 0.805-1.798 1.798 0 0.001 0 0.002 0 0.004v-0 28.434c0.004 0.982 0.801 1.776 1.783 1.776 0.338 0 0.653-0.094 0.922-0.257l-0.008 0.004c1.524-0.869 23.65-13.44 25.006-14.217 0.549-0.303 0.914-0.878 0.914-1.539s-0.366-1.236-0.905-1.534l-0.009-0.005z">
                                                </path>
                                            </svg></span>
                                        <span class="adonis-icon icon-pause icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                                <path
                                                    d="M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                                </path>
                                                <path
                                                    d="M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                                </path>
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-xl-3 col-4">
                            <div class="jp_controls_wrapper">
                                <div class="jp-volume-controls">
                                    <a class="adonis-mute-control" role="button" tabindex="0">
                                        <span class="adonis-icon icon-volume icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 32">
                                                <path
                                                    d="M31.76 9.056l-1.36 2.592c1.265 1.020 2.071 2.567 2.080 4.302v0.002c0 1.896-0.456 3.616-1.952 4.648l1.28 2.184c1.962-1.642 3.202-4.092 3.202-6.831 0-2.776-1.272-5.254-3.266-6.884l-0.016-0.013zM36.664 4.424l-1.664 2.288c2.479 2.331 4.027 5.627 4.040 9.286v0.002c-0.027 3.717-1.634 7.053-4.182 9.375l-0.010 0.009 1.728 2.2c3.058-2.92 4.96-7.028 4.96-11.581 0-0.001 0-0.002 0-0.003v0c-0.017-4.532-1.877-8.626-4.87-11.574l-0.002-0.002zM41.6 0l-1.848 2.168c3.497 3.563 5.665 8.442 5.696 13.826l0 0.006c-0.043 5.368-2.202 10.223-5.683 13.779l0.003-0.003 1.832 2.168c3.946-4.151 6.373-9.778 6.373-15.972s-2.427-11.821-6.383-15.982l0.009 0.010zM0 10.888v10.4c0 1.328 1.2 3.016 2.688 3.016h8.080v-16.616h-8.080c-1.488 0-2.688 1.912-2.688 3.2zM23.272 0.136l-11.272 7.4v16.984l11.272 7.48c1.48 0 3.608-1.072 3.608-2.4v-27.072c0-1.32-2.128-2.392-3.608-2.392z">
                                                </path>
                                            </svg></span>
                                        <span class="adonis-icon icon-mute icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 11.95">
                                                <g data-name="Layer 2">
                                                    <g id="Group_4" data-name="Group 4">
                                                        <path
                                                            d="M18.75,8.12V9.61H17.26L15.38,7.73,13.49,9.61H12V8.12l1.88-1.89L12,4.35V2.86h1.49l1.89,1.88,1.88-1.88h1.49V4.35L16.87,6.23Z" />
                                                        <g id="sound_2" data-name="sound 2">
                                                            <path class="cls-1"
                                                                d="M0,4V7.92A1.16,1.16,0,0,0,1,9.05H4V2.83H1C.45,2.83,0,3.54,0,4ZM8.73,0,4.51,2.78V9.14L8.73,12c.55,0,1.35-.4,1.35-.9V.9C10.08.4,9.28,0,8.73,0Z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></span>
                                    </a>
                                    <div class="jp-volume-bar d-flex align-items-center">
                                        <div class="jp-volume-bar-value"></div>
                                    </div>
                                </div>
                                <div class="jp_adoins_wrapper"><a class="toggle-off-canvas"
                                        data-target="#adonis-playlist" role="button" tabindex="0"><span
                                            class="adonis-icon icon-4x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 32">
                                                <path
                                                    d="M16 4.571h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0zM2.286 0c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0zM57.143 13.714h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0zM2.286 13.714c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0zM57.143 27.429h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0zM2.286 27.429c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0z">
                                                </path>
                                            </svg></span></a></div>

                                <div class="jp_current_time_wrapepr d-none d-lg-block">
                                    <div class="jp-current-time" role="timer" aria-label="time"></div>
                                    <div class="jp-duration" role="timer" aria-label="duration"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--./ container-fluid-->
                <div class="jp-progress d-flex align-items-center jp-progress-pos-top">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
            </div>

            <div id="adonis-playlist" class="adonis-playlist off-canvas off-canvas-right">
                <div class="adonis-playlist-player adonis-player player-bg-yellow">
                    <a class="close-offcanvas" data-target="#adonis-playlist" href="#"><span
                            class="adonis-icon icon-3x"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.4 12l5.3-5.3c0.4-0.4 0.4-1 0-1.4s-1-0.4-1.4 0l-5.3 5.3-5.3-5.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4l5.3 5.3-5.3 5.3c-0.4 0.4-0.4 1 0 1.4 0.2 0.2 0.4 0.3 0.7 0.3s0.5-0.1 0.7-0.3l5.3-5.3 5.3 5.3c0.2 0.2 0.5 0.3 0.7 0.3s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4l-5.3-5.3z">
                                </path>
                            </svg></span>
                    </a>
                    <div class="blurred-bg-wrap">
                        <div class="blurred-bg"></div>
                    </div>
                    <div class="media current-item">
                        <div class="song-poster">
                            <img class="box-rounded-sm" src="{{ asset('user/js/mp3/browse/playlist-2.jpg') }}" alt="">
                        </div>
                        <div class="player-details col-8">
                            <h3 class="jp-title">Music Make Good Vibe</h3>
                            <p class="artist-name">Select A Song You Would Like to Listen</p>
                            <div class="controls">
                                <div class="side_bar_shuffle">

                                </div>
                                <div class="sidebar_treanding_icon">
                                    <div class="ms_tranding_more_icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media controls jp_media_playlist">
                        <div class="playlist-player-control align-items-center col-4">
                            <a class="jp-previous" role="button" tabindex="0"><span
                                    class="adonis-icon icon-5x"><svg version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 32">
                                        <path
                                            d="M55.064 0.272l-25.2 14.192c-0.555 0.299-0.925 0.876-0.925 1.54s0.371 1.241 0.916 1.535l0.009 0.005c1.336 0.784 23.64 13.344 25.256 14.216 0.265 0.162 0.585 0.258 0.928 0.258 0.986 0 1.787-0.793 1.8-1.777v-28.433c0-0.004 0-0.009 0-0.014 0-0.999-0.809-1.808-1.808-1.808-0.362 0-0.7 0.107-0.983 0.29l0.007-0.004zM26.12 0.272c-1.112 0.624-23.304 13.12-25.192 14.192-0.555 0.299-0.925 0.876-0.925 1.54s0.371 1.241 0.916 1.535l0.009 0.005c1.36 0.8 23.64 13.344 25.248 14.216 0.265 0.161 0.586 0.257 0.928 0.257 0.987 0 1.79-0.792 1.808-1.775l0-0.002v-28.432c0-0.001 0-0.003 0-0.005 0-1.003-0.813-1.816-1.816-1.816-0.362 0-0.7 0.106-0.983 0.289l0.007-0.004z">
                                        </path>
                                    </svg></span>
                            </a>
                            <a class="jp-play fs-4" role="button" tabindex="0">
                                <span class="adonis-icon icon-play icon-2x"><svg version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                        <path
                                            d="M27.703 14.461l-24.945-14.187c-0.272-0.174-0.604-0.278-0.96-0.278-0.993 0-1.798 0.805-1.798 1.798 0 0.001 0 0.002 0 0.004v-0 28.434c0.004 0.982 0.801 1.776 1.783 1.776 0.338 0 0.653-0.094 0.922-0.257l-0.008 0.004c1.524-0.869 23.65-13.44 25.006-14.217 0.549-0.303 0.914-0.878 0.914-1.539s-0.366-1.236-0.905-1.534l-0.009-0.005z">
                                        </path>
                                    </svg></span>
                                <span class="adonis-icon icon-pause icon-2x"><svg version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                        <path
                                            d="M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                        </path>
                                        <path
                                            d="M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                        </path>
                                    </svg></span>
                            </a>
                            <a class="jp-next" role="button" tabindex="0"><span class="adonis-icon icon-5x"><svg
                                        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 32">
                                        <path
                                            d="M28 14.464l-25.216-14.192c-0.276-0.179-0.614-0.286-0.976-0.286-0.999 0-1.808 0.809-1.808 1.808 0 0.005 0 0.010 0 0.015v-0.001 28.432c0.013 0.985 0.814 1.778 1.8 1.778 0.343 0 0.663-0.096 0.936-0.262l-0.008 0.005c1.6-0.872 23.896-13.432 25.256-14.216 0.559-0.298 0.934-0.877 0.934-1.544 0-0.66-0.367-1.235-0.908-1.531l-0.009-0.005zM56.944 14.464l-25.216-14.192c-0.276-0.179-0.614-0.286-0.976-0.286-0.999 0-1.808 0.809-1.808 1.808 0 0.005 0 0.010 0 0.015v-0.001 28.432c0.013 0.985 0.814 1.778 1.8 1.778 0.343 0 0.663-0.096 0.936-0.262l-0.008 0.005c1.6-0.872 23.888-13.432 25.256-14.216 0.55-0.303 0.917-0.879 0.917-1.54s-0.367-1.237-0.908-1.535l-0.009-0.005z">
                                        </path>
                                    </svg></span></a>
                        </div>
                        <div class="col-8">
                            <div class="jp-current-time jp-time" role="timer" aria-label="time"></div>
                            <div class="jp-progress jp_progress2">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-duration" role="timer" aria-label="duration"></div>
                        </div>
                    </div>
                </div>
                <div class="jp-playlist scroll-y">
                    <ul>
                        <li>&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- playlist wrapper end -->

    <!--custom js files-->
    <script src="{{ asset('user/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/modernizr.js') }}"></script>
    <script src="{{ asset('user/js/plugin.js') }}"></script>
    <script src="{{ asset('user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset("user/>js/jquery.inview.min.js") }}"></script>
    <script src="{{ asset('user/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('user/js/swiper.min.js') }}"></script>
    <script src="{{ asset('user/js/comboTreePlugin.js') }}"></script>
    <script src="{{ asset('user/js/mp3/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('user/js/mp3/jplayer.playlist.js') }}"></script>
    <script src="{{ asset('user/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('user/js/mp3/player.js') }}"></script>
    <script src="{{ asset('user/js/custom.js') }}"></script>
    <!-- custom js-->
    <script>
        //--------- CountDown Js --------//
        var deadline = 'April 8 2024 11:59:00 GMT-0400';

        function time_remaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function run_clock(id, endtime) {
            var clock = document.getElementById(id);

            // get spans where our clock numbers are held
            var days_span = clock.querySelector('.days');
            var hours_span = clock.querySelector('.hours');
            var minutes_span = clock.querySelector('.minutes');
            var seconds_span = clock.querySelector('.seconds');

            function update_clock() {
                var t = time_remaining(endtime);

                // update the numbers in each part of the clock
                days_span.innerHTML = t.days;
                hours_span.innerHTML = ('0' + t.hours).slice(-2);
                minutes_span.innerHTML = ('0' + t.minutes).slice(-2);
                seconds_span.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }
            update_clock();
            var timeinterval = setInterval(update_clock, 1000);
        }
        run_clock('clockdiv', deadline);
    </script>
    <script>
        function playSong(selectedId, season) {

            // Create a new instance of adonisJPlayerPlaylist
            var adonisPlaylist = new adonisJPlayerPlaylist({
                jPlayer: "#adonis_jplayer_main",
                cssSelectorAncestor: "#adonis_jp_container"
            }, [], {});

            var selectedSong;

            if (season === 'season1') {
                // Check if the selected song is from season1
                selectedSong = playlist.find(song => String(song.id) === String(selectedId));
            } else if (season === 'season2') {
                // Check if the selected song is from season2
                selectedSong = s2playlist.find(song => String(song.id) === String(selectedId));
            } else {
                console.error("Invalid season provided.");
                return;
            }

            if (selectedSong) {
                adonisPlaylist.setPlaylist([selectedSong]);
                adonisPlaylist.play(0);

                $('.current-item .song-poster img').attr('src', selectedSong.poster);
                $('.current-item .jp-title').text(selectedSong.title);
                $('.current-item .artist-name a').text(selectedSong.artist);
            } else {
                console.error("Selected song not found in the specified playlist.");
            }
        }
    </script>
</body>

</html>
