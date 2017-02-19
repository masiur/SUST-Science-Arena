<!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo.jpg') }}" alt="SUST Science Arena"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a><h4>SUST Science Arena</h4></a></li>
                        <li class="dropdown {!! Menu::isActiveRoute('index') !!} ">
                            <a href="{{ route('index') }}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                            
                        </li>
                        <!--menu home li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu multi-level" role="menu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Cube Portfolio </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="juicy-portfolio.html"> Juicy Projects</a></li>
                                        <li><a href="cube-fullwidth.html"> Full Width</a></li>
                                        <li><a href="cube-masonry.html"> Masonry</a></li>                         
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Grid Text Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-2.html"> 2 Columns</a></li>
                                        <li><a href="portfolio-3.html"> 3 Columns</a></li>
                                        <li><a href="portfolio-4.html"> 4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Grid Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="grid-portfolio-2-no-text.html">2 Columns</a></li>
                                        <li><a href="grid-portfolio-3-no-text.html">3 Columns</a></li>
                                        <li><a href="grid-portfolio-4-no-text.html">4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">No space Full width </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-width-2.html">2 columns</a></li>
                                        <li><a href="portfolio-full-width-3.html">3 columns</a></li>
                                        <li><a href="portfolio-full-width-4.html">4 columns</a></li>                         
                                        <li><a href="portfolio-full-width-5.html">5 columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">No Space Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-no-space-bx-2.html"> 2 Columns</a></li>
                                        <li><a href="portfolio-no-space-bx-3.html"> 3 Columns</a></li>
                                        <li><a href="portfolio-no-space-bx-4.html"> 4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Portfolio Masonry </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="masonry-portfolio-3.html"> 3 Columns</a></li>
                                        <li><a href="masonry-portfolio-4.html"> 4 Columns</a></li>
                                        <li><a href="masonry-portfolio-full.html"> Full Width</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Portfolio Items</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-single.html">Single item</a></li>
                                        <li><a href="portfolio-single-2.html">Single item 2</a></li>                                                             
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <!--menu Portfolio li end here-->
                        <li class="dropdown {!! Menu::areActiveRoutes(['blog.myblog', 'blog.index']) !!}">
                            <a href="{{ route('blog.index' ) }}" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('blog.index') }}">Blog Public Page</a></li>
                                @if(auth()->check())
                                <li><a href="{{ route('blog.myblog') }}">My Article</a></li>
                                <li><a href="{{ route('blog.create') }}">Write an Article</a></li>
                                @endif
                                
                                
                            </ul>
                        </li>
                        <!--menu blog li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="me.html">About - Me</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="pricing.html">Our Pricing</a></li>                                
                                <li><a href="faq.html">FAQS</a></li> 
                                <li><a href="email-template.html">Email Template</a></li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Contact </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact.html"> Contact default</a></li>
                                        <li><a href="contact-advanced.html">Contact advanced</a></li>
                                        <li><a href="contact-option.html">Contact option</a></li>
                                        <li><a href="contact-flat.html">Contact Flat</a></li>
                                    </ul>
                                </li>                                          
                                <li><a href="search-results.html">Search Results</a></li>                                
                                <li><a href="career.html">Career</a></li>
                                <li><a href="gallery.html">Gallery</a></li>

                                <li><a href="process.html">Our Process</a></li>

                            </ul>
                        </li>
                        <!--menu pages li end here-->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features  <i class="fa fa-angle-down"></i></a> 
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Headers </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Header 1 - Default</a></li>
                                        <li><a href="header-dark.html">Header 2 - dark </a></li>
                                        <li><a href="header-transparent.html">header 3 - transparent </a></li>
                                        <li><a href="header-center-logo.html">header 4 - Logo center </a></li>
                                        <li><a href="header-side-panel.html">header 5 - Side panel </a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Footers </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Footer dark - 1</a></li>
                                        <li><a href="footer-2.html">Footer dark - 2</a></li>
                                        <li><a href="footer-3.html">Footer dark - 3 </a></li>
                                        <li><a href="footer-light-1.html">Footer Light - 1</a></li>
                                        <li><a href="footer-light-2.html">Footer Light - 2</a></li>
                                        <li><a href="footer-light-3.html">Footer Light - 3 </a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Page Templates </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="full-width.html">Full Width</a></li>                                                    
                                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="right-sidebar.html">Right sidebar</a></li>
                                        <li><a href="both-sidebar.html">Both Sidebar</a></li>
                                        <li><a href="both-right-sidebar.html">Both Right sidebar</a></li>
                                        <li><a href="both-left-sidebar.html">Both Left Sidebar</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Coming Soon </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="coming-soon-1.html">Coming soon 1</a></li>                                                    
                                        <li><a href="coming-soon-2.html">Coming soon 2</a></li>
                                        <li><a href="coming-soon-3.html">Coming soon 3</a></li>
                                    </ul>
                                </li> 
                                <li><a href="side-nav.html">side navigation </a></li>
                                <li><a href="maintenance-page.html">Maintenance page </a></li>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="error.html">Error - 404</a></li>
                                <li><a href="login-ragister.html">Login / Register</a></li>
                                <li><a href="login-ragister-classic.html">Login / Register - Classic </a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="site-map.html">Site Map</a></li>
                            </ul>
                        </li><!--features-->

                        <!--mega menu-->
                        <li class="dropdown ">
                            <a href="{{ route('contact') }}" class="dropdown-toggle" data-toggle="dropdown">Contact </a>
                            
                        </li> <!--menu Features li end here-->   

                        <!--                        <li class="dropdown">
                                                    <a href="#" class=" dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> Sign In</a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                                                        <form role="form">
                                                            <h4>Signin</h4>
                        
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Username">
                                                                </div>
                                                                <br>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                                    <input type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="checkbox pull-left">
                                                                    <label>
                                                                        <input type="checkbox"> Remember me
                                                                    </label>
                                                                </div>
                                                                <a class="btn btn-theme-bg pull-right">Login</a>
                                                                                                        <button type="submit" class="btn btn-theme pull-right">Login</button>                 
                                                                <div class="clearfix"></div>
                                                                <hr>
                                                                <p>Don't have an account! <a href="#">Register Now</a></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li> menu login li end here-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->