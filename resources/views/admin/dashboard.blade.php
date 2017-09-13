@extends('layouts.default')
    @section('content')
        @include('admin.includes.alert')
        <div class="wraper container-fluid">
            <div class="page-title">
                <h3 class="title">Welcome ! <i>{{ Auth::user()->profile->fullName }}</i></h3>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 white-bg">
                        <i class="ion-android-contacts text-success"></i> 
                        <h2 class="m-0 counter">{!! $users->count() !!}</h2>
                        <div>Active Users</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 white-bg">
                        <i class="ion-android-contacts text-success"></i> 
                        <h2 class="m-0 counter">{!! \App\Models\User::where('activation_status', 0)->count() !!}</h2>
                        <div>Inactive Users</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 white-bg">
                        <i class="ion-ios7-pricetag text-info"></i> 
                        <h2 class="m-0 counter">{!! (\App\Models\Blog::count()) !!}</h2>
                        <div>Blog Posts</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 white-bg">
                        <i class="ion-eye text-pink"></i> 
                        <h2 class="m-0 counter">{!! (\App\Models\Event::count()) !!}</h2>
                        <div>Events</div>
                    </div>
                </div>

                
            </div> <!-- end row -->
           

        <br><!-- <br><br> -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-color panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-users"></i> User Registration</h3>
                        </div>
                        <div class="panel-body"><br>
                            {!! $userChart->render() !!}
                        </div>
                    </div>
                    
                </div>
            </div>




        </div>
@stop

@section('style')

{!! Charts::assets() !!}


@endsection

