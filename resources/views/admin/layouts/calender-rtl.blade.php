@extends('admin.common.master')
@section('title', __('admin_panel_calendar'))
@section('content')
<div class="col-md-8 mx-auto">

    <div class="card">
        <div class="card-body">
        <h1 class="h3 mb-4 text-gray-800 d-rtl">تقویم</h1>

            <div class="table-responsive">
                {{-- <div id='calendar'></div> --}}
                <div class="calendar"></div>
            </div>
        </div>
    </div>

</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datepicker/persian-datepicker.css') }}">

    <style>
        #plotId{
                position: relative !important;
            }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('admin/assets/plugins/datepicker/persian-date.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datepicker/persian-datepicker.js') }}"></script>

    <script>
        $('.calendar').persianDatepicker({
            inline: true,
            altField: '#inlineExampleAlt',
            altFormat: 'LLLL',
            maxDate: new persianDate().add('month', 3).valueOf(),
            minDate: new persianDate().subtract('month', 3).valueOf(),
            timePicker: {
                enabled: true,
                meridiem: {
                    enabled: true
                }
            }
        });
    </script>
@endpush
