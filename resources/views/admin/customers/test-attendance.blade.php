@extends('layouts.admin')
@section('content')

   @include('partials.backend.admin-breadcrum')

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-0">
                            <ul class="nav nav-pills p-2">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->query('status') == null && request()->routeIs('admin.customers.index')  ? 'active' : '' }}" href="{{ route('admin.customers.index') }}">
                                        All Customers
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-hover datatable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Attendend By</th>
                                        <th>Attendence Date</th>
                                        <th>Attendence Status</th>
                                        <th>In Time</th>
                                        <th>Out Time</th>
                                        <th>Calculation</th>
                                        <th>is late</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>MTG</td>

                                        @php
                                            $startTime      = '2022-08-22 09:00:00';
                                            $timeIn         = '2022-08-22 09:23:54';
                                            $timeOut        = '2022-08-22 17:08:34';
                                        @endphp

                                        <td> {{ showAttendanceDate( $timeIn ) }} </td>
                                        <td>
                                            <span class="badge badge-success">Present</span>
                                        </td>
                                        <td> {{ showTime( $timeIn  ) }} </td>
                                        <td> {{ showTime( $timeOut ) }} </td>
                                        <td>
                                            {{ jobDurationTime( $timeIn , $timeOut) }}
                                        </td>
                                        <td>
                                            @if (isLate($startTime , $timeIn, 15 ) )
                                                <span class="badge badge-danger">Late</span>
                                            @else
                                                <span class="badge badge-info">Not Late</span>
                                            @endif
                                        </td>
                                    </tr>
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
@parent
<script>
    $(function() {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

        $.extend(true, $.fn.dataTable.defaults, {
            customerCellsTop: true,
            customer: [
                [1, 'desc']
            ],
            pageLength: 100,

        });
        let table = $('.datatable:not(.ajaxTable)').DataTable({
            buttons: dtButtons
        })
        $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })
</script>
@endsection
