@extends('layouts.frontend')
    @section('content')

         <!--navbar-default-->
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>{{ $title }}</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li>{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container blog-left-img">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                @include('admin.includes.alert')
                    <div class="blog-post">

                        <div class="row">
                        
                            <div class="col-md-4 col-md-offset-1">
                                <center>
                                <a>   
                                 <img src="{{ asset($user->profile->img_url) }}" class="img-responsive img-circle" alt="Profile Picture" width="250px">                
                                </a><br>
                                <a href="{{ route('editProfilePicture') }}" class="btn btn-primary">Edit Profile Picture</a>
                                </center>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <h3>{{ $user->profile->fullName }}</h3>
                                <p><i>Username:</i> {{ $user->username }}</p>
                                <p><i>Email:</i> {{ $user->email }}</p>
                                <p><i>Phone:</i> {{ $user->profile->phone }}</p>
                                <p><i>Address:</i> {{ $user->profile->address }}</p>
                                <p><i>Occupation:</i> {{ $user->profile->occupation }}</p>
                                <p><i>Bio:</i> {{ $user->profile->bio }}</p>

                                <a href="{{ route('settings') }}" class="btn btn-primary">Edit Profile</a>
                            </div>
                           <!--  <div class="col-md-2">
                                <a href="{{ route('settings') }}" class="btn btn-primary">Edit Profile</a>
                            </div> -->
                        </div>
                    </div><!--blog post-->

                  
                
                </div><!--sidebar-col-->
            </div><!-- row for blog post -->
       </div><!--blog full main container -->

    @endsection



