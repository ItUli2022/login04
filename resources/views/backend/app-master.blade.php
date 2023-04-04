<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PT. Universal Luggage Indonesia</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin ULI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Backendassets/vendors/feather/feather.css">
    <link rel="stylesheet" href="Backendassets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="Backendassets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Backendassets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="Backendassets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="Backendassets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="Backendassets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="Backendassets/images/Favicon-UliNew.png" />

    <!-- Data Tables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

    <body>


            @yield('content')

        <!-- Data Tables JS CDN -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

        <script src="Backendassets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="Backendassets/vendors/chart.js/Chart.min.js"></script>
        <script src="Backendassets/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="Backendassets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="Backendassets/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="Backendassets/js/off-canvas.js"></script>
        <script src="Backendassets/js/hoverable-collapse.js"></script>
        <script src="Backendassets/js/template.js"></script>
        <script src="Backendassets/js/settings.js"></script>
        <script src="Backendassets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="Backendassets/js/dashboard.js"></script>
        <script src="Backendassets/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->

        <!-- Data Tables JS CDN -->
        <script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript"></script>




    </body>
</html>
