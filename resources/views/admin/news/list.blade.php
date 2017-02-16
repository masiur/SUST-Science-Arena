@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            @include('admin.includes.alert')
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>{{ $title }}</h4>
                                </div>
                                <div class="col-md-6">                            
                                     <a class="pull-right" href="{!! route('news.create') !!}"><button class="btn btn-success">Add News</button></a>
                                </div>
                            </div>
                        </div>            
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                @if(count($news))
                                    <table  id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>News title</th>
                                            <th>Details</th>
                                            <th>Date</th>
                                            <th>Place</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($news as $news)

                                            <tr>
                                                <td><?php echo $newsCounter++; ?></td>
                                                <td>
                                                    <a class="show-project-modal" data-toggle="modal" data-project-id="{{ $news->id }}" data-project-url="{!! route('news.show',$news->id) !!}" href="#" style="">{!! $news->title !!}</a>
                                                </td>
                                                
                                                <td><a class="btn btn-success btn-xs btn-archive Editbtn" href="{!! route('news.edit',$news->id)!!}"  style="margin-right: 3px;">Edit</a></td>
                                                <td><a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $news->id !!}">Delete</a></td>
                                            </tr>
                                            
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    No News added yet. 
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@if(count($news))  
@include('sections.modals')  <!-- the two modals of this page  is kept in another folder for convenience  -->
@else
@endif

@stop

@section('style')

{!! Html::style('assets/datatables/jquery.dataTables.min.css') !!}

@endsection

@section('script')

    {!! Html::script('assets/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/datatables/dataTables.bootstrap.js') !!}




    <!-- for Datatable -->
    <script type="text/javascript">

        $(document).ready(function() {
            
            $('#dataTable').dataTable();

            $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('news.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

            
                // these above code concept line was borrowed from legaats project which was done by Mr. Md. Nayeem Iqubal Joy. Also , he helped dubugging it. 
        });
    </script>


@stop
