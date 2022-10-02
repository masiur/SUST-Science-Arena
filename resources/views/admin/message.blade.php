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
{{--                                <div class="col-md-6">--}}
{{--                                    <a class="pull-right" href=""><button class="btn btn-success">Add users</button></a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @if(count($messages))
                                        <table  id="dataTable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Message</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>At</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($messages as $user)

                                                <tr>
                                                    <td><?php echo $counter++; ?></td>
                                                    <td>{!! $user->name !!}</td>
                                                    <td>{!! $user->message !!}</td>
                                                    <td>{!! $user->email !!}</td>
                                                    <td>{!! $user->contact_no !!}</td>
                                                    <td>{!! $user->created_at !!}</td>

                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        No Message received yet.
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
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
                var url = "<?php echo URL::route('user.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

        });
    </script>


@stop
