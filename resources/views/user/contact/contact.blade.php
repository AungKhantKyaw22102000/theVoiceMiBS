@extends('user.layouts.master')

@section('title', 'Contact')

@section('content')
    <!--inner Title Start -->
    <div class="indx_title_main_wrapper">
        <div class="title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="indx_title_left_wrapper ms_cover">
                        <h2>contact us</h2>
                        <ul>
                            <li><a href="index.php">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->
    <!-- contact_icon_section start-->
    <div class="contact_icon_section ms_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="ms_heading_wrapper ms_cover text-center">

                        <h1>contact with us</h1>

                        <p>Your next level Product developemnt company assets</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="contact_main ms_cover">
                        <div class="contact_rotate">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h4>contact us</h4>
                        <p>+959 692 302 021
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="contact_main ms_cover">
                        <div class="contact_rotate">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email</h4>
                        <p><a href="mailto: info@mibs.com.mm">info@mibs.com.mm </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="contact_main ms_cover">
                        <div class="contact_rotate">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Yangon location</h4>
                        <p>F-49/201, D block, 2nd floor & 3rd floor, Pearl Condo, Bahan, Yangon, Myanmar
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="contact_main ms_cover">
                        <div class="contact_rotate">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4> Mandalay location</h4>
                        <p>Fantasy world, Between 31st & 32nd Street on 78th street, Mandalay, Myanmar
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info section end -->
    <!-- ms map Start -->
    <div class="map_main_wrapper ms_cover">
        <div id="map">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1X9583LxITVD0Uq_vrSyxPGm4ggR1p6o&ehbc=2E312F"
                width="100%" height="600" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
    <!-- ms map End -->
    <!-- contact_wrapper start -->
    <div class="contact_section ms_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="ms_heading_wrapper ms_cover text-center">

                        <h1>GET IN TOUCH</h1>

                        <p>Your next level Product developemnt company assets</p>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-pos">
                                    <div class="form-group i-name">

                                        <input type="text" class="form-control require" name="first_name" required=""
                                            placeholder="First Name*">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-pos">
                                    <div class="form-group i-name">
                                        <input type="text" class="form-control require" name="last_name" required=""
                                            placeholder="last Name*">
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-lg-6 col-md-6">
                                <div class="form-e">
                                    <div class="form-group i-email">
                                        <input type="email" class="form-control require" name="email" required=""
                                            placeholder=" Email *" data-valid="email" data-error="Email should be valid.">
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-lg-6 col-md-6">
                                <div class="form-s">
                                    <div class="form-group i-subject">
                                        <input type="text" class="form-control require" name="Subject" required=""
                                            placeholder="subject">
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="form-m">
                                    <div class="form-group i-message">
                                        <textarea class="form-control require" name="message" required="" rows="5" id="messageTen"
                                            placeholder=" Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="tb_es_btn_div">
                                    <div class="response"></div>
                                    <div class="tb_es_btn_wrapper">
                                        <button type="button" class="submitForm"><i class="flaticon-play-button"></i> send
                                            !</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact_wrapper end -->
@endsection
