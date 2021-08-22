<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>QuanLyDiemSV-Manager</title>
    <link rel="icon" type="image/png" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/images/logo-icon.png"/>
    <link href="{{ asset('/backend/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/css/theme/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/libs/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/libs/quill/dist/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/libs/bootstrap-toggle/bootstrap-toggle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    @stack('vendor_css')
    <link href="{{ asset('/backend/css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/common.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
<div class="main-wrapper">
    <div class="preloader" style="display: none;">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    @yield('content')

</div>

<script src="{{ asset('/backend/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/backend/libs/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('/backend/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('/backend/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/backend/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('/backend/js/theme/waves.js') }}"></script>
<script src="{{ asset('/backend/js/theme/sidebarmenu.js') }}"></script>
<script src="{{ asset('/backend/js/theme/custom.min.js') }}"></script>
<script src="{{ asset('/backend/libs/flot/excanvas.js') }}"></script>
<script src="{{ asset('/backend/libs/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('/backend/libs/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('/backend/libs/flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('/backend/libs/flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('/backend/libs/flot/jquery.flot.crosshair.js') }}"></script>
<script src="{{ asset('/backend/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('/backend/libs/loadingoverlay/loadingoverlay.min.js') }}"></script>
<script src="{{ asset('/backend/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('/backend/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('/backend/libs/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('/backend/libs/mask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('/backend/libs/mask/mask.init.js') }}"></script>
<script src="{{ asset('/backend/libs/jquery_maxlength/jquery.maxlength.js') }}"></script>

<script src="{{ asset('/backend/js/common.js') }}"></script>

</body>

</html>

