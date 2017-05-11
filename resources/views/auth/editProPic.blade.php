@extends('layouts.frontend')
    @section('content')
        
		<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index')}}">Home</a></li>
                            <li><a href="{{ route('profile')}}">Profile</a></li>
                            <li>Edit Profile Picture</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
         <div class="container">
            <div class="row">  
                <div class="col-md-12 col-sm-12">
                @include('admin.includes.alert')
                    <div class="login-form">
                        <h3>Edit Profile</h3>
                         
                        {!! Form::open(array('route' => 'postEditProfilePicture', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true)) !!}

                        <div class="form-group">
                            {!! Form::label('image', "New Profile Picture*", array('class' => 'control-label col-lg-2')) !!}
                          
                            <div class="col-lg-10">
                                {!! Form::file('image',  array('class' => 'form-control', 'onchange' => 'loadFile(event);', 'required' => 'required', 'multiple' => false)) !!}
                            </div>
                        </div>
        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                            {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
                            </div>
                        </div>


                    {!! Form::close() !!}
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-4">
                    <a href="#" class="btn btn-fb-login"><i class="fa fa-facebook"></i> Login With Facebook</a>
                </div> -->
            </div>
        </div>
        <div class="divide60"></div>

@endsection