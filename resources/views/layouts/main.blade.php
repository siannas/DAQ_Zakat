<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ZakatKita - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            @yield('dashboard')

            {{-- footer --}}
            <footer id="footer">
                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong>ZakatKita</strong>. All Rights Reserved
                    </div>
                </div>
            </footer><!-- #footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('lib/jquery-easing/jquery.easing.min.js') }}" ></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}" ></script>

    <!-- Page level plugins -->
    <script src="{{ asset('lib/chart.js/Chart.min.js') }}" ></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}" ></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}" ></script>
    
    <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}" ></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}" ></script>
    <script src="{{ asset('lib/mobile-nav/mobile-nav.js') }}" ></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}" ></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}" ></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}" ></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" ></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}" ></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}" ></script>
    
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('contactform/contactform.js') }}" ></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/main.js') }}" ></script>

</body>

</html>
