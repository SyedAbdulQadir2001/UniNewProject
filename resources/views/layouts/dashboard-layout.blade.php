<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title")</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset("assets/vendors/mdi/css/materialdesignicons.min.css") }}">
    <!--    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">-->
    <!-- endinject -->

    <!-- Plugin css for this page -->

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }} ">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}" />
</head>
<body>
@if(Session()->has("error"))
<div style="z-index: 1031; position: absolute; top: 0; height: 40px; right: -50%; background: indianred; width: 100%; transform: translateX(-50%); text-align: center" >
    <p class="py-2">Page not found</p>
</div>
@endif

@yield("content")



<!-- plugins:js -->
<script src="{{ asset("assets/vendors/js/vendor.bundle.base.js") }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset("assets/vendors/chart.js/Chart.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.cookie.js") }}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset("assets/js/off-canvas.js") }}"></script>
<script src="{{asset("assets/js/hoverable-collapse.js")}}"></script>
<script src="{{asset("assets/js/misc.js")}}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="{{asset("assets/js/dashboard.js")}}"></script>
<script src="{{ asset("assets/js/todolist.js") }}"></script>
<!-- End custom js for this page -->
</body>
</html>
