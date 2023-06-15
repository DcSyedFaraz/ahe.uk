@extends('layouts.admin')
@section('content')

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @include('partials.backend.addAndBackBtns', [
                                "page_name" => trans('cruds.blog.title_singular'),
                                'back_link' => route('admin.blogs.index')
                            ])

                            <form method="POST" action="{{ route("admin.blogs.update", [$blog->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label class="required" for="name">{{ trans('cruds.blog.fields.name') }}</label>
                                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }} get-slug" type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" >
                                    @if($errors->has('title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="slug">{{ trans('cruds.blog.fields.slug') }}</label>
                                    <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }} get-slug" type="text" name="slug" id="slug" value="{{ old('slug', $blog->slug) }}" >
                                    @if($errors->has('slug'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('slug') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="canonical">{{ trans('cruds.blog.fields.canonical') }}</label>
                                    <input class="form-control {{ $errors->has('canonical') ? 'is-invalid' : '' }}" type="url" readonly name="canonical" id="canonical" value="{{ old('canonical', $blog->canonical) }}" >
                                    @if($errors->has('canonical'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('canonical') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="meta_description">{{ trans('cruds.blog.fields.meta_description') }}</label>
                                    <textarea name="meta_description" id="meta_description" rows="2" class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}">{{ old('meta_description', $blog->meta_description) }}</textarea>
                                    @if($errors->has('meta_description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('meta_description') }}
                                        </div>
                                    @endif
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="required" for="category_id">{{ trans('cruds.product.fields.category') }}</label>
                                    <select class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                                        <option disabled hidden selected> Choose any option </option>
                                        @foreach($categories as $id => $category)
                                            <option {{ old('category_id', $blog->category_id) == $category->id ? "selected" : "" }} value="{{ $category->id }}" >{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('category_id') }}
                                        </div>
                                    @endif
                                </div> --}}
                                {{-- <div class="mb-3 {{ $errors->has('tags') ? 'has-error' : '' }}">
                                    <label for="tag">{{ trans('cruds.blog.fields.tag') }} <small>(press <b>Ctrl</b> to select multiple)</small></label>
                                    <select name="tags[]" id="tags" class="form-control {{ $errors->has('tags') ? 'is-invalid' : '' }}" multiple="multiple">
                                        @foreach ($tags as $tag)
                                            <option  {{ old('tags') == $tag->id ? "selected" : "" }}  value="{{ $tag->id }}" >{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('tags'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('tags') }}
                                        </em>
                                    @endif
                                </div> --}}
                                <div class="mb-3 {{ $errors->has('image') ? 'has-error' : '' }}">
                                    <label for="image">{{ trans('cruds.blog.fields.image') }}</label>
                                    <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" type="file" name="image" id="image" value="">{{ old('iamge_path',$blog->image_path) }}
                                    @if($errors->has('image'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('image') }}
                                        </em>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <textarea class="ckeditor form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" rows="10" id="editor" name="description">{{ old('description', $blog->description) }}</textarea>
                                    @if($errors->has('description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" name="is_published" id="is_published" {{ old('descripis_publishedtion', $blog->is_published) ? "checked" : ""}} />
                                    <label class="form-check-label" for="is_published">Publish</label>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-danger" type="submit">
                                        {{ trans('global.save') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .ck-editor__editable_inline {
                min-height: 380px;
            }
        </style>
    </main><!-- End #main -->
@endsection
@section('scripts')

    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script>
            ClassicEditor
            .create( document.querySelector( '#editor' ))
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
            } );
    </script>
    <script>
        $(document).ready(function() {
            $(".get-slug").on("change", function() {
                console.log($(this).val());
                $.ajax({
                    url: "{{route('admin.blogs.getSlug')}}",
                    type:"POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{'title': $(this).val()},
                    beforeSend: function() {
                        $('#slug').val('Loading...');
                        $('#canonical').val('Loading...');
                    },
                    complete: function(){
                        // $('#contact-form').find(':submit').html('Contact Now');
                        // $('#contact-form').find(':submit').attr("disabled", false);
                    },
                    success: function(res){
                        console.log(res)
                        $('#slug').val(res);
                        $('#canonical').val( '{{ config('app.app_url')}}' +res);
                    },
                    error: function(res) {
                        var errors = res.responseJSON.errors;
                        console.log(errors)
                    },
                });
            });
        });
    </script>
@endsection

