<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/velonic/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 12:21:16 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Log In | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('velonic/layouts/assets/images/favicon.ico')}}">

    <!-- Theme Config Js -->
    <script src="{{ asset('velonic/layouts/assets/js/config.js')}}"></script>

    <!-- App css -->
    <link href="{{ asset('velonic/layouts/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('velonic/layouts/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        @yield('contente')
        <!-- end container -->
    </div>
    <!-- end page -->

    @include('layouts-auth.footer')

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Vendor js -->
    <script src="{{ asset('velonic/layouts/assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('velonic/layouts/assets/js/app.min.js')}}"></script>

    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('scripts')
</body>


<!-- Mirrored from techzaa.getappui.com/velonic/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 12:21:16 GMT -->

</html>