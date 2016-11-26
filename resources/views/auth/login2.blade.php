<!DOCTYPE html>
<html class="no-js">
@include('pages.header')

<body>
    

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">
        	{{-- @include('pages.topline') --}}
        	@include('pages.navBar')
<!-- <br><br><br> -->
        	<section class="page_breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<ol class="breadcrumb">
								<li>
									<a href="http://webdesign-finder.com/">
										Home
									</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li class="active">Calculator</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

<br><br>
		<div class="container">
        	<div class="row">
        		<div class="col-md-4 col-md-offset-2">
        		<br>
   
            <h3 class="text-center">Log In</h3>
      
        
             @include('admin.includes.alert')

            {!! Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'form-horizontal')) !!}
            <div class="form-group ">
                <div class="col-xs-12">
                    {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'type'=>'text','autofocus')) !!}
                </div>
            </div>

            <div class="form-group ">

                <div class="col-xs-12">
                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text')) !!}
                </div>
            </div>



        <div class="form-group m-t-30">

                <div class="col-sm-5 ">
                    <label class="cr-styled">
                        <input type="checkbox" checked>
                        <i class="fa"></i>
                        Remember me
                    </label>
                </div>


            <div class="col-sm-7 text-right">
                <a data-toggle="modal" href="#myModal"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
            </div>

        </div>

        <div class="form-group">
            <br>
                 <div class="col-xs-6">
                    {!! Form::submit('Log in', array('class' => 'btn btn-lg btn-login btn-block btn-success ', 'type'=>'submit')) !!}
                </div>
                 <div class="col-xs-6">
                    <h5 class="text-center">Not Registered?</h5>
	        
			        <a class="" href="{{ route('register') }}">
			            Register
			        </a>
                </div>
        </div>




  
       <!--  <div class="registration">
	        <br>
	        <h5 class="text-center">Not Registered?</h5>
	        
	        <a class="btn btn-success" href="{{ route('register') }}">
	            Register
	        </a>
        </div> -->
 



        


        {!! Form::close() !!}

    </div>
    <div class="col-md-3">
	<br> 
	<h3>Or,</h3>
    <p>You can sign in via social network</p>

        <div class="login-social-link">
            <a href="{{ route('login/fb') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
       <!-- <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>Twitter</a> -->
            <a href="{{ route('login/gp') }}" class="btn btn-danger"><i class="fa fa-google-plus"></i> Google</a>
        </div>
	    
    </div>
</div>
</div>
        	

        	@include('pages.footer') 
        	@include('pages.copyright')

        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->


@include('pages.script')

</body>
</html>