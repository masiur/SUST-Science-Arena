@extends('layouts.frontend')
    @section('content')

	<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Writing Article</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index')}}">Home</a></li>
                            <li><a href="{{ route('blog.index')}}">Blog</a></li>
                            <li>Writing Article</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
         <div class="container">
         @include('admin.includes.alert')
            <div class="row">  
                <div class="col-md-10 col-sm-10">
                    <div class="login-form">
                        <h3>{{ $title }}</h3>
                         <form role="form" method="POST" action="{{route('blog.store') }}"  enctype="multipart/form-data">
                          {{ csrf_field() }}

                        <div class="form-group">
                            {!! Form::label('title', "Title*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Article Title', 'required' => 'required')) !!}
                            </div>
                        </div><br><br>

                        <div class="form-group">
                            {!! Form::label('details', "Details*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::textarea('details', null, array('class' => 'form-control summernote', 'placeholder' => 'Article Content Goes Here', 'required' => 'required')) !!}
                            </div>
                        </div><br><br><br>

                        <div class="form-group">
                            {!! Form::label('details', "Details*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::select('category_id', $categories, null, array('class' => 'form-control ', 'placeholder' => 'Select Category', 'required' => 'required')) !!}
                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                            {!! Form::submit('Create Article', array('class' => 'btn btn-theme-bg')) !!}
                            </div>
                        </div>

                        

                        <!-- <div class="form-group">
                            <label for="exampleInputProfilePicture">Profile Picture</label>
                            <input type="file" name="photo" class="form-control" id="exampleInputProfilePicture" multiple="false">
                        </div> -->
         
                       

                    </form>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <a href="#" class="btn btn-fb-login"><i class="fa fa-facebook"></i> Login With Facebook</a>
                </div>
            </div>
        </div>
        <div class="divide60"></div>
    @endsection

@section('style')

    {!! Html::style('assets/summernote/summernote.css') !!}
@stop

@section('script')

    {!! Html::script('assets/summernote/summernote.min.js') !!}

    <!-- for editor-->
   <script type="text/javascript">

        jQuery(document).ready(function(){
                
                // $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

        });
    </script>
 


@stop