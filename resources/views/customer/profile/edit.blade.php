@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h4 class="m-0 text-dark">Profile</h4>
                </div>
                <div class="col-sm-8">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="{{route('customer.home')}}">Dashboard</a></li>


                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form id="profile-form" action="{{route('customer.profile.update', [$user->id])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body p-0">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th width="30%" class="text-right">Name:</th>
                                            <td width="80%" class="text-left">
                                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name ?? '' }}" autofocus>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Email:</th>
                                            <td width="80%" class="text-left">
                                                <input type="email" name="email" id="email" class="form-control" disabled
                                                    value="{{ $user->email ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Phone Number:</th>
                                            <td width="80%" class="text-left">
                                                <input type="text" id="phone" class="form-control" value="{{ $user->phone ?? '' }}" oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                                                data-intl-tel-input-id="0">
                                                <input type="hidden" name="phone" id="phone2" value="{{ $user->phone ?? '' }}"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Address:</th>
                                            <td width="80%" class="text-left">
                                                <input type="text" name="address" id="address" class="form-control" value="{{ $user->address ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">City:</th>
                                            <td width="80%" class="text-left">
                                                <input type="text" name="city" id="city" class="form-control" value="{{ $user->city ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">State:</th>
                                            <td width="80%" class="text-left">
                                                <input type="text" name="state" id="state" class="form-control" value="{{ $user->state ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">Country:</th>
                                            <td width="80%" class="text-left">
                                                <select name="country" class="form-control">
                                                    <option value="">-- Select --</option>
                                                    @foreach ($countries as $country)
                                                        <option {{ ($user->country == $country->code ) ? 'selected' : '' }}  value="{{$country->code}}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%" class="text-right">ZIP Code:</th>
                                            <td width="80%" class="text-left">
                                                <input type="text" name="zip_code" id="zip_code" class="form-control" value="{{$user->zip_code}}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success btn-spinner float-right">
                                            Save Changes
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

@section('scripts')

    {{-- country phone codes --}}
    <script>

        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["ae"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#profile-form").submit(function() {
                $('#profile-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        })

    </script>
@endsection
