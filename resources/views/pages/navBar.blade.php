
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                
                    
                    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo.jpg') }}" alt="SUST Science Arena"></a>

                </div>
                <h4 class="masiur-navlogo-pos"><a href="{{ route('index') }}">SUST Science Arena</a></h4>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li class="dropdown"><a><h4>SUST Science Arena</h4></a></li> -->
                        <li class="dropdown {!! Menu::isActiveRoute('index') !!} ">
                            <a href="{{ route('index') }}" class="dropdown-toggle">Home</a>
                            
                        </li>
                        <!--menu home li end here-->
                        <li class="dropdown">
                            <a href="{{ route('event.list') }}" class="dropdown-toggle ">Events</i></a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('committee.member') }}" class="dropdown-toggle ">Executives</i></a>
                            
                        </li>
                        <!--menu Portfolio li end here-->
                        <li class="dropdown {!! Menu::areActiveRoutes(['blog.myblog', 'blog.index']) !!}">
                            <a href="{{ route('blog.index' ) }}" class="dropdown-toggle">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('blog.index') }}">Blog Public Page</a></li>
                                @if(auth()->check())
                                <li><a href="{{ route('blog.myblog') }}">My Article</a></li>
                                @endif
                                <li><a href="{{ route('blog.create') }}">Write an Article</a></li>
                                
                                
                                
                            </ul>
                        </li>
                        <!--menu blog li end here-->
        
                        <!--mega menu-->
                        <li class="dropdown ">
                            <a href="{{ route('contact') }}" class="dropdown-toggle" >Contact</a>
                            
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
        </div>