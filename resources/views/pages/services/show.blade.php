@extends('layouts.web')
@section('title', $service->title ?? '-')
@section('description', $service->meta_description ?? '-')
@section('canonical', $service->canonical ?? '-')

@section('content')

    <style>
        /* Core CSS */
        .service-section h1 {
            --tw-text-opacity: 1;
            /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
            font-weight: 'semi-bold';
            font-size: 3rem;
            line-height: 3.25rem;
            margin: 1rem 0;
        }

        .service-section h2,
        h3 {
            --tw-text-opacity: 1;
            /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
            font-size: 2rem;
            line-height: 2rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }

        .service-section p {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .service-section a {
            --tw-text-opacity: 1;
            /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
            font-weight: 700;
        }

        .service-section a:hover {
            --tw-text-opacity: 1;
            /* color: rgb(107 114 128 / var(--tw-text-opacity)); */
        }

        .service-section ul {
            color: #333;
            list-style-type: disc;
        }

        /* Mobile Size CSS */
        .service-section h1 {
            text-align: center;
        }

        .service-section ul {
            margin-left: 1rem;
        }

        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                text-align: left;
            }

            .service-section ul {
                margin-left: 2.5rem;
            }
        }

        /* sm and greater screen size  screen size */
        /* @media (min-width: 640px) {

        } */
    </style>

    {{-- <div class="bg-slate-200 px-4 lg:px-20">
    <div class="container mx-auto grid grid-cols-12 py-8 ">

        <div class="col-span-12 xl:col-span-9 text-3xl font-bold lg:font-medium lg:text-5xl text-black">
            {{$service->name}}
        </div>

       <div class="hidden xl:block text-black my-auto text-xl"><a href="{{ route('home') }} " class="hover:underline underline-offset-2">Home</a><i class="fa-solid fa-angle-right ml-4 text-sm"></i></div>
       <div class="hidden xl:block col-span-2 text-xl text-black my-auto ">{{ $service->name }}</div>
    </div>
</div>         --}}



    <section class="container mx-auto py-8 px-4">
        <div class="flex flex-col lg:flex-row lg:space-x-8 lg:mx-8 space-y-6 lg:space-y-0">

            <div class="w-full space-y-3 service-section">
                {!! $service->html !!}


            </div>
    </section>
@endsection

@section('scripts')
    {{-- <script>
        const loading =
            '<svg class="inline-block " width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#ffffff"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
        $("#cost").html(loading)
        $(".get-fare").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "deadline_id": $('#deadline').val(),
                "academic_level_id": $('#academic_level').val(),
            }
            $.ajax({
                method: 'POST',
                url: '{{ route('get.fare') }}',
                beforeSend: function() {
                    // $("#cost-per-page").html("Loading...")


                    $("#cost").html(loading)
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    //  console.log(res);
                    // if 1 page is selected
                    $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ? 1 : $(
                        "#no_of_pages").val())))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script> --}}
@endsection
