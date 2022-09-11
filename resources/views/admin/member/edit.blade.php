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
                                <a class="pull-right" href="{!! route('member.list')!!}"><button class="btn btn-success">Member List</button></a>
                            </div>
                         </div>
                    </div>

                    <div class="panel-body">
                            
                            <div class=" form"> 

                                {!! Form::model($member, array('route' => ['member.update',$member->id], 'method' => 'PUT', 'class' => 'cmxform form-horizontal tasi-form' ,'files' => true)) !!}


                                <div class="form-group">
                                    {!! Form::label('year', "Year*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('year', null, array('class' => 'form-control', 'placeholder' => '2022', 'required' => 'required', 'aria-required' =>'true')) !!}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="nth_of_committee" class="control-label col-lg-2">Nth of Committee</label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="25" name="nth_of_committee" type="number" value="{{ $member->nth_of_committee }}" id="nth_of_committee">
                                            <span class="input-group-addon">th</span>
                                        </div>
                                    </div>
                                </div>

                                    <div class="form-group">
                                        {!! Form::label('name', 'Name (required)', array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Member Name', 'required' => 'required')) !!}
                                        </div>
                                    </div>
                                   
                                <div class="form-group">
                                    {!! Form::label('designation', "Designation*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('designation', null, array('class' => 'form-control', 'placeholder' => 'Designation Of The Member', 'required' => 'required')) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('contact', "Member Contact*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('contact', null, array('class' => 'form-control','placeholder' => 'Contact No Of Member',  'required')) !!}
                                    </div>
                                </div>


                                <div class="form-group">
                                    {!! Form::label('info', "Member Info*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('info', null, array('class' => 'form-control', 'placeholder' => 'Enter Member Info', 'required' => 'required', 'aria-required' =>'true')) !!}
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    {!! Form::label('rank', "Member Rank*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::number('rank', null, array('class' => 'form-control', 'placeholder' => 'Enter Member Rank', 'required' => 'required', 'aria-required' =>'true')) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('status', "Status", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::select('status', $status, $member->status, array('class' => 'form-control', 'placeholder' => 'Enter Member Info')) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('image', "Profile Picture (300* 300)", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        <img src="{{ asset($member->photo) }}" alt="" width="300px">
                                        <- Existing Photo
                                        <br><br>
                                        <p>Note: Photo must be square and should not be more than 300*300</p>
                                        {!! Form::file('image',  array('class' => 'form-control', 'multiple' => 'false')) !!}<br>
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                        {!! Form::submit('Save Changes', array('class' => 'btn btn-success', 'placeholder' => 'Change photo')) !!}
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