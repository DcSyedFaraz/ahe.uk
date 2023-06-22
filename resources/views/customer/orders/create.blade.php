@extends('layouts.admin')
@section('content')
    @include('partials.backend.admin-breadcrum')

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('customer.orders.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body p-0">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th width="30%" class="text-right">Name:</th>
                                            <td width="80%" class="text-left">
                                                <input type="text" class="form-control" disabled
                                                    value="{{ auth()->user()->name }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Email:</th>
                                            <td width="80%" class="text-left">
                                                <input type="email" class="form-control" disabled
                                                    value="{{ auth()->user()->email }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Phone Number:</th>
                                            <td width="80%" class="text-left">
                                                <input type="text" disabled class="form-control"
                                                    value="{{ auth()->user()->phone }}">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th width="30%" class="text-right">Career Level:</th>
                                            <td width="80%" class="text-left">
                                                <select name="career_level" class="form-control">

                                                    <option hidden disabled selected>Select any one option</option>
                                                    @foreach ($career_levels as $career_level)
                                                        <option value="{{ $career_level->id }}">
                                                            {{ $career_level->name }}</option>
                                                    @endforeach

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Order Service:</th>
                                            <td width="80%" class="text-left">

                                                <select name="order_service" class="form-control">

                                                    <option hidden disabled selected>Select any one option</option>
                                                    @foreach ($order_services as $order_service)
                                                        <option value="{{ $order_service->id }}">
                                                            {{ $order_service->name }}</option>
                                                    @endforeach

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Deadline:</th>
                                            <td width="80%" class="text-left">

                                                <select name="deadline_id" class="form-control">

                                                    <option hidden disabled selected>Select any one option</option>
                                                    @foreach ($deadlines as $deadline)
                                                        <option value="{{ $deadline->id }}">{{ $deadline->name }}
                                                        </option>
                                                    @endforeach

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Detail:</th>
                                            <td width="80%" class="text-left">
                                                <textarea name="detail" id="" class="form-control" rows="4"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">File input:</th>
                                            <td width="80%" class="text-left">

                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" multiple class="custom-file-input" aria-describedby="email_attacements_help" accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar" id="email_attacements" name="emailAttachments[]">
                                                        <label class="custom-file-label" for="email_attacements">
                                                            Choose file
                                                        </label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    @if ($errors->has('emailAttachments.*'))
                                                        @foreach ($errors->get('emailAttachments.*') as $message)
                                                            <p class="text-danger">{{ $message[0] }}</p>
                                                        @endforeach
                                                    @endif
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success btn-spinner float-right">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
