@extends('layouts.frontend')
    @section('content')
        @include('admin.includes.alert')
        <!--rev slider start-->

        <div class="tp-banner-container">
            <div class="tp-banner-boxed">
                <ul>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/ssacover.jpg') }}"   alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption sfb bold uppercase-title text-center"
                             data-x="center"
                             data-y="158" 
                             data-speed="900"
                             data-start="800"
                             data-easing="Sine.easeOut">Hello! This is SSA</div>
                        <div class="caption sfb lowercase-caption text-center" 
                             data-x="center"
                             data-y="218"
                             data-speed="900"
                             data-start="1500"
                             data-easing="Sine.easeOut">A responsive site template with a clean and profession design 
                            <br />that will be a great solution for your business, portfolio, Shop or any other purpose.</div>
                        <!-- <div class="caption rev-buttons tp-resizeme sfb" 
                             data-x="center" 
                             data-y="313"
                             data-speed="900"
                             data-start="2200" 
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Purchase Now</a>
                        </div> -->
                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/ssacover.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <div class="tp-caption lft"
                             data-x="578"
                             data-y="120" 
                             data-speed="900"
                             data-start="2100"
                             data-easing="Sine.easeOut">
                            <img src="{{ asset('img/ssacover.jpg') }}" alt="" />
                        </div>

                        <div class="tp-caption sft modern_big_bluebg rev-title-v1"
                             data-x="35" data-y="200"
                             data-speed="500"
                             data-start="800"
                             data-easing="Sine.easeOut">
                            Powerful Template
                        </div>
                        <div class="tp-caption sfr modern_big_bluebg rev-title-v1"
                             data-x="35"
                             data-y="265"
                             data-speed="500"
                             data-start="1300"
                             data-easing="Sine.easeOut">
                            Unlimited layouts
                        </div>
                        <!-- <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="35"
                             data-y="330"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Purchase Now</a>
                        </div> -->
                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/ssacover.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption lft"
                             data-x="35" 
                             data-y="140"
                             data-speed="900"
                             data-start="800" 
                             data-easing="Sine.easeOut">
                            <img src="rev-images/macbook.png" alt="" />
                        </div>
                        <div class="tp-caption lfr"
                             data-x="375"
                             data-y="180"
                             data-speed="900" 
                             data-start="1500"
                             data-easing="Sine.easeOut">
                            <img src="rev-images/ipad.png" alt="" />
                        </div>
                        <div class="tp-caption lfl" 
                             data-x="348"
                             data-y="249"
                             data-speed="900"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <img src="rev-images/iphone.png" alt="" />
                        </div>
                        <div class="tp-caption sfr modern_big_redbg" 
                             data-x="750"
                             data-y="185"
                             data-speed="400"
                             data-start="2500"
                             data-easing="Sine.easeOut">
                            100% Responsive
                        </div>
                        <div class="tp-caption sfr modern_big_redbg"
                             data-x="750" 
                             data-y="237"
                             data-speed="400"
                             data-start="2900"
                             data-easing="Sine.easeOut">
                            80+ layouts
                        </div>
                        <div class="tp-caption sfr modern_big_redbg"
                             data-x="750" data-y="289"
                             data-speed="400"
                             data-start="3300" 
                             data-easing="Sine.easeOut">
                            Revolution Slider
                        </div>
                        <!-- <div class="caption sfr rev-buttons tp-resizeme " 
                             data-x="750"
                             data-y="341" 
                             data-speed="400" 
                             data-start="3700" 
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-lg border-white">See all features</a>
                        </div> -->


                    </li>
                </ul>
            </div>
        </div><!--full width banner-->

        <div class="divide60"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="center-heading">
                        <h2>What <strong>we do</strong> </h2>
                        <span class="center-line"></span>
                        <p class="sub-text margin40">
                            We want to present you a simple and functional template “ASSAN”. It is a powerful Multi-Purpose HTML 5 Template. Build whatever you like with this Template that looks effortlessly on-point in Business </p>
                    </div>
                </div>

            </div><!--center heading end-->
            <div class="divide50"></div>
            {{--
            <div class="row">
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed green">
                        <i class="pe-7s-magic-wand"></i>
                        <h3>Free support & updates</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed dark">
                        <i class="pe-7s-phone"></i>
                        <h3>Ultra responsive</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed blue">
                        <i class="pe-7s-like"></i>
                        <h3>made with love</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed red">
                        <i class="pe-7s-folder"></i>
                        <h3>Premium plugins</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
            </div>
             --}}
        </div><!--services container-->

        <div class="divide80"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2>Recent <strong>Events</strong></h2>
                        <span class="center-line"></span>
                    </div>
                </div>                   
            </div>
        </div>
        <div class="container">
            <div class="cube-masonry">

                <!-- <div id="filters-container" class="cbp-l-filters-alignCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".identity" class="cbp-filter-item">
                        Identity <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">
                        Web Design <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item">
                        Graphic <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic, .identity" class="cbp-filter-item">
                        Web Design & Identity <div class="cbp-filter-counter"></div>
                    </div>
                </div> -->

                <div id="masnory-container" class="cbp">
                    <div class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Easy Note<br>by Cosmin Capitanu" href="img/mas-1.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/mas-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Easy Note</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a class="cbp-caption cbp-lightbox" data-title="The Gang Blue<br>by Cosmin Capitanu"
                           href="img/img-1.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">The Gang Blue</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Tiger<br>by Cosmin Capitanu"
                           href="img/img-2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-2.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Tiger</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="Flat Roman Typeface Ui<br>by Cosmin Capitanu"
                           href="img/mas-2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/mas-2.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Flat Roman Typeface Ui</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu"
                           href="img/mas-2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/mas-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="Remind~Me More<br>by Tiberiu Neamu" href="img/img-3.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-3.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Remind~Me More</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu" href="img/img-4.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-4.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Workout Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Volume Knob<br>by Paul Flavius Nechita" href="http://vimeo.com/156783#">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-5.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Volume Knob</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Ski * Buddy<br>by Tiberiu Neamu" href="img/mas-2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/mas-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Ski * Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="Virtualization Icon<br>by Paul Flavius Nechita"
                           href="https://www.youtube.com/watch?v=dChhzNGHgnA">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-6.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Virtualization Icon</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita"
                           href="img/img-7.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-7.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="Sickpuppy<br>by Cosmin Capitanu" href="img/img-8.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-8.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Sickpuppy</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!--.cube masonry-->
        </div>
        <div class="divide50"></div>
        <div class="text-center">
            <a href="masonry-portfolio-4.html" class="btn btn-theme-dark btn-lg">View Past Events</a>
        </div>
        <div class="divide50"></div>
        {{-- Code
        <div class="wide-img-showcase">

            <div class="row margin-0 wide-img-showcase-row">
                <div class="col-sm-6 no-padding  img-2 ">
                    <div class="no-padding-inner ">
                        <div>&nbsp;</div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-6 no-padding gray">
                    <div class="no-padding-inner gray">
                        <h3 class="wow animated fadeInDownfadeInRight">Core features of <span class="colored-text">assan</span></h3>
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-tablet"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Fully Responsive</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-twitter"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>bootstrap 3</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--service box-->

                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-code"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>250+ valid HTML5 Pages and much more...</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                            <div class="divide30"></div>
                            <p><a href="#" class="btn btn-theme-dark btn-lg">Purchase Now</a></p>
                        </div><!--service box-->

                    </div>
                </div>
            </div>
        </div><!--wide image showcase end-->
        <section class="fun-fact-wrap fun-facts-bg">
            <div class="container">               
                <div class="row">
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">3800</span> +</h3>
                        <h4>Downloads</h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">8500</span></h3>
                        <h4>Happy Customers</h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">250</span> +</h3>
                        <h4>Valid layouts </h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">11000</span></h3>
                        <h4>Cups of tea</h4>
                    </div><!--facts in-->
                </div>
            </div>
        </section><!--fun facts-->
         --}} Code
        <div class="testimonials-v-2 wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="center-heading">
                            <h2><strong>What</strong> Advisor’s Say</h2>
                            <!-- <p>2600+ Worldwide customers  use Assan template.</p>
                            <span class="center-line"></span> -->

                        </div>
                    </div>
                </div><!--center heading end-->

                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="testi-slide">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('frontend/img/customer-1.jpg') }}" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                                    </p>
                                    <h4 class="test-author">
                                        Rick man - <em>rock inc</em>
                                    </h4>
                                </li><!--testi item-->
                                <li>
                                    <img src="{{ asset('frontend/img/customer-2.jpg') }}" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years </p>
                                    <h4 class="test-author">
                                        Jellia - <em>Founder of tinka inc</em>
                                    </h4>
                                </li><!--testi item-->
                                <li>
                                    <img src="{{ asset('frontend/img/customer-3.jpg') }}" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor.</p>
                                    <h4 class="test-author">
                                        Smith - <em>Ceo, company inc.</em>
                                    </h4>
                                </li><!--testi item-->
                            </ul>
                        </div><!--flex slider testimonials end here-->
                    </div>
                </div><!--testi slider row end-->

            </div>
        </div><!--testimonials v-2 end-->
        
        <!-- <div class="divide70"></div> -->
        
        <div class="divide40"></div>

        <div class="our-team-v-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>SSA <strong>EC</strong></h2>
                            <span class="center-line"></span>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-5.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-6.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-7.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-8.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                </div>
            </div>
        </div><!--our team v-2-->
        <div class="divide70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2><strong>latest</strong> news</h2>
                        <span class="center-line"></span>
                    </div>
                </div>                   
            </div>
            <div class="row">
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-8.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-3.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-6.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
            </div>
        </div><!--latest news-->

        <div class="divide40"></div>
        <!-- <div class="intro-text-1 light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="animated slideInDown">Assan is Simply creative Template
                        </h4>

                        <p>
                            Clean & powerful Easy to use multipurpose business HTML5 template.
                        </p>                   
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn border-theme btn-lg">Purchase now</a>
                    </div>
                </div>
            </div>
        </div> --> <!--intro text end-->
        
@stop