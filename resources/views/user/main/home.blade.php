@extends('user.layouts.master')

@section('title', 'Home')

@section('content')
    <!-- slider wrapper start -->
    <div class="main_slider_wrapper slider-area">
        <div class="slider_side_width"></div>
        <div class="slider_headphone">
            <img src="{{ asset('user/images/headphone.png') }}" class="img-responsive" alt="img">
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-captions caption-1">
                        <div class="container jn_container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">
                                        <h1 data-animation="animated fadeInUp">sound,</h1>
                                        <h2 data-animation="animated fadeInUp">your world</h2>
                                        <p data-animation="animated fadeInUp">Even while listening to music, simply say
                                            “Olivia”
                                            <br> to interact with Olivia.
                                        </p>
                                        <div class="slider_btn ms_cover">
                                            <div class="lang_apply_btn">
                                                <ul>
                                                    <li data-animation="animated fadeInUp">
                                                        <a href="#"> <i class="flaticon-play-button"></i>browse</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content_img_wrapper">
                                        <img src="{{ asset('user/images/banner2.jpg') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-2">
                        <div class="container jn_container">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h1 data-animation="animated fadeInUp">sound,</h1>

                                        <h2 data-animation="animated fadeInUp">your world</h2>
                                        <p data-animation="animated fadeInUp">Even while listening to music, simply say
                                            “Olivia”
                                            <br> to interact with Olivia.
                                        </p>
                                        <div class="slider_btn ms_cover">
                                            <div class="lang_apply_btn">
                                                <ul>
                                                    <li data-animation="animated fadeInUp">
                                                        <a href="#"> <i class="flaticon-play-button"></i>browse</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content_img_wrapper">
                                        <img src="{{ asset('user/images/banner.jpg') }}" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-3">
                        <div class="container jn_container">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h1 data-animation="animated fadeInUp">sound,</h1>

                                        <h2 data-animation="animated fadeInUp">your world</h2>
                                        <p data-animation="animated fadeInUp">Even while listening to music, simply say
                                            “Olivia”
                                            <br> to interact with Olivia.
                                        </p>
                                        <div class="slider_btn ms_cover">
                                            <div class="lang_apply_btn">
                                                <ul>
                                                    <li data-animation="animated fadeInUp">
                                                        <a href="#"> <i class="flaticon-play-button"></i>browse</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content_img_wrapper">
                                        <img src="{{ asset('user/images/banner2.jpg') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span
                            class="number"></span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span
                            class="number"></span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span
                            class="number"></span>
                    </li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <span> prev</span>
                        <i class="flaticon-arrow-1"></i>
                    </a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span> next</span>
                        <i class="flaticon-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--slider wrapper end-->

    <!-- treanding song wrapper start -->
    <div class="treanding_songs_wrapper treanding_index_wrapper ms_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="ms_heading_wrapper">
                        <h1>Season I Top 10 Songs</h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="treanding_song_slider" id="treanding_song_slider">
                        <div class="owl-carousel owl-theme">
                            <div class='item' id='treandingitem'>
                                <div class='treanding_slider_main_box ms_cover'>
                                    <img src='upload/season1/' alt='img'>
                                    <div class='ms_treanding_box_overlay'>
                                        <div class='ms_tranding_box_overlay'></div>
                                        <div class='tranding_play_icon'>
                                            <a href='#treanding_songs_slider'
                                                onclick='playSong(" . json_encode($id) . ", \"season1\")'>
                                                <i class='flaticon-play-button'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- treanding song wrapper end -->

    <!-- release album wrapper start -->
    <div class='treanding_songs_wrapper release_wrapper ms_cover' id='season2'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='ms_heading_wrapper'>
                        <h1>Season II Participants</h1>
                    </div>
                </div>
                <div class='col-xl-12 col-lg-12 col-md-12'>
                    <div class='tab-content'>
                        <div id='home' class='tab-pane active'>
                            <div class='row'>

                                <div class='col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1'>
                                    <div class='treanding_slider_main_box release_box_main_content ms_cover'>
                                        <img src='upload/season2/' alt='img'>
                                        <div class='release_content_artist'>
                                            <p>
                                                <a href='#season2' onclick='playSong(" . json_encode($id) . ", \"season2\")'></a>
                                            </p>
                                            <p class='various_artist_text'>
                                                <a href='#season2' onclick='playSong(" . json_encode($id) . ", \"season2\")'></a>
                                            </p>
                                        </div>
                                        <div class='ms_treanding_box_overlay release_box_overlay'>
                                            <div class='ms_tranding_box_overlay'></div>
                                            <div class='ms_tranding_more_icon'>
                                                <i class='flaticon-menu'></i>
                                            </div>
                                            <ul class='tranding_more_option'>
                                                <li>
                                                    <a href='admin/vote/downloads2.php?download= " . $id . "'>
                                                        <span class='opt_icon'><i class='flaticon-files-and-folders'></i></span>Download
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href='#'>
                                                        <span class='opt_icon'><i class='flaticon-trash'></i></span>delete
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class='tranding_play_icon'>
                                                <a href='#season2'
                                                    onclick='playSong(" . json_encode($id) . ", \"season2\")'>
                                                    <i class='flaticon-play-button'></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- release album wrapper end -->
    <!-- addvertisment wrapper start -->
    <div class='add_banner_wrapper ms_cover'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='add_banner_img_wrapper ms_cover'>
                        <a href='#'><img src='{{ asset('user/images/add2.png') }}' class='img-responsive' alt='img'></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- addvertisment wrapper end -->
    <!-- top songs wrapper start -->
    <div class='top_songs_wrapper download_trending_track_wrapper ms_cover' id='season21'>
        <div class='container'>
            <div class='row'>
                <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12'>
                    <div class='song_heading_wrapper ms_cover'>
                        <div class='ms_heading_wrapper'>
                            <h1>Season II Voting Songs</h1>
                        </div>
                    </div>
                </div>

                <div class='col-xl-6 col-lg-6 col-md-12 col-sm-12'>
                    <div class='top_songs_list free_music_wrapper ms_cover'>
                        <div class='top_songs_list_left'>
                            <div class='treanding_slider_main_box top_lis_left_content'>
                                <div class='top_songs_list0img'>
                                    <img src='upload/season2/' alt='img'>
                                    <div class='ms_treanding_box_overlay'>
                                        <div class='ms_tranding_box_overlay'></div>
                                        <div class='tranding_play_icon'>
                                            <a href='#season21' onclick='playSong(" . json_encode($id) . ", \"season2\")'>
                                                <i class='flaticon-play-button'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class='release_content_artist top_list_content_artist'>
                                    <p><a href='#season21' onclick='playSong(" . json_encode($id) . ", \"season2\")'></a>
                                    </p>
                                    <p class='various_artist_text'><a href='#season21'
                                            onclick='playSong(" . json_encode($id) . ", \"season2\")'></a></p>
                                </div>
                            </div>
                            <div class='top_list_tract_time'>
                                <p></p>
                            </div>
                        </div>
                        <div class='top_songs_list_right'>
                            <div class='top_list_tract_view'>
                                <a href='admin/vote/vote.php?vote=" . $id . "'><i class='fas fa-vote-yea'
                                        title='vote now'></i></a>
                            </div>
                            <div class='top_song_list_picks'>
                                <div class='ms_tranding_more_icon'>
                                    <i class='flaticon-menu'></i>
                                </div>
                                <ul class='tranding_more_option'>
                                    <li><a href='admin/vote/vote.php?vote=" . $id . "'><span class='opt_icon'><i
                                                    class='fas fa-vote-yea'></i></span>Vote Now</a></li>
                                    <li><a href='admin/vote/downloads2.php?download=" . $id . "'><span class='opt_icon'><i
                                                    class='flaticon-download'></i></span>Download Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top songs wrapper end -->

    <!-- download wrapper start -->
    <div class="download_wrapper ms_cover">
        <div class="concert_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="upcoming_event_wrapper ms_cover">
                        <h2>Upcomming Events</h2>
                        <h3>APRIL, 12th, 2024</h3>
                        <div class="prs_ec_ue_timer_wrapper upcoming_clickdiv">
                            <div id="clockdiv">
                                <div><span class="days"></span>
                                    <div class="smalltext">Days</div>
                                </div>
                                <div><span class="hours"></span>
                                    <div class="smalltext">Hours</div>
                                </div>
                                <div><span class="minutes"></span>
                                    <div class="smalltext">Mins</div>
                                </div>
                                <div><span class="seconds"></span>
                                    <div class="smalltext">Secs</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download wrapper end -->
    <!-- addvertisment wrapper start -->
    <div class="add_banner_wrapper ms_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="add_banner_img_wrapper ms_cover">
                        <a href="#"><img src="{{ asset('user/images/add7.png') }}" class="img-responsive" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- addvertisment wrapper end -->
    <!-- blog wrapper start -->
    <div class="blog_wrapper ms_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="ms_heading_wrapper">
                        <h1>Season I Blog</h1>
                    </div>
                    <div class="relaese_viewall_wrapper">
                        <a href="music_blog.php"> view all <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>

                <div class='col-lg-6 col-md-12 col-sm-12'>
                    <div class='featured_artist_list blog_img_content ms_cover'>
                        <img src='upload/blog/' class='img-responsive' alt='img'>
                        <div class='featured_artist_detail blog_content_box'>
                            <span> <i class='flaticon-calendar'></i></span>
                            <p><a href='blog_single.php?viewblog=" . $blog_id . "'></a></p>
                            <p></p>
                            <a href='blog_single.php?viewblog=" . $blog_id . "'> read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog wrapper end -->
    <div class="add_banner_wrapper ms_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="add_banner_img_wrapper ms_cover">
                        <a href="#"><img src="{{ asset('user/images/add1.png') }}" class="img-responsive" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners slider  wrapper Start-->
    <div class="partners_Section ms_cover">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="partner_slider_wraper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('user/images/prt1.png') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('user/images/prt2.png') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('user/images/prt3.png') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('user/images/prt4.png') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('user/images/prt2.png') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset("user/images/prt1.png") }}" alt="partner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners slider  wrapper end-->
@endsection
