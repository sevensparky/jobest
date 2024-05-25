@extends('admin.common.master')
@section('title', __('admin_panel_roles'))
@include('common.alerts.alert')
@section('content')
    <div class="card radius-10 {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="mb-0">{{ __('role_management') }}</h6>
                </div>

                <div class="dropdown ms-auto">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                            class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('roles.create') }}">{{ __('create_role') }}</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('permissions.index') }}">{{ __('permission_management') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('user-role.index') }}">{{ __('submit_user-role') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('dashboard.panel') }}">{{ __('back_to_dashboard') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($roles) > 0)
                <table class="table table-striped table-bordered align-middle mb-0" id="data-table" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>{{ __('id') }}</th>
                            <th>{{ __('title_of_role') }}</th>
                            <th class="text-center">{{ __('settings') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->description }}</td>
                                <td>
                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center justify-content-center gap-3">
                                            <a href="{{ route('roles.edit', $role->id) }}" type="buttom" class="btn btn-sm btn-warning px-4">{{ __('edit') }}</a>
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="post" id="deleteForm">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger px-4 deleteItem">{{ __('delete') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
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
