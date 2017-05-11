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
                                    <li>Phone: {!! $member->contact !!}</li> 
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                    @endforeach

                    {{-- 
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="{{ asset('img/vp.jpg') }}" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Khoirom Kameshwar</h3>
                                <em>Sr. Vice President</em>
                                <!-- <ul class="list-inline top-social">
                                    <li>{!! $member->info !!}</li>
                                    <li>{!! $member->contact !!}</li>
                                    
                                </ul> -->
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="{{ asset('img/gs.jpg') }}" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Rifat Hyder</h3>
                                <em>General Secretary</em>
                                <!-- <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    
                                </ul> -->
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-8.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    --}}
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

       <div class="divide60"></div> 
         <div class="divide60"></div> 



@stop

