<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title> {!! env('APP_NAME') . ' |' . ' Dashboard' !!}</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ url('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ url('admin/assets/plugins/charts-c3/c3.min.css') }}" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{ url('admin/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/css/theme1.css') }}" />
</head>

<body class="font-montserrat">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">
        <!-- header_top -->
        @include('admin.layout.partials.header_top')
        <!-- ./header_top -->
        <!-- rightsidebar -->
        @include('admin.layout.partials.rightsidebar')
        <!-- ./rightsidebar -->
        <!-- theme_div -->
        @include('admin.layout.partials.theme_div')
        <!-- ./theme_div -->

        <!-- user_div -->
        @include('admin.layout.partials.user_div')
        <!-- ./user_div -->
        <!-- left-sidebar -->
        @include('admin.layout.partials.left-sidebar')
        <!-- ./left-sidebar -->
        <div class="page">
            <!-- page_top -->
            @include('admin.layout.partials.page_top')
            <!-- ./page_top -->
            @yield('content')
            <!-- footer -->
            @include('admin.layout.partials.footer')
            <!-- ./footer -->
        </div>
    </div>


    <script src="{{ url('admin/assets/bundles/lib.vendor.bundle.js') }}"></script>

    <script src="{{ url('admin/assets/bundles/apexcharts.bundle.js') }}"></script>
    <script src="{{ url('admin/assets/bundles/counterup.bundle.js') }}"></script>
    <script src="{{ url('admin/assets/bundles/knobjs.bundle.js') }}"></script>
    <script src="{{ url('admin/assets/bundles/c3.bundle.js') }}"></script>

    <script src="{{ url('admin/assets/js/core.js') }}"></script>
    <script src="{{ url('admin/assets/js/page/project-index.js') }}"></script>
</body>

<!-- soccer/project/  07 Jan 2020 03:37:22 GMT -->

</html>
