<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- No Index --}}
    <meta name="robots" content="noindex">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="xFfFMm0UfLUjLAT6s3EW3gIZplo9RTcKeiBHRHCz">

    {{-- Chrome Address Bar Color --}}
    <meta name="theme-color" content="#fff" />

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield('description')" />

    {{-- Facebook share --}}
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', env('APP_NAME'))" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{ asset('imgs/logo.png') }}" />

    {{-- Twitter share --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title', '')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="{{ asset('imgs/logo.png') }}" />

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical', '')" />
    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href="{{ asset('css/frontend-customcss.css') }}">
    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
    {{-- swiper cdn --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- AOS CSS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">


    {{-- intl Tel Input CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        .iti {
            width: 100%;
            margin-top: 6px;
        }
    </style>

    {{-- FontAwsome 6 --}}
    <script src="https://kit.fontawesome.com/2c6b599d00.js" crossorigin="anonymous"></script>

    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> --}}
    @yield('links')

    @yield('styles')
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            font-family: 'Inter', sans-serif;
        }


        .line-cut {
            text-decoration: line-through #F78C03;
        }

        .progress {
            position: relative;
            margin: 4px;
            float: left;
            text-align: center;
        }

        .barOverflow {
            /* Wraps the rotating .bar */
            /* position: relative; */
            overflow: hidden;
            /* Comment this line to understand the trick */
            width: 90px;
            height: 45px;
            /* Half circle (overflow) */
            margin-bottom: -14px;
            /* bring the numbers up */
        }

        .bar {
            /* position: absolute; */
            top: 0;
            left: 0;
            width: 90px;
            height: 90px;
            /* full circle! */
            border-radius: 50%;
            box-sizing: border-box;
            border: 5px solid #eee;
            /* half gray, */
            border-bottom-color: #F78C03;
            /* half azure */
            border-right-color: #F78C03;
        }

        swiper-container {
            width: auto;
            height: auto;
            margin: 0%;
        }

        swiper-slide {
            width: auto;
            height: auto;
            overflow: hidden;
        }
    </style>

</head>

<body class="bg-slate-100">

    @include('partials.frontend.navbar')


    @yield('content')



    {{-- Footer --}}
    @include('partials.frontend.footer')

    {{-- Tawto --}}
    {{-- {{ TawkTo::widgetCode('https://embed.tawk.to/5ea44eec69e9320caac73ec7/default') }} --}}

    {{-- scripts --}}
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    {{-- jQuery cdn --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- AJAX jQuery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    {{-- AOS JS CDN --}}
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script> --}}


    {{-- <script src="jquery.countup.js"></script> --}}

    @yield('scripts')
    
</body>

</html>
