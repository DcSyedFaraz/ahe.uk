@extends('layouts.web')

@section('content')
<div class="container mx-auto lg:px-4 py-6">
    <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row lg:mx-4">
        <div class="w-full lg:w-[65%] xl:w-[70%] px-2 lg:py-5 my-auto">
            <div class="sm:col-span-2 my-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-6 lg:gap-x-10">
                    <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                        <img src="{{ asset('images/payments/icon1.png') }}" class="h-20 mx-auto">
                        <p class="text-lg font-semibold">Affordable Rates</p>
                        <p>Cheap Resume Writer  offers excellent services in cheap prices without compromising on quality.</p>
                    </div>
                    <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                        <img src="{{ asset('images/payments/icon2.png') }}" class="h-20 mx-auto">
                        <p class="text-lg font-semibold">Qualified Consultants</p>
                        <p>Team of skilled HR Managers, Recruiters and Outplacement Strategists with years of professional experience.</p>
                    </div>
                    <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                        <img src="{{ asset('images/payments/icon3.png') }}" class="h-20 mx-auto">
                        <p class="text-lg font-semibold">Tailored Templates</p>
                        <p>Clean and industry specific templates to make Resume presentable and eye catching for employers.</p>
                    </div>
                    <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                        <img src="{{ asset('images/payments/icon4.png') }}" class="h-20 mx-auto">
                        <p class="text-lg font-semibold">ATS Friendly</p>
                        <p>ATS (Applicant Tracking System) friendly Resume to make sure it gets the maximum reach.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel w-full sm:w-[70%] lg:w-[35%] xl:w-[30%] mx-auto ">
            <form action="{{ route('password.update') }}" method="POST" class="border-4 border-primary-one shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2 ">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="bg-primary-one py-2 px-5 rounded-t-lg">
                    <p class="text-3xl text-center text-white font-semibold">
                        {{ trans('global.reset_password') }}
                    </p>
                </div>

                <div class="mb-2">

                        <input id="email" type="email" placeholder="{{ trans('global.login_email') }}" class="form-control form-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" readonly autofocus>
                    @error('email')
                    <span class="text-red-500"  role="alert">
                        <strong >{{ $message }}</strong>
                    </span>
                    @enderror


                </div>


                <div class="mb-2">

                        <input id="password" type="password" placeholder="{{ trans('global.login_password') }}" class=" form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div>
                    <input id="password-confirm" type="password" placeholder="{{ trans('global.confirm_password') }}" class="form-input" name="password_confirmation" required autocomplete="new-password">
                </div>



                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    {{ __('Reset Password') }}
                </button>


            </form>

        </div>
    </div>
</div>
@endsection






{{-- @extends('layouts.web')

 @section('hero-section')
    <div class="container mx-auto lg:px-4 py-6">
        <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row lg:mx-4">
            <div class="w-full lg:w-[65%] xl:w-[70%] px-2 lg:py-5 my-auto">
                <div class="sm:col-span-2 my-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-6 lg:gap-x-10">
                        <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('images/payments/icon1.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Affordable Rates</p>
                            <p>CV Writers AE offers excellent services in cheap prices without compromising on quality.</p>
                        </div>
                        <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('images/payments/icon2.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Qualified Consultants</p>
                            <p>Team of skilled HR Managers, Recruiters and Outplacement Strategists with years of professional experience.</p>
                        </div>
                        <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('images/payments/icon3.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Tailored Templates</p>
                            <p>Clean and industry specific templates to make CV presentable and eye catching for employers.</p>
                        </div>
                        <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('images/payments/icon4.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">ATS Friendly</p>
                            <p>ATS (Applicant Tracking System) friendly CV to make sure it gets the maximum reach.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel w-full sm:w-[70%] lg:w-[35%] xl:w-[30%] mx-auto ">
                <form action="{{ route('password.update') }}" method="POST" class="border-4 border-primary-one shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2 ">
                    @csrf
                    <div class="bg-primary-one py-2 px-5 rounded-t-lg">
                        <p class="text-3xl text-center text-white font-semibold">
                            {{ trans('global.reset_password') }}
                        </p>
                    </div>

                    <div class="mb-2">

                            <input id="email" type="email" placeholder="{{ trans('global.login_email') }}" class="form-control form-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="text-red-500"  role="alert">
                                <strong >{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="mb-2">

                            <input id="password" type="password" placeholder="{{ trans('global.login_password') }}" class=" form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div>
                        <input id="password-confirm" type="password" placeholder="{{ trans('global.confirm_password') }}" class="form-input" name="password_confirmation" required autocomplete="new-password">
                    </div>



                    <button type="submit" class="btn btn-primary btn-block btn-flat">

                        {{ __('Reset Password') }}
                    </button>


                </form>

            </div>
        </div>
    </div>
@endsection  --}}
