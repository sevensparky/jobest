@extends('admin.common.master')
@section('title', __('admin_panel_settings'))
@include('common.alerts.alert')
@section('content')
    <div class="card radius-10 {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="mb-0">{{ __('site_settings') }}</h6>
                </div>

                <div class="dropdown ms-auto">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                            class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                    </a>
                    <ul class="dropdown-menu">
                        @if (count($itemQuery) > 0)
                        @else
                        <li>
                            <a class="dropdown-item" href="{{ route('settings.create') }}">{{ __('edit_site_settings') }}</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('dashboard.panel') }}">{{ __('back_to_dashboard') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($itemQuery) > 0)
                <table class="table table-striped table-bordered align-middle mb-0" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>{{ __('id') }}</th>
                                <th>{{ __('site_logo') }}</th>
                                <th>{{ __('name_of_brand') }}</th>
                                <th class="text-center">{{ __('settings') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        @if (!$item->image)
                                        <h6>{{ __('without_photo') }}</h6>
                                        @else
                                            <img src="{{ asset('storage/' . $item->image) }}" class="product-img-2">
                                        @endif
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <div class="col-md-12">
                                            <div class="d-md-flex d-grid align-items-center justify-content-center gap-3">
                                                <a href="{{ route('settings.edit', $item->id) }}" type="buttom"
                                                    class="btn btn-sm btn-warning px-4">{{ __('edit') }}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                @else
                <div class="alert alert-info border-0 bg-info alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-dark"><i class="bx bx-info-circle"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-dark">{{ __('proceed_from_left_menu_to_edit_site_settings') }}</h6>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
