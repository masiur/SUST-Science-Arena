@extends('layouts.frontend')
    @section('content')
        
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Log In</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li>Log In</li>
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
                        <h3>Log In</h3>
                         <form role="form" method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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