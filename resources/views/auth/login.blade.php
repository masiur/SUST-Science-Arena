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
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                @include('admin.includes.alert')
                    <div class="login-form">
                        <h3 class="text-center">Log In</h3>
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
                        {{--                 
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                        --}}   
                        <button type="submit" class="btn btn-theme-bg">Login</button><br><br>
                        <!-- <a href="#" class="btn btn-fb-login"><i class="fa fa-facebook"></i> Login With Facebook</a> -->
                        <a  data-toggle="modal" href="#myModal"><i class="fa fa-lock m-r-5"></i> Forget Password?</a>
                         <!-- <div class="col-sm-7 text-right">
                <a data-toggle="modal" href="#myModal"> Forgot your password?</a>
            </div> -->
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divide60"></div>

<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>


                {!! Form::open(array('route' => 'postPasswordRequest', 'method' => 'post')) !!}

                {!! Form::email('email', '', array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email Address', 'autocomplete'=>'off')) !!}

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>

                {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- modal -->

@endsection