@extends('admin.common.master')
@section('title', __('admin_panel_users'))
@include('common.alerts.alert')
@section('content')
    <div class="card radius-10 {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="mb-0">{{ __('users_management') }}</h6>
                </div>

                <div class="dropdown ms-auto">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                            class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('roles.index') }}">{{ __('role_management') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('permissions.index') }}">{{ __('permission_management') }}</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('dashboard.panel') }}">{{ __('back_to_dashboard') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($users) > 0)
                <table class="table table-striped table-bordered align-middle mb-0" id="data-table" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>{{ __('id') }}</th>
                            <th>{{ __('name_of_brand') }}</th>
                            <th>{{ __('email') }}</th>
                            <th>{{ __('role') }}</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->userRole }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                @else

                <div class="alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-dark"><i class="bx bx-info-circle"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-dark">{{ __('no_item_found') }}</h6>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

    @if (app()->isLocale('fa'))
    <style>
        div.dataTables_wrapper div.dataTables_filter {
            text-align: left
        }
    </style>
    @endif

@endpush

@push('scripts')

@if (app()->isLocale('fa'))
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables-rtl.min.js') }}"></script>
@elseif (app()->isLocale('en'))
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
@endif

    <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable();
        });
    </script>
@endpush
