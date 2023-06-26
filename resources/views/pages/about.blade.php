@extends('layouts.web')

@section('title', 'About us')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('content')

    <section class="container mx-auto my-10 px-4">

        <h1 class="text-primary-one text-4xl my-4"><strong>About</strong></h1>
        <p class="my-2 ">
            <a class="hover:text-red-500 text-orange-400 font-mono" href="{{ route('home') }}">assignmenthelpexpert.com</a> is US leading Assignment writing &
            editing service providers. We have helped many candidates in achieving their goals and catching the most
            suitable opportunities. We work in detail and provide CV writing service that professionally represent you in
            front of an employer.
        </p>
        <p class="my-2">
            We offer Different services includes, CV writing & Editing, Cover letter writing and Editing, LinkedIn profile
            editing and makes online profiles. Many skilled, educated and capable people today face problems in finding the
            right job for themselves. We are here to provide our support as expert CV writers here know very well how to fit
            in your experience and qualifications in your Assignment well.
        </p>
        <p class="my-2">
            Our online Assignment Editing & Writing services is a platform for the undergraduates, graduates, professional or
            seniors to hit an opportunity well and get their desired job.

        </p>

    </section>

@endsection
