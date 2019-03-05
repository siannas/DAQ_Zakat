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

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                            aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Arjun Aksan</span>
                                <img class="img-profile rounded-circle">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">ZakatKu
                                                Tersalurkan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.5.000.000</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-success btn-circle">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sisa
                                                ZakatKu</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.1.000.000</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-warning btn-circle">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progress</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">90%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 90%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-danger btn-circle">
                                                <i class="fas fa-angle-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Gerakan
                                                Cinta Sedekah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Kuy!!!</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-info btn-circle">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!--==========================
    Intro Section
  ============================-->
                            <section id="intro" class="clearfix">
                                <div class="container">

                                    <div class="intro-img">
                                        <img src="img/intro-img.svg" alt="" class="img-fluid">
                                    </div>

                                    <div class="intro-info">
                                        <h2>ZakatKita<br><span>memberi</span><br>untuk Ummat</h2>
                                        <div>
                                            <a href="#about" class="btn-get-started scrollto">Bayar ZakatKu</a>
                                            <a href="#services" class="btn-services scrollto">Hitung dulu</a>
                                        </div>
                                    </div>

                                </div>
                            </section><!-- #intro -->

                            <main id="main">

                        </div>


                    </div>
                    <div class="row">

                        <div class="col-lg-12">

                            <!--==========================
      Portfolio Section
    ============================-->
                            <section id="portfolio" class="clearfix">
                                <div class="container">

                                    <header class="section-header">
                                        <h3 class="section-title">Apa yang baru?</h3>
                                    </header>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul id="portfolio-flters">
                                                <li data-filter="*" class="filter-active">Semua</li>
                                                <li data-filter=".filter-app">Infaq</li>
                                                <li data-filter=".filter-card">Zakat</li>
                                                <li data-filter=".filter-web">Blog</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row portfolio-container">

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">App 1</a></h4>
                                                    <p>App</p>
                                                    <div>
                                                        <a href="img/portfolio/app1.jpg" data-lightbox="portfolio"
                                                            data-title="App 1" class="link-preview" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">Web 3</a></h4>
                                                    <p>Web</p>
                                                    <div>
                                                        <a href="img/portfolio/web3.jpg" class="link-preview"
                                                            data-lightbox="portfolio" data-title="Web 3" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">App 2</a></h4>
                                                    <p>App</p>
                                                    <div>
                                                        <a href="img/portfolio/app2.jpg" class="link-preview"
                                                            data-lightbox="portfolio" data-title="App 2" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">Card 2</a></h4>
                                                    <p>Card</p>
                                                    <div>
                                                        <a href="img/portfolio/card2.jpg" class="link-preview"
                                                            data-lightbox="portfolio" data-title="Card 2" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">Web 2</a></h4>
                                                    <p>Web</p>
                                                    <div>
                                                        <a href="img/portfolio/web2.jpg" class="link-preview"
                                                            data-lightbox="portfolio" data-title="Web 2" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">App 3</a></h4>
                                                    <p>App</p>
                                                    <div>
                                                        <a href="img/portfolio/app3.jpg" class="link-preview"
                                                            data-lightbox="portfolio" data-title="App 3" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">Card 1</a></h4>
                                                    <p>Card</p>
                                                    <div>
                                                        <a href="img/portfolio/card1.jpg" class="link-preview"
                                                            data-lightbox="portfolio" data-title="Card 1" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">Card 3</a></h4>
                                                    <p>Card</p>
                                                    <div>
                                                        <a href="img/portfolio/card3.jpg" class="link-preview"
                                                            data-lightbox="portfolio" data-title="Card 3" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                                            <div class="portfolio-wrap">
                                                <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                                                <div class="portfolio-info">
                                                    <h4><a href="#">Web 1</a></h4>
                                                    <p>Web</p>
                                                    <div>
                                                        <a href="img/portfolio/web1.jpg" class="link-preview"
                                                            data-lightbox="portfolio" data-title="Web 1" title="Preview"><i
                                                                class="ion ion-eye"></i></a>
                                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section><!-- #portfolio -->
                        </div>
                        <!--==========================
      Services Section
    ============================-->
                        <div class="col-lg-12">
                            <section id="services" class="section-bg">
                                <div class="container">

                                    <header class="section-header">
                                        <h3>Kalkulasi Zakat</h3>

                                    </header>

                                    <div class="row">

                                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                                            <div class="box">
                                                <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                                                <h4 class="title"><a href="">Zakat Pertanian</a></h4>
                                                <p class="description">Voluptatum deleniti atque corrupti quos dolores
                                                    et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                                            <div class="box">
                                                <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                                                <h4 class="title"><a href="">Zakat Peternakan</a></h4>
                                                <p class="description">Minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s"
                                            data-wow-duration="1.4s">
                                            <div class="box">
                                                <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                                                <h4 class="title"><a href="">Zakat Perniagaan</a></h4>
                                                <p class="description">Duis aute irure dolor in reprehenderit in
                                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s"
                                            data-wow-duration="1.4s">
                                            <div class="box">
                                                <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                                                <h4 class="title"><a href="">Zakat Emas & Perak</a></h4>
                                                <p class="description">Excepteur sint occaecat cupidatat non proident,
                                                    sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s"
                                            data-wow-duration="1.4s">
                                            <div class="box">
                                                <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                                                <h4 class="title"><a href="">Zakat Barang Temuan</a></h4>
                                                <p class="description">At vero eos et accusamus et iusto odio
                                                    dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                                                    atque</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s"
                                            data-wow-duration="1.4s">
                                            <div class="box">
                                                <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                                                <h4 class="title"><a href="">Zakat Barang Tambang</a></h4>
                                                <p class="description">Et harum quidem rerum facilis est et expedita
                                                    distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                                            <div class="box">
                                                <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                                                <h4 class="title"><a href="">Zakat Penghasilan</a></h4>
                                                <p class="description">Voluptatum deleniti atque corrupti quos dolores
                                                    et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                                            <div class="box">
                                                <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                                                <h4 class="title"><a href="">Zakat Uang Simpanan</a></h4>
                                                <p class="description">Minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section><!-- #services -->
                        </div>


                        <div class="col-lg-12">
                            <!--==========================
      Contact Section
    ============================-->
                            <section id="contact">
                                <div class="container-fluid">

                                    <div class="section-header">
                                        <h3>Contact Us</h3>
                                    </div>

                                    <div class="row wow fadeInUp">

                                        <div class="col-lg-6">
                                            <div class="map mb-4 mb-lg-0">
                                                <iframe src="https://www.google.com/maps/d/embed?mid=1hIfRYCJREgxekUrc7yRTYEQDD1M"
                                                    width="640" height="480" frameborder="0" style="border:0; width: 100%; height: 312px;"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-5 info">
                                                    <i class="ion-ios-location-outline"></i>
                                                    <p>Institut Teknologi Sepuluh November</p>
                                                </div>
                                                <div class="col-md-4 info">
                                                    <i class="ion-ios-email-outline"></i>
                                                    <p>zakatkita@gmail.com</p>
                                                </div>
                                                <div class="col-md-3 info">
                                                    <i class="ion-ios-telephone-outline"></i>
                                                    <p>+62 8953 6770 6619</p>
                                                </div>
                                            </div>

                                            <div class="form">
                                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                                <div id="errormessage"></div>
                                                <form action="" method="post" role="form" class="contactForm">
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-6">
                                                            <input type="text" name="name" class="form-control" id="name"
                                                                placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                            <div class="validation"></div>
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <input type="email" class="form-control" name="email" id="email"
                                                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" id="subject"
                                                            placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                        <div class="validation"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                            data-rule="required" data-msg="Please write something for us"
                                                            placeholder="Message"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                    <div class="text-center"><button type="submit" title="Send Message">Send
                                                            Message</button></div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section><!-- #contact -->

                        </div>


                        <!-- Pie Chart -->
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!--==========================
    Footer
  ============================-->
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
