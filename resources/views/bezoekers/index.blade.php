<!-- Extend the layout -->
@extends('layouts.app')

<!-- Assign page title -->
@section('title', 'Registreer')

@section('header')
    <link href="{{ URL::asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

<!-- Content of page -->
@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ __('Overview') }} - &nbsp;
                            <small>{{ __('Active registrations') }}</small>
                        </h5>
                        <div class="ibox-tools">
                                <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                        <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                        </ul>
                                        <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Badge') }}</th>
                                            <th>{{ __('ID') }}</th>
                                            <th>{{ __('Lastname') }}</th>
                                            <th>{{ __('Firstname') }}</th>
                                            <th colspan="2">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            @foreach ($bezoekers as $index)
                                                <tr>
                                                    <td>{{ $index->badge }}</td>
                                                    <td>{{ $index->sedula }}</td>
                                                    <td>{{ $index->lastname }}</td>
                                                    <td>{{ $index->firstname }}</td>
                                                    <td class=" col-sm-2 "><a href="{{ route('bzinfo') }}/{{ $index->id }}" class="btn btn-info btn-xs">{{ __('Details') }}</a></td>
                                                    <td class="col-sm-2"><a href="persedit/{{ $index->id }}" class="btn btn-warning btn-xs">{{ __('Edit') }}</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Page-Level Scripts -->
<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'PersoneelLijst'},
                    {extend: 'pdf', title: 'PersoneelLijst', pageSize: 'A4'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });
</script>

@endsection
