@extends('layouts.frontend')
    @section('content')
    <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Article Details</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li>Article Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-post">
                            <div>
                                <img src="{{ asset('img/ssacover.jpg') }}" class="img-responsive" alt="workimg">
                            </div>                       
                        <ul class="list-inline post-detail">
                            <li>by <a href="#">{{ $blog->user->profile->fullName }}</a></li>
                            <li><i class="fa fa-calendar"></i> {{ $blog->created_at }}</li>
                            <li><i class="fa fa-tag"></i> <a href="#">{{ $blog->category->name }}</a></li>
                            <!-- <li><i class="fa fa-comment"></i> <a href="#">6 Comments</a></li> -->
                        </ul>
                        <h2>{{ $blog->title }}</h2>
                        <p>
                            {!! $blog->details !!}
                        </p> 
                    </div><!--blog post-->
                    <div class="about-author">
                        <h4 class="colored-text">About the Author</h4>
                        <img src="{{ asset($blog->user->profile->img_url) }}" class="img-responsive" alt="{{ $blog->user->profile->fullName }}">
                        <p>
                            {{ $blog->user->profile->bio }}
                        </p>
                    </div><!--about author-->
                    
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
                <div class="col-md-3 col-md-offset-1">
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
                    <div class="sidebar-box margin40">
                        <h4>Categories</h4>
                        <ul class="list-unstyled cat-list">
                            @foreach($categories as $category)
                            <li> <a href="#">{{ $category->name }}</a> <i class="fa fa-angle-right"></i></li>
                            @endforeach
                        </ul>
                    </div><!--sidebar-box-->
                    <div class="sidebar-box margin40">
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
                    </div><!--sidebar-box-->
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
        </div><!--blog full main container-->
        <div class="divide60"></div>

          
    @endsection