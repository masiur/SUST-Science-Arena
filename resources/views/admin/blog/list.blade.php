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
                                     <a class="pull-right"><button class="btn btn-success">All Articles</button></a>
                                </div>
                            </div>
                        </div>            
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                @if(count($blogs))
                                    <table  id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th> Article title</th>
                                            <th>Author</th>
                                            <th>#</th>
                                            <th>#</th>
<<<<<<< HEAD
                                            
=======
                                            {{-- <th>#</th> --}}
>>>>>>> f257a1fa222561ba9df58034ec0b1a8e63da9a52
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($blogs as $blog)

                                            <tr>
                                                <td><?php echo $blogCounter++; ?></td>
                                                <td>
                                                    <a class="show-project-modal"  href="#" style="">{!! $blog->title !!}</a>
                                                </td>
                                               
                                                

                                                <td>{!! $blog->user->username !!}</td>

<<<<<<< HEAD
                                            
=======
                                                <td><a class="btn btn-success btn-xs" href="{{ route('blog.single', str_slug($blog->title, '-')) }}" target="_blank"  style="margin-right: 3px;">Details</a>

                                                </td> 
>>>>>>> f257a1fa222561ba9df58034ec0b1a8e63da9a52

                                                @if($blog->published == 'no')
                                                 <td><a href="{!! route('ignore.blog',$blog->id)!!}" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $blog->id !!}">Accept</a></td>
                                                
                                                <td><a href="{!! route('ignore.blog',$blog->id)!!}" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $blog->id !!}">Disabled</a></td>
                                                @else

<<<<<<< HEAD
                                                 <td><a href="{!! route('ignore.blog',$blog->id)!!}" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $blog->id !!}">Accepted</a></td>
                                                
                                                <td><a href="{!! route('ignore.blog',$blog->id)!!}" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $blog->id !!}">Disable</a></td>


                                                @endif                                        
=======
                                                {{-- <td><a href="{!! route('ignore.blog',$blog->id)!!}" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $blog->id !!}">Ignore</a></td> --}}
>>>>>>> f257a1fa222561ba9df58034ec0b1a8e63da9a52
                                            </tr>
                                            
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    No pending article. 
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Demo Delete Modal -->
<div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure to delete?
            </div>
            <div class="modal-footer">
                {!! Form::open(array('route' => array('ignore.blog'), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                {!! Form::submit('Yes, Delete', array('class' => 'btn btn-success', 'id' =>'deleteButtonYes')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


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
                var url = "<?php echo URL::route('event.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

            
                // these above code concept line was borrowed from legaats project which was done by Mr. Md. Nayeem Iqubal Joy. Also , he helped dubugging it. 
        });
    </script>


@stop
