<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/velonic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 12:20:28 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('velonic/layouts/assets/images/favicon.ico')}}">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ asset('velonic/layouts/assets/vendor/daterangepicker/daterangepicker.css')}}">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{ asset('velonic/layouts/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}">

    <!-- Theme Config Js -->
    <script src="{{ asset('velonic/layouts/assets/js/config.js')}}"></script>

    <!-- App css -->
    <link href="{{ asset('velonic/layouts/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('velonic/layouts/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('velonic/layouts/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('velonic/layouts/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('velonic/layouts/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('velonic/layouts/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('velonic/layouts/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('velonic/layouts/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- Select2 css -->

    <link href="{{ asset('velonic/layouts/assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Touchspin css -->
    <link href="{{ asset('velonic/layouts/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Datepicker css -->
    <link href="{{ asset('velonic/layouts/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Timepicker css -->
    <link href="{{ asset('velonic/layouts/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Flatpickr Timepicker css -->
    <link href="{{ asset('velonic/layouts/assets/vendor/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />


    <!-- Bootstrap Touchspin css -->
    <link href="{{ asset('velonic/layouts/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet"
        type="text/css" />

</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        @include('layouts.header')
        <!-- ========== Topbar End ========== -->


        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.sidebar')
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            @yield('content')
            <!-- content -->

            <!-- Footer Start -->
            @include('layouts.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-3">
                    <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light">
                                <label class="form-check-label" for="layout-color-light">
                                    <img src="{{ asset('velonic/layouts/assets/images/layouts/light.png')}}" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark">
                                <label class="form-check-label" for="layout-color-dark">
                                    <img src="velonic/layouts/assets/images/layouts/dark.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                    <label class="form-check-label" for="layout-mode-fluid">
                                        <img src="{{ asset('velonic/layouts/assets/images/layouts/light.png')}}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                            </div>

                            <div class="col-4">
                                <div id="layout-boxed">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                        <label class="form-check-label" for="layout-mode-boxed">
                                            <img src="velonic/layouts/assets/images/layouts/boxed.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="form-check-label" for="topbar-color-light">
                                    <img src="{{ asset('velonic/layouts/assets/images/layouts/light.png')}}" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="form-check-label" for="topbar-color-dark">
                                    <img src="{{ asset('velonic/layouts/assets/images/layouts/topbar-dark.png')}}" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light">
                                    <label class="form-check-label" for="leftbar-color-light">
                                        <img src="{{ asset('velonic/layouts/assets/images/layouts/sidebar-light.png')}}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label" for="leftbar-color-dark">
                                        <img src="{{ asset('velonic/layouts/assets/images/layouts/light.png')}}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                    <label class="form-check-label" for="leftbar-size-default">
                                        <img src="{{ asset('velonic/layouts/assets/images/layouts/light.png')}}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label" for="leftbar-size-compact">
                                        <img src="{{ asset('velonic/layouts/assets/images/layouts/compact.png')}}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label" for="leftbar-size-small">
                                        <img src="{{ asset('velonic/layouts/assets/images/layouts/sm.png')}}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                            </div>


                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                    <label class="form-check-label" for="leftbar-size-full">
                                        <img src="{{ asset('velonic/layouts/assets/images/layouts/full.png')}}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                        <div class="btn-group checkbox" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velonic" target="_blank" role="button" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('velonic/layouts/assets/js/vendor.min.js')}}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>

    <!-- Apex Charts js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector Map js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- Dashboard App js -->
    <script src="{{ asset('velonic/layouts/assets/js/pages/dashboard.js')}}"></script>

    <!-- Datatables js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>

    <!-- Datatable Demo Aapp js -->
    <script src="{{ asset('velonic/layouts/assets/js/pages/datatable.init.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('velonic/layouts/assets/js/app.min.js')}}"></script>

    <!--  Select2 Plugin Js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/select2/js/select2.min.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

    <!-- Bootstrap Timepicker Plugin js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>

    <!-- Input Mask Plugin js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/jquery-mask-plugin/jquery.mask.min.js')}}"></script>

    <!-- Bootstrap Touchspin Plugin js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

    <!-- Bootstrap Maxlength Plugin js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

    <!-- Typehead Plugin js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/handlebars/handlebars.min.js')}}"></script>
    <script src="{{ asset('velonic/layouts/assets/vendor/typeahead.js/typeahead.bundle.min.js')}}"></script>

    <!-- Flatpickr Timepicker Plugin js -->
    <script src="{{ asset('velonic/layouts/assets/vendor/flatpickr/flatpickr.min.js')}}"></script>

    <!-- Typehead Demo js -->
    <script src="{{ asset('velonic/layouts/assets/js/pages/typehead.init.js')}}"></script>

    <!-- Timepicker Demo js -->
    <script src="{{ asset('velonic/layouts/assets/js/pages/timepicker.init.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('velonic/layouts/assets/js/app.min.js')}}"></script>

      <!-- Bootstrap Touchspin Plugin js -->
      <script src="{{ asset('velonic/layouts/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

    <script>
        const exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            const modalTitle = exampleModal.querySelector('.modal-title')
            const modalBodyInput = exampleModal.querySelector('.modal-body input')

            modalTitle.textContent = `New message to ${recipient}`
            modalBodyInput.value = recipient
        })
    </script>

</body>

<!-- Mirrored from techzaa.getappui.com/velonic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 12:21:02 GMT -->

</html>
