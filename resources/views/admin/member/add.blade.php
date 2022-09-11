@extends('layouts.default')
@section('content')
    <div class="wraper container-fluid">

        @include('admin.includes.alert')
        <!-- <div class="page-title"> 
            <h3 class="title">{!!$title!!}</h3> 
        </div> -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                    <h4>{{ $title }}</h4>
                            </div>
                            <div class="col-md-6">                            
                                <a class="pull-right" href="{!! route('member.list')  !!}"><button class="btn btn-success">EC Member List</button></a>
                            </div>
                        </div>
                    </div>
                 
                        <div class="panel-body">
                                
                            <div class=" form"> 

                                {!! Form::open(array('route' => 'member.store' , 'method' => 'post', 'class' => ' form-horizontal' , 'files' => true )) !!}


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
                                            <input class="form-control" placeholder="25" name="nth_of_committee" type="number" value="" id="nth_of_committee">
                                            <span class="input-group-addon">th</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    {!! Form::label('name', "Member Name*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'John Doe', 'required' => 'required')) !!}
                                    </div>
                                </div>
                                   

                                <div class="form-group">
                                    {!! Form::label('designation', "Member Designation*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('designation', null, array('class' => 'form-control', 'placeholder' => 'Assistant General Secretary', 'required' => 'required')) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('contact', "Contact No", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('contact', null, array('class' => 'form-control','placeholder' => '+8801XXXXXXX')) !!}
                                    </div>
                                </div>

                            


                                <div class="form-group">
                                    {!! Form::label('info', "Member Info*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::text('info', null, array('class' => 'form-control', 'placeholder' => 'PSS 2012, SUST', 'required' => 'required')) !!}
                                    </div>
                                </div>



                                 <div class="form-group">
                                    {!! Form::label('rank', "Member Rank*", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::number('rank', 10, array('class' => 'form-control', 'placeholder' => 'E.g. 3, if you want give third priority', 'required' => 'required')) !!}<br>
                                        ** Rank is used to set order as they appear in public page ( executives )
                                    </div>
                                </div>


                                <div class="form-group">
                                    {!! Form::label('image', "Profile Picture", array('class' => 'control-label col-lg-2')) !!}
                                    <div class="col-lg-6">
                                        {!! Form::file('image',  array('class' => 'form-control', 'multiple' => 'false')) !!}<br>
                                    </div>
                                </div>
                                  

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-6">
                                    {!! Form::submit('Add Member', array('class' => 'btn btn-success')) !!}
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                                 
                        </div>
                </div>

            </div>

        </div>

@stop


 {{-- 

@section('style')

    {!! Html::style('chosen/chosen.css') !!}
    {!! Html::style('assets/summernote/summernote.css') !!}
@stop

@section('script')
   
    {!! Html::script('chosen/chosen.jquery.js') !!}






    <!-- for editor-->
   <!-- <script type="text/javascript">

        jQuery(document).ready(function(){
                
                $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

        });
    </script> -->
    <script type="text/javascript">
    // var config = {
    //   '.chosen-select'           : {},
    //   '.chosen-select-deselect'  : {allow_single_deselect:true},
    //   '.chosen-select-no-single' : {disable_search_threshold:10},
    //   '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
    //   '.chosen-select-width'     : {width:"95%"}
    // }
    // for (var selector in config) {
    //   $(selector).chosen(config[selector]);
    // }
    $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});
  </script>



@stop

--}}