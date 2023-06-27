@extends('layouts.web')

@section('title', 'Login')
@section('description', '')
@section('canonical', config('app.url') . Request::path())



@section('content')
    <div class="container mx-auto lg:px-4 py-6">
        <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row lg:mx-4">
            <div class="w-full lg:w-[65%] xl:w-[70%] px-2 lg:py-5 my-auto">
                <div class="sm:col-span-2 my-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-6 lg:gap-x-10">
                        <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('images/payments/icon1.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Affordable Rates</p>
                            <p>Assignment Help Expert Writer offers excellent services in cheap prices without compromising on quality.</p>
                        </div>
                        <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('images/payments/icon2.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Qualified Consultants</p>
                            <p>Team of skilled HR Managers, Recruiters and Outplacement Strategists with years of professional experience.</p>
                        </div>
                        <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('images/payments/icon3.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Tailored Templates</p>
                            <p>Clean and industry specific templates to make Assignment presentable and eye catching for employers.</p>
                        </div>
                        <div class="bg-primary-one py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('images/payments/icon4.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">ATS Friendly</p>
                            <p>ATS (Applicant Tracking System) friendly Assignment to make sure it gets the maximum reach.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel w-full sm:w-[70%] lg:w-[35%] xl:w-[30%] mx-auto ">
                <form action="{{ route('login') }}" method="POST" class="border-4 border-primary-one shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2  ">
                    @csrf
                    <div class="bg-primary-one py-2 px-5 rounded-t-lg">
                        <p class="text-3xl text-center text-white font-semibold">
                            {{ trans('global.login') }}
                        </p>
                    </div>
                    @if (session('success') )
                        <div class="mt-3 bg-primary-one border-t-4 border-green-700 rounded text-white shadow-md" role="alert">
                            <div class="py-2">
                                <p class="text-center  font-bold">{{ session('success') }}</p>
                            </div>
                        </div>
                    @elseif (session('error'))
                    <div class="mt-3 bg-white border-t-4 border-red-500 rounded  shadow-md" role="alert">
                        <div class="py-2">
                            <p class="text-center text-red-500  font-bold">{{ session('error') }}</p>
                        </div>
                    </div>
                    @endif
                    <div class="mb-2">
                        <input id="email" type="email"
                            class="form-input @error('email') error-field @enderror" required
                            autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" name="email"
                            value="{{ old('email', null) }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-400">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="">
                        <input id="password" type="password"
                            class="form-input @error('password') error-field @enderror" required
                            autocomplete="password" autofocus placeholder="{{ trans('global.login_password') }}"
                            name="password" value="{{ old('password', null) }}">
                        @error('password')
                            <div class="invalid-feedback">Please enter your password!</div>
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember" class="">{{ trans('global.remember_me') }}</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat hover:shadow-md">
                        {{ trans('global.login') }}
                    </button>

                    <p class="text-center">
                        <span class="px-2">or continue with</span>
                    </p>

                    <div class="flex w-full space-x-1 mx-auto justify-center">
                        <a href="{{ route('register') }}" class=" hover:shadow-lg py-3 w-1/2 border-primary-one border-2  rounded-lg flex justify-center items-center space-x-2">
                            <img src="{{ asset('images/sign-up.png') }}" alt="google" width="20" height="20">
                            <span>
                                Register
                            </span>
                        </a>
                        {{-- <a href="{{ url('redirect/google') }}" class="py-3 w-1/2 hover:border-primary-two border-2 border-t-purple-100 rounded-lg flex justify-center items-center space-x-2">
                            <img src="{{ asset('images/svg/google.svg') }}" alt="google" width="20" height="20">
                            <span>
                                Google
                            </span>
                        </a> --}}
                    </div>
                </form>
                @if (Route::has('password.request'))
                    <a class="mt-1  float-right hover:underline-offset-7 hover:underline" href="{{ route('password.request') }}">
                        {{ trans('global.forgot_password') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection

