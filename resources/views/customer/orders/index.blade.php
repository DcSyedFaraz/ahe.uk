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
                                    <a class="nav-link {{ request()->query('status') == null && request()->routeIs('customer.orders.index') ? 'active' : '' }}"
                                        href="{{ route('customer.orders.index') }}">
                                        All Orders
                                    </a>
                                </li>
                                @foreach ($orders_status as $order_status)
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->query('status') == $order_status->slug ? 'active' : '' }}"
                                            href="{{ route('customer.orders.index', ['status' => $order_status->slug]) }}">
                                            {{ $order_status->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Package</th>
                                        <th>Level</th>
                                        <th>Deadline</th>
                                        <th>Total Cost</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($orders))
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('customer.orders.show', $order->id) }}">
                                                        <strong># {{ $order->id }}</strong>
                                                    </a>
                                                </td>
                                                <td>{{ \Illuminate\Support\Str::limit(strip_tags($order->packageOrder->name), 35) }}
                                                </td>
                                                <td>{{ $order->academic_level ?? '' }}</td>
                                                <td>{{ $order->deadlineName->name ?? '' }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-between px-3 bg-light py-2">
                                                        <span class="font-weight-bold">{{ addCurrency($order->invoice->amount)  }}</span>
                                                        <span class="badge {{ $order->invoice->status->css_class }} mt-1">{{ $order->invoice->status->name }}</span>
                                                    </div>
                                                </td>
                                                <td>{{ showDate($order->created_at) }}</td>
                                                <td>
                                                    @switch($order->status_id)
                                                        @case(1)
                                                            <span
                                                                class="badge {{ $order->status->css_class }}">{{ $order->status->name }}</span>
                                                        @break

                                                        @case(2)
                                                            <span
                                                                class="badge {{ $order->status->css_class }}">{{ $order->status->name }}</span>
                                                        @break

                                                        @case(3)
                                                            <span
                                                                class="badge {{ $order->status->css_class }}">{{ $order->status->name }}</span>
                                                        @break

                                                        @default
                                                            <span class="badge badge-default"> Default </span>
                                                    @endswitch
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
