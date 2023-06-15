@extends('layouts.admin')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @include('partials.backend.addAndBackBtns', [
                                "page_name" => trans('cruds.service.title_singular'),
                                'back_link' => route('admin.services.index')
                            ])

                            <form method="POST" action="{{ route("admin.services.store") }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="required" for="name">{{ trans('cruds.service.fields.name') }}</label>
                                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} get-slug" type="text" name="name" id="name" value="{{ old('name', '') }}" >
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="title">{{ trans('cruds.service.fields.title') }}</label>
                                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" >
                                    @if($errors->has('title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="slug">{{ trans('cruds.service.fields.slug') }}</label>
                                    <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }} get-slug" type="text" name="slug" id="slug" value="{{ old('slug', '') }}" >
                                    @if($errors->has('slug'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('slug') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="canonical">{{ trans('cruds.service.fields.canonical') }}</label>
                                    <input class="form-control {{ $errors->has('canonical') ? 'is-invalid' : '' }}" type="url" readonly name="canonical" id="canonical" value="{{ old('cononical', '') }}" >
                                    @if($errors->has('canonical'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('canonical') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="meta_description">{{ trans('cruds.service.fields.meta_description') }}</label>
                                    <textarea name="meta_description" id="meta_description" rows="2" class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}">{{ old('meta_description', '') }}</textarea>
                                    @if($errors->has('meta_description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('meta_description') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="html">{{ trans('cruds.service.fields.html') }}</label>
                                    <textarea class="ckeditor form-control {{ $errors->has('html') ? 'is-invalid' : '' }}" rows="10" id="editor" name="html">{{ old('html') }}</textarea>
                                    @if($errors->has('html'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('html') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" name="is_published" id="is_published" checked/>
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
            .create( document.querySelector( '#editor' ), {
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading2' },
                            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading2' }
                        ]
                    }
                })
                .then( editor => {
                    console.log( editor );
                })
                .catch( error => {
                    console.error( error );
            });
    </script>
    <script>
        $(document).ready(function() {
            $(".get-slug").on("change", function() {
                console.log($(this).val());
                $.ajax({
                    url: "{{route('admin.services.getSlug')}}",
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

