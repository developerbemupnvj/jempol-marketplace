<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
        name="viewport">
    <title>Jempol Admin</title>
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('components.admin.navbar')
            @include('components.admin.sidebar')
            <div class="main-content">
                <section class="section">
                    <h1 class="section-header">
                        <div>@yield('header')</div>
                    </h1>
                    @yield('content')
                </section>
            </div>
        </div>
        @include('components.admin.footer')
    </div>
    <script src="{{ asset('modules/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/popper.js') }}"></script>
    <script src="{{ asset('modules/tooltip.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/select2.full.js') }}"></script>
    <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ asset('js/sa-functions.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('modules/summernote/summernote-lite.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>