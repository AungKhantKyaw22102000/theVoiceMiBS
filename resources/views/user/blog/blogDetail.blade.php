@extends('user.layouts.master')

@section('title', 'Blog Detail')

@section('content')
    <!--inner Title Start -->
    <div class="indx_title_main_wrapper">
        <div class="title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="indx_title_left_wrapper ms_cover">
                        <h2>blog single</h2>
                        <ul>
                            <li><a href="index.php">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                            <li>blog single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->
    <!-- blog category wrapper start-->
    <div class="blog_category_wrapper blog_single_wrapper ms_cover">
        <div class="container">
            <div class="row">
                <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 blog_responsive'>

                    <div class='blog_category_box_wrapper blog_box_wrapper float_left'>
                        <div class='blog_news_img_wrapper float_left'>
                            <img src='upload/blog/' alt='blog_img'>
                        </div>
                        <div class='lest_news_cont_wrapper float_left'>
                            <div class='blog_heaidng_top'>
                                <span> <i class='flaticon-calendar'></i>" . $formattedDate . "</span>
                                <h3> <a href='#'></a></h3>
                            </div>
                            <div class='blog-single_cntnt'>
                                <p>
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class='leave_comment_wrapper ms_cover'>
                        <div class='leave_comment_wrapper ms-cover'></div>

                        <div class='ms_heading_wrapper leave_comment_heading'>
                            <h1>leave a comment </h1>
                        </div>


                        <div class='comment_heading_top ms_cover'>
                            <p>comments</p>
                            <h1><a href='#'><i class='fa fa-info-circle'></i> login</a></h1>
                        </div>

                        <div class='comment_heading_bottom ms_cover'>
                            <h1><a href='#'><i class='fas fa-heart'></i> Comment Area</a></h1>
                        </div>

                        <div class='comments_Box'>
                            <div class='img_wrapper'>
                                <img src='{{ asset('user/images/author1.jpg') }}' class='' alt='author_img' />
                            </div>
                            <div class='text_wrapper'>
                                <div class='author_detail'>
                                    <span class='author_name'></span>
                                    <span class='publish_date'></span>
                                </div>
                                <div class='author_content'>
                                    <p> </p>
                                </div>
                            </div>
                        </div>

                        <div class='comments_Box'>
                            <form action='admin/blog_function/comment.php' method='POST'>
                                <div class='text_wrapper'>
                                    <div class='contect_form_footer ms_cover'>
                                        <input type='hidden' name='blog_id' value='" . $id . "'>
                                        <input type='text' name='message' placeholder='be the first to comment'>
                                    </div>
                                    <div class='lang_apply_btn comment_btn'>
                                        <ul>
                                            <li>
                                                <button type='submit'> <i class='flaticon-play-button'></i>post
                                                    comment</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog category wrapper end -->
@endsection
