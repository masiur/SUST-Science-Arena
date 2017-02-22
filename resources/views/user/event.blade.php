@extends('layouts.frontend')
    @section('content')
        @include('admin.includes.alert')
     <!--navbar-default-->
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>{{ $title }}</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container blog-left-img">
            <div class="row">
                <div class="col-md-8">


                @foreach($event as $events)

                    <div class="blog-post">

                        <div class="row">
                            <div class="col-md-6 margin20">
                                <a href="#">
                                    <div class="item-img-wrap">
                                        <img src="{{ asset($events->img_url) }}" class="img-responsive" alt="workimg">
                                        <div class="item-img-overlay">
                                            <span></span>
                                        </div>
                                    </div>                       
                                </a><!--work link--> 
                            </div>
                            <div class="col-md-6 margin20">
                                <ul class="list-inline post-detail">
                                    <li>by <a href="#">SSA</a></li>
                                    <li><i class="fa fa-calendar"></i> {{ $events->created_at }} </li>
                                   <!-- <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                                </ul> -->
                                <h2><a href="#">{{ $events->title }}</a></h2>
                                <p>
                                    {!! $events->description !!}
                                </p>
                                <p><a href="blog-single.html" class="btn btn-theme-dark">Read More...</a></p>
                            </div>
                        </div>
                    </div><!--blog post-->


                    @endforeach

                  
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
                    {!! $event->render() !!}
                </div><!--sidebar-col-->
            </div><!-- row for blog post -->
       </div><!--blog full main container -->
       <div class="divide60"></div> 

       <div class="divide60"></div> 
         <div class="divide60"></div> 

@stop