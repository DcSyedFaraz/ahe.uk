@extends('layouts.admin')
@section('content')

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ trans('cruds.blog.title') }}</h5>
                                <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-primary my-auto"> {{ trans('global.create') }} {{ trans('cruds.blog.title_singular') }} </a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        {{-- <th scope="col">Category</th> --}}
                                        {{-- <th scope="col">Tags</th> --}}
                                        <th scope="col">Created By</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td> {{$blog->title ?? "-"}} </td>
                                            {{-- <td> {{$blog->category->name ?? "-"}} </td> --}}
                                            {{-- <td>
                                                @if ( ($blog->tags) )
                                                    @foreach ($blog->tags  as $tag)
                                                        <span class="badge bg-info p-2 ms-2">{{ $tag->name }}</span>
                                                    @endforeach
                                                @else
                                                    <span class="badge bg-warning p-2 ms-2">{{ 'Not Found' }}dd</span>
                                                @endif
                                            </td> --}}
                                            <td> {{$blog->user->name ?? "-"}} </td>
                                            <td>
                                                @if ($blog->is_published)
                                                    <span class="badge bg-success p-2 ms-2">{{ 'Published' }}</span>
                                                @else
                                                    <span class="badge bg-danger p-2 ms-2">{{ 'Not Publish' }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group" >
                                                    <a href='{{ route('admin.blogs.show', [$blog->slug]) }}' target="_blank" class='mx-1 btn btn-sm btn-primary'><i class='bi bi-eye'></i> </a>
                                                    <a href='{{ route('admin.blogs.edit', [$blog->id]) }}' role='button' class='mx-1 btn btn-sm btn-info'> <i class='bi bi-pencil' ></i> </a>

                                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure? This will delete all related data also.');" style="display: inline-block;">
                                                        {{-- confirm('Are you sure?') return true which proceeds onsubmit--}}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="mx-1 btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
