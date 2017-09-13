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
                                     <a class="pull-right" href="{!! route('member.add') !!}"><button class="btn btn-success">Add Member</button></a>
                                </div>
                            </div>
                        </div>            
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                @if(count($members))
                                    <table  id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Contact</th>
                                            <th>Info</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($members as $member)

                                            <tr>
                                                <td><?php echo $memberCounter++; ?></td>
                                                <td>
                                                    <a class="show-project-modal" data-toggle="modal" data-project-id="{{ $member->id }}" data-project-url="{!! route('member.list',$member->id) !!}" href="#" style="">{!! $member->name !!}</a>
                                                </td>
                                                <td>{!! $member->designation !!}</td>
                                                <td>{!! $member->contact !!}</td>
                                                <td>{!! $member->info !!}</td>
                                                <td><a target="_blank" href="{{ asset($member->photo) }}">Preview</a></td>
                                               
                                                <td><a class="btn btn-success btn-xs btn-archive Editbtn" href="{!! route('member.edit',$member->id)!!}"  style="margin-right: 3px;">Edit</a>
                                                <a href="{!! route('member.delete',$member->id)!!}" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $member->id !!}">Delete</a></td>
                                            </tr>
                                            
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    No Member added yet. 
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
                {!! Form::open(array('route' => array('member.delete'), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
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
                var url = "<?php echo URL::route('member.list'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

            
                // these above code concept line was borrowed from legaats project which was done by Mr. Md. Nayeem Iqubal Joy. Also , he helped dubugging it. 
        });
    </script>


@stop
