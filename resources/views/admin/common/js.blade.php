	<!-- Bootstrap JS -->
	<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
	<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	{{-- <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
	{{-- <script src="{{ asset('admin/assets/plugins/chartjs/js/chart.js') }}"></script> --}}
	{{-- <script src="{{ asset('admin/assets/js/index.js') }}"></script> --}}
	<!--app JS-->
	<script src="{{ asset('admin/assets/js/app.js') }}"></script>

	<script>
        new PerfectScrollbar(".app-container")
	</script>

    <script src="{{ asset('admin/assets/plugins/sweetalert/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('admin/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
