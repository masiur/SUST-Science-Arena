@extends('layouts.frontend')
    @section('content')
        
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Register</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index')}}">Home</a></li>
                            <li>Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
         <div class="container">
            <div class="row">  
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                @include('admin.includes.alert')
                    <div class="login-form">
                        <h3>Register</h3>
                         <form role="form" method="POST" action="{{ route('postRegister') }}">
                          {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1"> Address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Where you live">
                        </div>


                          <div class="form-group">
                            <label for="exampleInputEmail1">Contact no</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Contact no">
                        </div>


                          <div class="form-group">
                            <label for="exampleInputEmail1">Bio</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Say something about you">
                        </div>


                          <div class="form-group">
                            <label for="exampleInputEmail1">Occupation</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Occupation">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>   


                        <div class="form-group">
       Add your image:<br>
        {!! Form::file('image') !!}
    </div>



                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-theme-bg">Login</button>
                        <a href="#" class="btn btn-fb-login"><i class="fa fa-facebook"></i> Login With Facebook</a>
                        <a href="#">Forget Password?</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divide60"></div>

@endsection