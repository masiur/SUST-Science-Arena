@extends('layouts.frontend')
    @section('content')
        @include('admin.includes.alert')
     <!--navbar-default-->
        <div class="breadcrumb-wrap">
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
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
 
            <div class="container">   
                 
                <div class="row">
                    @foreach($members as $member)
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="{{ asset($member->photo) }}" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>{!! $member->name !!}</h3>
                                <em><b>{!! $member->designation !!}</b></em>
                                <ul class="list-inline top-social">
                                    <li>{!! $member->info !!}</li>
                                    @if($member->contact) <li>Phone: {!! $member->contact !!}</li>@endif
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

