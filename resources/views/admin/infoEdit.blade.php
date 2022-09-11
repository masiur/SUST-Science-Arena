
@extends('layouts.default')
@section('content')
    <div class="wraper container-fluid">

        @include('admin.includes.alert')
        <!-- <div class="page-title"> 
            <h3 class="title">{!!$title!!}</h3> 
        </div> -->
        <!-- Masiur Rahman Siddiki -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                    <h4>{{ $title }}</h4>
                            </div>
                            <div class="col-md-6">                            
                                <a class="pull-right" href="{!! route('member.list')!!}"><button class="btn btn-success">SSA Committee</button></a>
                            </div>
                         </div>
                    </div>

                    <div class="panel-body">
                            
                                <div class=" form"> 

                                    {!! Form::model($info, array('route' => ['info.update',$info->id], 'method' => 'PUT', 'class' => 'cmxform form-horizontal tasi-form' ,'files' => false)) !!}


                                    <div class="form-group">
                                        {!! Form::label('contact', 'Contact (required)', array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('contact', null, array('class' => 'form-control', 'placeholder' => 'Enter Contact', 'required' => 'required')) !!}
                                        </div>
                                    </div>


                                   
                                <div class="form-group">
                                    {!! Form::label('email', "SSA Email*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email Of SSA', 'required' => 'required')) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('fb_link', "Facebook Link Of SSA*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('fb_link', null, array('class' => 'form-control','placeholder' => 'Facebook Page Link',  'required')) !!}
                                    </div>
                                </div>


                               

                                <div class="form-group">
                                    {!! Form::label('twitter_link', "Twitter Link", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('twitter_link', null, array('class' => 'form-control', 'placeholder' => 'Enter Twitter Link',  'aria-required' =>'true')) !!}
                                    </div>
                                </div>

                                    <div class="form-group">
                                        {!! Form::label('youtube_link', "Youtube Link*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('youtube_link', null, array('class' => 'form-control', 'placeholder' => 'Enter Youtube Link', 'required' => 'required', 'aria-required' =>'true')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('googleplus_link', "Instagram Link", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('googleplus_link', null, array('class' => 'form-control', 'placeholder' => 'Enter Instagram Link',  'aria-required' =>'true')) !!}
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
                </div>

            </div>

        </div>

@stop


@section('style')

    {!! Html::style('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css') !!}
    {!! Html::style('assets/summernote/summernote.css') !!}
@stop

@section('script')

    {!! Html::script('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js') !!}
    {!! Html::script('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js') !!}
    {!! Html::script('assets/summernote/summernote.min.js') !!}


    {!! Html::script('assets/jquery.validate/jquery.validate.min.js') !!}
    {!! Html::script('assets/jquery.validate/form-validation-init.js') !!}



    <!-- for editor-->
    <script type="text/javascript">

        // jQuery(document).ready(function(){
                
        //         $('.wysihtml5').wysihtml5();

        //         $('.summernote').summernote({
        //             height: 200,                 // set editor height

        //             minHeight: null,             // set minimum height of editor
        //             maxHeight: null,             // set maximum height of editor

        //             focus: true                 // set focus to editable area after initializing summernote
        //         });

        // });
    </script>


@stop