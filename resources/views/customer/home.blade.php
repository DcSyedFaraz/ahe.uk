@extends('layouts.admin')

@section('content')

<p class="badge badge-success float-right"  >  {{ strtoupper(auth()->user()->name).' '.'logged in' }} </p>
    @include('partials.backend.admin-breadcrum')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $data['totalOrders'] }}</h3>

                            <p>Total Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <a href="{{route('customer.orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $data['clearInvoices'] }}</h3>

                            <p>Clear Invoices</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <a href="{{route('customer.invoices.index', ['status'=> 'paid'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $data['pendingInvoices'] }}</h3>

                            <p>Pending Invoice</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{route('customer.invoices.index', ['status'=> 'unpaid'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Latest Orders</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Package</th>
                                        <th>Level</th>
                                        <th>Total Cost</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($latestOrders != null)
                                        @foreach ($latestOrders as $latestOrder)
                                            <tr>
                                                <td>
                                                    <a href="{{route('customer.orders.show', $latestOrder->id)}}">
                                                        <strong># {{ $latestOrder->id }}</strong>
                                                    </a>
                                                </td>
                                                <td>{{ \Illuminate\Support\Str::limit(strip_tags($latestOrder->packageOrder->name), 35) }} </td>
                                                <td>{{$latestOrder->academic_level}}</td>
                                                <td>{{ addCurrency($latestOrder->invoice->amount) }}</td>
                                                <td>{{ showDate($latestOrder->created_at) }}</td>
                                                <td>
                                                    @switch($latestOrder->status_id)
                                                        @case(1)
                                                            <span class="badge {{$latestOrder->status->css_class}}">{{$latestOrder->status->name}}</span>
                                                            @break
                                                        @case(2)
                                                            <span class="badge {{$latestOrder->status->css_class}}">{{$latestOrder->status->name}}</span>
                                                            @break
                                                        @case(3)
                                                            <span class="badge {{$latestOrder->status->css_class}}">{{$latestOrder->status->name}}</span>
                                                            @break
                                                        @default
                                                            <span class="badge badge-default"> Default </span>
                                                    @endswitch
                                                </td>
                                                <td>
                                                    {{-- @can('') --}}
                                                        {{-- <a class="btn btn-xs btn-info" href="{{ route('admin.orders.edit', $latestOrder->id) }}">
                                                            {{ trans('global.edit') }}
                                                        </a> --}}
                                                    {{-- @endcan --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">

                        <a href="{{route('customer.orders.index')}}" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
