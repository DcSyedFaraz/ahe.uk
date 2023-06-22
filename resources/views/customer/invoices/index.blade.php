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
                                    <a class="nav-link {{ request()->query('status') == null && request()->routeIs('customer.invoices.index')  ? 'active' : '' }}" href="{{ route('customer.invoices.index') }}">
                                        All Invoices
                                    </a>
                                </li>
                                @foreach ($invoices_status as $invoice_status)
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->query('status') == $invoice_status->slug ? 'active' : '' }}" href="{{ route('customer.invoices.index', array('status' => $invoice_status->slug) ) }}">
                                            {{ $invoice_status->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Reference No.</th>
                                        <th>Order ID</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Currency</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($invoices))
                                        @foreach ($invoices as $invoice)

                                            <tr>
                                                <td>
                                                    <a href="{{route('customer.invoices.show', $invoice->ref_no)}}">
                                                        <strong>{{ \Illuminate\Support\Str::limit(strip_tags($invoice->ref_no), 16) }}</strong>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('customer.orders.show', $invoice->order->id)}}">
                                                        <strong>{{ '# '. $invoice->order->id }}</strong>
                                                    </a>
                                                </td>
                                                <td>{{ addCurrency($invoice->amount) }}</td>
                                                <td>{{ showDate($invoice->created_at) }}</td>
                                                <td>{{ strtoupper($invoice->currency) ?? '--' }} </td>
                                                <td>
                                                    @switch($invoice->status_id)
                                                        @case(4)
                                                            <span class="badge {{$invoice->status->css_class}}">{{$invoice->status->name}}</span>
                                                            @break
                                                        @case(5)
                                                            <span class="badge {{$invoice->status->css_class}}">{{$invoice->status->name}}</span>
                                                            @break
                                                        @default
                                                            <span class="badge badge-default"> Default </span>
                                                    @endswitch
                                                </td>
                                                <td>
                                                    @if ($invoice->status_id == 4)
                                                        <a href="{{route('invoice', ['reference' => $invoice->ref_no, 'gatway' => 'stripe', 'source'=>'cheap-cv-writer'] )}}"
                                                            class="btn btn-primary btn-sm" target="_blank">
                                                            Pay with Debit / Credit Card
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
