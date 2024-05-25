@extends('admin.common.master')
@section('title', __('admin_panel_edit_article'))
@section('content')
    <div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">{{ __('edit_article') }}</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('articles.update', $article->id) }}" class="row g-3 needs-validation"
                    enctype="multipart/form-data" novalidate="">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="title" class="form-label">{{ __('title') }}</label>
                        <input type="text" class="form-control" name="title" id="title"
                            value="{{ old('title', optional($article ?? null)->title) }}"
                            placeholder="{{ __('enter_title_of_article') }}" required="">
                    </div>
                    @error('title')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-6">
                        <label for="category_id" class="form-label">{{ __('choose_category') }}</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">{{ __('select_one_of_items') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $article->category_id ? 'selected' : '' }}>{{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-6">
                        <label for="image" class="form-label">{{ __('article_image') }}</label>

                        <input type="file" name="image" class="form-control">
                        <button type="button" class="btn btn-primary btn-sm"
                            id="add_image">{{ __('upload_image') }}</button>
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . old('image', optional($article ?? null)->image)) }}"
                                alt="" id="preview_image" class="img-fluid"
                                value="{{ asset('storage/' . old('image', optional($article ?? null)->image)) }}">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm"
                            id="delete_image">{{ __('delete_image') }}</button>

                    </div>
                    @error('image')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-12">
                        <label for="description" class="form-label">{{ __('short_description') }}</label>
                        <textarea type="text" class="form-control resize-none" name="description" id="description" cols="5"
                            rows="5" placeholder="{{ __('enter_short_description') }}" required="">{{ old('description', optional($article ?? null)->description) }}</textarea>
                    </div>
                    @error('description')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror


                    <div class="col-md-12">
                        <label for="content" class="form-label">{{ __('content') }}</label>
                        <textarea type="text" class="form-control resize-none" name="content" id="content" cols="5" rows="5"
                            placeholder="{{ __('enter_content_of_article') }}" required="">{{ old('content', optional($article ?? null)->content) }}</textarea>
                    </div>
                    @error('content')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror



                    <div class="col-md-12 mt-5">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                            <a href="{{ route('articles.index') }}" type="button"
                                class="btn btn-secondary px-4 ms-auto">{{ __('cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        #preview_image {
            width: 300px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function($) {
            $('#delete_image').hide();
            $('#edit_image').hide();
            $('[name="image"]').hide();

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview_image').show();
                        $('#preview_image').attr('src', e.target.result);
                        $('#add_image').hide();
                        $('#edit_image').show();
                        $('#delete_image').show();
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('[name="image"]').change(function() {
                readURL(this);
            });

            $('#add_image,#edit_image').click(function(event) {
                $('[name="image"]').trigger('click');
            });

            $('#delete_image').click(function(event) {
                $('[name="image"]').val('');
                $('#preview_image').attr('src', '');
                $('#preview_image').hide();
                $('#delete_image').hide();
                $('#edit_image').hide();
                $('#add_image').show();
            });
        });
    </script>
@endpush
