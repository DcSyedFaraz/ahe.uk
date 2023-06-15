@extends('layouts.web')

@section('content')


    <section class="px-4 md:px-16 lg:mx-24 my-14">
        <div class="container mx-auto grid sm:grid-cols-4 xl:grid-cols-3 gap-x-3 gap-y-3">
            @if (count($blogs) > 0)
                @foreach ($blogs as $blog)
                    <div class="col-span-3 sm:col-span-2 xl:col-span-1 ">
                        <div class="flex justify-between m-6 min-w-sm">
                            <div class="flex flex-col h-full max-w-lg mx-auto rounded-lg bg-dark-lite bg-opacity-[10%] dark:bg-opacity-50">
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="block bg-gray-50 rounded-lg rounded-b-none">
                                    <img class="rounded-t-lg object-cover h-48 w-96 mx-auto"
                                        src="{{ asset('storage/'. $blog->image_path) }}"
                                        alt="thumbnail" loading="lazy" />
                                </a>
                                <div class="flex justify-end -mt-4 px-4">
                                    <span class=" flex h-min space-x-1 items-center rounded-full text-gray-400 bg-gray-800 py-1 px-2 text-xs font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <p class="text-gray-100 font-semibold text-xs">
                                            {{ $blog->body }}
                                        </p>
                                    </span>
                                </div>
                                <div class="py-2 px-4">
                                    <h1
                                        class="text-xl leading-6 tracking-wide text-color text-hover font-semibold cursor-pointer">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">
                                            {{ Str::limit($blog->title, 80, '...') }}
                                        </a>
                                    </h1>
                                </div>
                                <div class="px-4 space-y-2">
                                    <span class="text-gray-500 font-normal leading-5 tracking-wide">
                                        {!! Str::limit(strip_tags($blog->body), $limit = 150, $end = '') !!}
                                    </span>
                                    <a href="{{ route('blogs.show', $blog->slug) }}" class="font-bold  text-color text-hover">
                                        read more...
                                    </a>
                                </div>
                                <div class="flex flex-row items-end h-full w-full px-4 mt-4">
                                    <div class="flex border-t border-gray-700 w-full py-4">
                                        <div class="flex items-center space-x-3 border-r border-gray-700 w-full">
                                            <img class="object-cover w-8 h-8 border-2 border-gray-300 dark:border-white rounded-full"
                                                src="{{ asset('imgs/icons/user.png') }}"
                                                alt="profile users" loading="lazy" />
                                            <div class="">
                                                <p class="text-sm font-semibold tracking-wide  text-color">
                                                    {{ $blog->user->name }}
                                                </p>
                                                <p class="text-xs font-light tracking-wider  text-color">
                                                    {{ $blog->created_at }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex items-center flex-shrink-0 px-2">
                                            <div class="flex items-center space-x-1 text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                                <p class="font-medium">0</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-4 lg:col-span-1 lg:col-start-2">
                    <p class="text-center py-4 mx-auto md:mx-0 heading-secondary text-dark-lite dark:text-white">
                        No Blog found
                    </p>
                </div>
            @endif
        </div>
        <div class="container mx-auto">
            <div class="mx-auto max-w-sm py-4 text-dark-lite dark:text-white">
                {{-- {{ $blogs->links('pagination::tailwind') }} --}}
            </div>
        </div>
    </section>

@endsection
