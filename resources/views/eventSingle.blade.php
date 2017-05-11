@extends('layouts.frontend')
    @section('content')
    <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Event Details</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('blog.index') }}">Event</a></li>
                            <li>Event Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="event-post">
                            <div>
                                <img src="{{ asset($event->img_url) }}" class="img-responsive" alt="workimg">
                            </div> </div></br> </br>                     
                        <ul class="list-inline post-detail">
                            <li> Palce : <a href="#">{{ $event->place }}</a></li>
                            <li> Date : <a href="#">{{ $event->date }}</a></li>
                            <li><i class="fa fa-calendar"></i> {{ $event->updated_at->diffForHumans() }}</li>
                        </ul></br>
                    

                        <h2>{{ $event->name }}</h2>
                        <p>
                            {!! $event->description !!}
                        </p> 
                   
                    <div class="divide60"></div>
                    <!-- <div class="comment-form">
                        <h3>Leave Comment</h3>
                        <div class="form-contact">
                            <form role="form">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="email" class="form-control" id="name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="password" class="form-control" id="email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="message">Comment</label>
                                    <textarea class="form-control" rows="7" id="message" required=""></textarea>
                                </div>                      
                                <button type="submit" class="btn btn-theme-bg btn-lg pull-right">Comment</button>
                            </form>
                        </div>
                    </div> -->
                </div><!--col-->
                <div class="col-md-2">
                    <!-- <div class="sidebar-box margin40">
                        <h4>Search</h4>
                        <form role="form" class="search-widget">
                            <input type="text" class="form-control">
                            <i class="fa fa-search"></i>
                        </form>
                    </div> --><!--sidebar-box-->
                    <!-- <div class="sidebar-box margin40">
                        <h4>Text widget</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                        </p>
                    </div> --><!--sidebar-box-->
                  
                    <!-- <div class="sidebar-box margin40">
                        <h4>Popular Post</h4>
                       <ul class="list-unstyled popular-post">
                            <li>
                                <div class="popular-img">
                                    <a href="#"> <img src="img/img-7.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="popular-desc">
                                    <h5> <a href="#">blog post image</a></h5>
                                    <h6>31st july 2014</h6>
                                </div>
                            </li>
                            <li>
                                <div class="popular-img">
                                    <a href="#"> <img src="img/img-8.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="popular-desc">
                                    <h5> <a href="#">blog post image</a></h5>
                                    <h6>31st july 2014</h6>
                                </div>
                            </li>
                            <li>
                                <div class="popular-img">
                                    <a href="#"> <img src="img/img-9.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="popular-desc">
                                    <h5> <a href="#">blog post image</a></h5>
                                    <h6>31st july 2014</h6>
                                </div>
                            </li>
                        </ul>
                    </div> --><!--sidebar-box-->
                    <!-- <div class="sidebar-box margin40">
                        <h4>Tag Cloud</h4>
                        <div class="tag-list">
                            <a href="#">Wordpress</a>
                            <a href="#">Design</a>
                            <a href="#">Graphics</a>
                            <a href="#">Seo</a>
                            <a href="#">Development</a>
                            <a href="#">Marketing</a>
                            <a href="#">fashion</a>
                            <a href="#">Media</a>
                            <a href="#">Photoshop</a>
                        </div>
                    </div> -->
                </div><!--sidebar-col-->
            </div><!--row for blog post-->

            <div id="disqus_thread"></div> <!-- disqus platform for comment  -->
        </div><!--blog full main container-->
        <div class="divide60"></div>

        

          
    @endsection

    @section('script') 
        <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = '//sust-science-arena.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



    @stop