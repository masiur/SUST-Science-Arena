@extends('layouts.frontend')
    @section('content')
        @include('admin.includes.alert')
     <!--navbar-default-->
        <!-- <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>{{ $title }}</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li>Executives</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="divide30"></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="center-heading">
                        <h2><strong>{{ isset($members->first()->nth_of_committee) ? $members->first()->nth_of_committee."th - " : '' }} {{ $title }}</strong> </h2>
                        <span class="center-line"></span>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="{{ route('committee') }}" method="GET">
                        <div class="form-inline float-end">

                            <label for="committee" class="col-form-label">Select Year</label>
                            <select class="form-control-xs" name="year">
                                @foreach($years as $year)
                                    <option
                                        {{ $year['year']==$yearRequest ? 'selected' : '' }} value="{{ $year['year'] }}">{{ $year['year'] }}</option>
                                @endforeach
                            </select>
                            {{--                            <div style="padding-left: 15px;">--}}
                            <button type="submit" class="btn btn-xs btn-secondary btn-success">Go to Committee</button>
                            {{--                            </div>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="divide30"></div>
 
            <div class="container">
                 
                <div class="row">
                    @foreach($members as $member)
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="{{ asset($member->photo) }}" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h5>{!! $member->name !!}</h5>
                                <em><b>{!! $member->designation !!}</b></em>
                                <ul class="list-inline top-social">
                                    <li>{!! $member->info !!}</li>
{{--                                    @if($member->contact) <li>Phone: {!! $member->contact !!}</li>@endif--}}
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                    @endforeach

                </div>
            </div>
 





        {{-- 
        <div class="container blog-left-img">
            <div class="row">
                <div class="col-lg-12">

                     <table  id="dataTable" class="table table-bordered">
                        <thead>
                        <tr>
                            <!-- <th>No.</th> -->
                            <th>Designation</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Info</th>                                                     
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <!-- <td>{!! $memberCounter++  !!}</td> -->
                                <td>{!! $member->designation !!}</td>
                                <td>{!! $member->name !!}</td>
                                <td>{!! $member->contact !!}</td>
                                <td>{!! $member->info !!}</td>
                               
                            </tr>                
                        @endforeach 
                        </tbody>
                    </table>

                  
                     <div class="sidebar-box margin40">
                       <!-- <h4>Tag Cloud</h4> -->
                        <div class="tag-list">
                            <h4></h4> 
                        </div> 
                    </div> 
                    
                </div><!--sidebar-col-->
            </div><!-- row for blog post -->
       </div><!--blog full main container -->
       --}}


       <div class="divide60"></div> 




@stop

