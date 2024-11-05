<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Tasks</title>
    

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor-dashboard/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor-dashboard/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor-dashboard/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor-dashboard/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor-dashboard/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor-dashboard/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor-dashboard/simple-datatables/style.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @livewireStyles
    @stack('styles')
</head>

<body>
    @include('layouts.partials.dashboard_nav')
    @include('layouts.partials.dashboard_sidebar')

    <main id="main" class="main">
        @yield('content')
    </main>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor-dashboard/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor-dashboard/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor-dashboard/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('vendor-dashboard/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendor-dashboard/quill/quill.js') }}"></script>
    <script src="{{ asset('vendor-dashboard/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('vendor-dashboard/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor-dashboard/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main-dashboard.js') }}"></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
    @stack('scripts')
</body>
