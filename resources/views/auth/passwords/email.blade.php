@extends('layouts.web')

@section('title', 'Password Reset')
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
               <div class="my-auto lg:mt-32">
                    @if (session('status'))
                        <div class="bg-green-500 text-white padding-12 text-center my-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{ route('password.email') }}" method="POST" class="border-4 border-primary-one shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2 my-auto ">
                    @csrf
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


                    <button type="submit" class="btn btn-primary-one btn-block btn-flat">
                        {{ trans('Send Password Reset Link') }}
                    </button>


                </form>
               </div>

            </div>
        </div>
    </div>
@endsection
