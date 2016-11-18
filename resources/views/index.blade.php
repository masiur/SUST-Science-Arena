@extends('layouts.frontend')
    @section('content')
        @include('admin.includes.alert')
            <section class="intro_section page_mainslider ds">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset('frontend/images/slide01.jpg') }}" alt="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper text-center">
                                            <div class="slide_description">
                                                <div class="intro-layer" data-animation="scaleAppear">
                                                    <h3 class="topmargin_40">
                                                        Planning Ahead
                                                    </h3>
                                                    <h4 class="text-uppercase">can make all the difference</h4>
                                                    <a class="theme_button inverse" href="#">Our Services</a>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                        <!-- eof .slide_description_wrapper -->
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                        <li>
                            <img src="{{ asset('frontend/images/slide02.jpg') }} alt="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper text-center">
                                            <div class="slide_description">
                                                <div class="intro-layer" data-animation="scaleAppear">
                                                    <h3 class="topmargin_40">
                                                        A Family Tradition
                                                    </h3>
                                                    <h4 class="text-uppercase">For Over 40 Years</h4>
                                                    <a class="theme_button inverse" href="#">Know More</a>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                        <!-- eof .slide_description_wrapper -->
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                        <li>
                            <img src="{{ asset('frontend/images/slide03.jpg') }}" alt="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper text-center">
                                            <div class="slide_description">
                                                <div class="intro-layer" data-animation="scaleAppear">
                                                    <h3 class="topmargin_40">
                                                        Celebrating Life
                                                    </h3>
                                                    <h4 class="text-uppercase">One Family At A Time</h4>
                                                    <a class="theme_button inverse" href="#">Get Started</a>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                        <!-- eof .slide_description_wrapper -->
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                    </ul>
                </div>
                <!-- eof flexslider -->
            </section>

            <section class="ls ms services-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 margin_0">
                            <div class="s-block s-block1 to_animate">
                                <div>
                                    <span>Funeral
                                        <span>Services</span>
                                    </span>
                                </div>
                                <img src="{{ asset('frontend/images/services-img1.png') }}" alt="">
                                <a class="big" href="#">More Info</a>
                            </div>
                        </div>
                        <div class="col-sm-4 margin_0">
                            <div class="s-block s-block2 to_animate">
                                <div>
                                    <span>Cremation
                                        <span>Services</span>
                                    </span>
                                </div>
                                <img src="{{ asset('frontend/images/services-img2.png') }}" alt="">
                                <a class="big" href="#">More Services</a>
                            </div>
                        </div>
                        <div class="col-sm-4 margin_0">
                            <div class="s-block s-block3 to_animate">
                                <div>
                                    <span>Cemetery
                                        <span>Services</span>
                                    </span>
                                </div>
                                <img src="{{ asset('frontend/images/services-img3.png') }}" alt="">
                                <a class="big" href="#">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="ls ls section_padding_top_100 section_padding_bottom_100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row vertical-tabs">
                                <div class="col-sm-4">

                                    <!-- Nav tabs -->
                                    <ul class="nav" role="tablist">
                                        <li class="active">
                                            <a href="#vertical-tab1" role="tab" data-toggle="tab">
                                                <i class="fa fa-circle-thin"></i> When Someone Dies
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#vertical-tab2" role="tab" data-toggle="tab">
                                                <i class="fa fa-circle-thin"></i> Eveniet
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#vertical-tab3" role="tab" data-toggle="tab">
                                                <i class="fa fa-circle-thin"></i> Dolorum
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#vertical-tab4" role="tab" data-toggle="tab">
                                                <i class="fa fa-circle-thin"></i> Nolestiae
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-8">

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="vertical-tab1">
                                            <h3 class="color-2">What to Do</h3>
                                            <h2>When Someone Dies</h2>
                                            <br>
                                            <p>In most cases you will need to register the death within five days and it is best to visit the register office in the area in which the person died. This will help avoid delays getting the necessary documents. The following people can register
                                                a death:</p>
                                            <div>
                                                <ul class="list2">
                                                    <li>Any relative of the person who has died</li>
                                                    <li>Any person present at the death</li>
                                                    <li>A person who lives in the house where the person died</li>
                                                    <li>The person arranging the funeral, but not a funeral director.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="vertical-tab2">
                                            <h3 class="color-2">Lorem ipsum</h3>
                                            <h2>Dolor sit amet</h2>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptate, quas fugit facere possimus facilis odio delectus laborum id nobis expedita vitae molestiae a. Magnam aliquid architecto magni, quos omnis.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, enim saepe libero iure tenetur optio nisi aliquam molestias ratione magnam ab ut quod possimus hic suscipit doloremque, deleniti ipsa quia!</p>
                                        </div>
                                        <div class="tab-pane fade" id="vertical-tab3">
                                            <h3 class="color-2">Lorem ipsum</h3>
                                            <h2>Dolor sit amet</h2>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque repellat, reiciendis sint officia quia iure nam! Dicta omnis ex ipsa fugiat maiores, vero expedita facilis, suscipit quam obcaecati veniam voluptate.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis est, dolores, ex ducimus cumque iusto ipsam odit voluptatum autem error impedit obcaecati quisquam molestiae, optio porro inventore nostrum deleniti cupiditate.</p>
                                        </div>
                                        <div class="tab-pane fade" id="vertical-tab4">
                                            <h3 class="color-2">Lorem ipsum</h3>
                                            <h2>Dolor sit amet</h2>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium impedit asperiores illum nulla sint itaque laborum perferendis deleniti quo cumque, quisquam repudiandae molestias sunt ea delectus porro odio recusandae!</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus omnis quod eligendi mollitia vel optio neque id, assumenda! Quae at quisquam eum, dolorum ullam, maxime nesciunt ex modi minus illum!</p>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls parallax section_padding_100 dark_testimonials_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 to_animate">
                            <div class="row padding-bottom-55">
                                <div class="col-sm-8 col-md-9">
                                    <h2 class="text-left margin_0">Recent Obituaries</h2>
                                </div>
                                <div class="col-sm-4 col-md-3 widget widget_search">
                                    <form method="get" class="searchform form-inline" action="http://webdesign-finder.com/">
                                        <div class="form-group">
                                            <input id="widget-search-2" type="text" value="" name="search" class="form-control" placeholder="Search Obituaries">
                                        </div>
                                        <button type="submit" class="theme_button">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="owl-carousel" data-dots="false" data-nav="true" data-items="3" data-autoplay="true" data-autoplaySpeed="2300" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1">

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/01.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Robert
                                                <br>
                                                <span>Donowan</span>
                                            </h4>
                                            <span>May 8, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/02.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Jason
                                                <br>
                                                <span>Anderson</span>
                                            </h4>
                                            <span>May 7, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/03.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Elsabeth
                                                <br>
                                                <span>Stonem</span>
                                            </h4>
                                            <span>May 4, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/01.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Robert
                                                <br>
                                                <span>Donowan</span>
                                            </h4>
                                            <span>May 8, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/02.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Jason
                                                <br>
                                                <span>Anderson</span>
                                            </h4>
                                            <span>May 7, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/03.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Elsabeth
                                                <br>
                                                <span>Stonem</span>
                                            </h4>
                                            <span>May 4, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/01.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Robert
                                                <br>
                                                <span>Donowan</span>
                                            </h4>
                                            <span>May 8, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/02.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Jason
                                                <br>
                                                <span>Anderson</span>
                                            </h4>
                                            <span>May 7, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div>
                                    <div class="testimonials">
                                        <div>
                                            <img src="{{ asset('frontend/images/orb/03.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <h4>Elsabeth
                                                <br>
                                                <span>Stonem</span>
                                            </h4>
                                            <span>May 4, 2016</span>
                                            <br>
                                            <p>Share / Send Flowers</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->


                            </div>
                            <!-- .owl-carousel -->
                        </div>
                        <!-- .col- -->
                    </div>
                    <!-- .row -->
                </div>
            </section>

            <section class="ls ms section_padding_top_100 section_padding_bottom_100">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12 section-heading text-center">
                            <h3>Phoenix</h3>
                            <h2>Pricing Table</h2>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4 to_animate" data-animation="pullUp">
                            <ul class="price-table style2">
                                <li class="plan-name">
                                    <h4>Cremation Only</h4>
                                    <span>& 2999</span>
                                </li>

                                <li class="features-list">
                                    <ul>
                                        <li>
                                            <a href="#">Services of Director & Staff</a>
                                        </li>
                                        <li>
                                            <a href="#">Initial Transfer of Deceased</a>
                                        </li>
                                        <li>
                                            <a href="#">Process Dressing & Cosmetizing</a>
                                        </li>
                                        <li>
                                            <a href="#">Cremation Process</a>
                                        </li>
                                        <li>
                                            <a href="#">Private Family Goodbye</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="call-to-action">
                                    <a href="#" class="theme_button color1">Order Cremation</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-12 col-md-4 to_animate" data-animation="pullDown">
                            <ul class="price-table style2">
                                <li class="plan-name colored-li">
                                    <h4>Deluxe Cremation</h4>
                                    <span>& 5499</span>
                                </li>
                                <li class="features-list">
                                    <ul>
                                        <li>
                                            <a href="#">Services of Director & Staff</a>
                                        </li>
                                        <li>
                                            <a href="#">Initial Transfer of Deceased</a>
                                        </li>
                                        <li>
                                            <a href="#">Embalming Service</a>
                                        </li>
                                        <li>
                                            <a href="#">Dressing & Cosmetizing</a>
                                        </li>
                                        <li>
                                            <a href="#">Flower Transportation</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="call-to-action">
                                    <a href="#" class="theme_button color1">Order Service</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-12 col-md-4 to_animate" data-animation="pullUp">
                            <ul class="price-table style2">
                                <li class="plan-name">
                                    <h4>Traditional Funeral</h4>
                                    <span>& 3999</span>
                                </li>
                                <li class="features-list">
                                    <ul>
                                        <li>
                                            <a href="#">Funeral Transport Service</a>
                                        </li>
                                        <li>
                                            <a href="#">Funeral Dressing Process</a>
                                        </li>
                                        <li>
                                            <a href="#">Cosmetizing Funeral Flowers</a>
                                        </li>
                                        <li>
                                            <a href="#">Records and Goodbye Family Car</a>
                                        </li>
                                        <li>
                                            <a href="#">Dressing & Cosmetizing</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="call-to-action">
                                    <a href="#" class="theme_button color1">Order Funeral</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

            <section class="ls parallax color-bg section_padding_top_100 section_padding_bottom_100 newsletter_section">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 to_animate" data-animation="expandOpen">
                            <div class="text-center">
                                <h3>365 days</h3>
                                <h2>Of Affirmation</h2>
                                <p>Sign up for our daily email affirmations by entering your information below.</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-push-3">

                                    <form class="contact-form columns_padding_5" method="post" action="http://webdesign-finder.com/">
                                        <div class="col-sm-12 col-md-6">
                                            <p class="contact-form-name">
                                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                            </p>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <p class="contact-form-email">
                                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                                            </p>
                                        </div>

                                        <div class="col-sm-12 text-center">
                                            <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button inverse3">Subscribe</button>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_100 section_padding_bottom_100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 section-heading text-center">
                            <h3>Phoenix</h3>
                            <h2>Recent News</h2>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 to_animate">
                            <div class="recent-post">
                                <div class="post-img">
                                    <img src="{{ asset('frontend/images/blog/top-01.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <div>
                                        <span>
                                            <i class="fa fa-calendar"></i> May 8, 2016</span>
                                        <a href="#">
                                            <i class="fa fa-comment-o"></i> 23 Comments</a>
                                    </div>
                                </div>
                                <div class="text-center post-content">
                                    <h4>
                                        <a href="#">Lorem ipsum dolor</a>
                                    </h4>
                                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 to_animate">
                            <div class="recent-post">
                                <div class="post-img">
                                    <img src="{{ asset('frontend/images/blog/top-02.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <div>
                                        <span>
                                            <i class="fa fa-calendar"></i> May 3, 2016</span>
                                        <a href="#">
                                            <i class="fa fa-comment-o"></i> 16 Comments</a>
                                    </div>
                                </div>
                                <div class="text-center post-content">
                                    <h4>
                                        <a href="#">Sit consetetur</a>
                                    </h4>
                                    <p>Aliquyam erat, sed diam voluptua vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 to_animate">
                            <div class="recent-post">
                                <div class="post-img">
                                    <img src="{{ asset('frontend/images/blog/top-03.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <div>
                                        <span>
                                            <i class="fa fa-calendar"></i> April 29, 2016</span>
                                        <a href="#">
                                            <i class="fa fa-comment-o"></i> 47 Comments</a>
                                    </div>
                                </div>
                                <div class="text-center post-content">
                                    <h4>
                                        <a href="#">Elitr sediam nonumy</a>
                                    </h4>
                                    <p>No sea takimata sanctus est orem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="partners-block">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel partners-carousel owl-theme owl-loaded" data-dots="false" data-items="6" data-responsive-lg="6" data-responsive-md="6" data-responsive-sm="4" data-responsive-xs="2" data-margin="10">

                            <div class="item">
                                <div>
                                    <a title="" href="#">
                                        <img src="{{ asset('frontend/images/partner1.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <div>
                                    <a title="" href="#">
                                        <img src="{{ asset('frontend/images/partner2.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <div>
                                    <a title="" href="#">
                                        <img src="{{ asset('frontend/images/partner3.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <div>
                                    <a title="" href="#">
                                        <img src="{{ asset('frontend/images/partner4.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <div>
                                    <a title="" href="#">
                                        <img src="{{ asset('frontend/images/partner5.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <div>
                                    <a title="" href="#">
                                        <img src="{{ asset('frontend/images/partner6.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- .item -->
                        </div>
                    </div>
                </div>
            </section>
        
@stop