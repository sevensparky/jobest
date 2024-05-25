@extends('admin.common.master')
@section('title', __('admin_panel_edit_settings'))
@section('content')
    <div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">{{ __('edit_site_settings') }}</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('settings.update', $item->id) }}" class="row g-3 needs-validation"
                    enctype="multipart/form-data" novalidate="">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="title" class="form-label">{{ __('title') }}</label>
                        <input type="text" class="form-control" name="title" id="title"
                            value="{{ old('title', optional($item ?? null)->title) }}"
                            placeholder="{{ __('enter_title_of_brand') }}" required="">
                        @error('title')
                            <small class="text text-danger"><b>{{ $message }}</b></small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">{{ __('email_address') }}</label>
                        <input type="email" class="form-control" name="email" id="email"
                            value="{{ old('email', optional($item ?? null)->email) }}" placeholder="{{ __('enter_email_address') }}"
                            required="">
                        @error('email')
                            <small class="text text-danger"><b>{{ $message }}</b></small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="tel" class="form-label">{{ __('tel_number') }}</label>
                        <input type="text" class="form-control" name="tel" id="tel"
                            value="{{ old('tel', optional($item ?? null)->tel) }}" placeholder="{{ __('enter_tel_number') }}"
                            required="">
                        @error('tel')
                            <small class="text text-danger"><b>{{ $message }}</b></small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label for="phone" class="form-label">{{ __('phone_number') }}</label>
                        <input type="text" class="form-control" name="phone" id="phone"
                            value="{{ old('phone', optional($item ?? null)->phone) }}"
                            placeholder="{{ __('enter_phone_number') }}" required="">
                        @error('phone')
                            <small class="text text-danger"><b>{{ $message }}</b></small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="address" class="form-label">{{ __('address') }}</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ old('address', optional($item ?? null)->address) }}" placeholder="{{ __('enter_address') }}"
                            required="">
                        @error('address')
                            <small class="text text-danger"><b>{{ $message }}</b></small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="image" class="form-label">{{ __('site_logo') }}</label>

                        <input type="file" name="image" class="form-control">
                        <button type="button" class="btn btn-primary btn-sm" id="add_image">{{ __('upload_image') }}</button>
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . old('image', optional($item ?? null)->image)) }}" alt=""
                                id="preview_image" class="img-fluid"
                                value="{{ old('image', optional($item ?? null)->image) }}">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" id="delete_image">{{ __('delete_image') }}</button>
                        @error('image')
                            <small class="text text-danger"><b>{{ $message }}</b></small>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="description" class="form-label">{{ __('description_of_about_company') }}</label>
                        <textarea type="text" class="form-control resize-none" name="description" id="description" cols="5"
                            rows="5" placeholder="{{ __('enter_description') }}" required="">{{ old('description', optional($item ?? null)->description) }}</textarea>

                        @error('description')
                            <small class="text text-danger"><b>{{ $message }}</b></small>
                        @enderror
                    </div>


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
