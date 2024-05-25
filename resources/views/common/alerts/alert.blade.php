@push('scripts')
    <script src="{{ asset('admin/assets/js/swal.js') }}"></script>

    @if (session()->has('success'))
        <script>
            swal()
        </script>
    @endif

    @if (session()->has('successful'))
        <script>
            swalToast(`@lang('successfully_done')`, 'success', 'bottom', 4500)
        </script>
    @endif

    @if (session()->has('old-password-not-match'))
        <script>
            swalToast(`@lang('old_password_not_match')`, 'error', 'top-right', 4500)
        </script>
    @endif

    @if (session()->has('change-password'))
        <script>
            swalToast(`@lang('password_successfully_changed')`, 'success', 'top-right', 4500)
        </script>
    @endif

    @if (session()->has('same-password'))
        <script>
            swalToast(`@lang('new_password_can_not_as_same_as_old_one')`, 'error', 'top-right', 4500)
        </script>
    @endif

    @if (session()->has('category-not-found'))
        <script>
            swal(`@lang('you_can_not_create_article_because_of_no_categories_found')`, 'warning')
        </script>
    @endif

    @if (session()->has('permission-not-found'))
        <script>
            swal(`@lang('you_can_not_create_or_edit_roles_because_of_no_permissions_found')`, 'warning')
        </script>
    @endif

    @if (session()->has('language_switched'))
    <script>
        swalToast(`@lang('language_switched_successfully')`, 'success', 'top-right', 4500)
    </script>
    @endif
@endpush
