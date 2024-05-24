@extends('user.layouts.master')

@section('title', 'Blog')

@section('content')
    <!--inner Title Start -->
    <div class="indx_title_main_wrapper">
        <div class="title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="indx_title_left_wrapper ms_cover">
                        <h2>Music Blog</h2>
                        <ul>
                            <li><a href="index.php">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                            <li>Music Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->
    <!-- blog category wrapper start-->
    <div class="blog_category_wrapper ms_cover">

        <div class="container">
            <div class="row">
                <div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12'>
                    <div class='blog_category_box_wrapper blog_box_wrapper2 float_left'>
                        <div class='blog_news_img_wrapper float_left'>
                            <img src='upload/blog/' alt='blog_img'>
                        </div>
                        <div class='lest_news_cont_wrapper float_left'>
                            <div class='blog_heaidng_top'>
                                <span> <i class='flaticon-calendar'></i></span>
                                <h3> <a href='blog_single.php?viewblog=" . $id . "'></a></h3>
                            </div>
                            <div class='blog-single_cntnt'>
                                <p></p>
                                <a href='blog_single.php?viewblog=" . $id . "'> read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
