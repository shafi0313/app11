<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Soft Giant BD" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/daterangepicker/daterangepicker.css') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('backend/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('common/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Datatables css -->
    <link href="{{ asset('backend/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
</head>

<body>
    <div class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>

    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Topbar Start ========== -->
        @include('admin.layouts.includes.header')
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.includes.navigation')
        <!-- ========== Left Sidebar End ========== -->

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- Footer Start -->
            @include('admin.layouts.includes.footer')
            <!-- end Footer -->
        </div>
    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    @include('admin.layouts.includes.theme-settings')
    @include('admin.layouts.includes.alert')

    <!-- Vendor js -->
    <script src="{{ asset('backend/js/vendor.min.js') }}"></script>

    {{-- Sweet alert --}}
    <script src="{{ asset('common/plugins/sweet-alert/sweetalert-2.min.js') }}"></script>
    {{-- Cute alert --}}
    <link href="{{ asset('common/plugins/cute-alert/cute-alert.css') }}" rel="stylesheet">
    <script src="{{ asset('common/plugins/cute-alert/cute-alert.js') }}"></script>
    {{-- Select 2 --}}
    <link src="{{ asset('common/plugins/select2/css/select2.min.css') }}">
    <script src="{{ asset('common/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('common/js/http.js') }}"></script>
    <script src="{{ asset('common/js/custom.js') }}"></script>

    <!-- Datatables js -->
    <script src="{{ asset('backend/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ asset('backend/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/js/app.min.js') }}"></script>

    @stack('scripts')
    <div id="ajax_modal_container"></div>
</body>

</html>
