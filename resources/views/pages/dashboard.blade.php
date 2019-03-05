@extends('layoutsphp.main')

@section('dashboard')
<!-- Main Content -->
<div id="content">

    @include('includes.topnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

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
                                            <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1"
                                                class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
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
                                            <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio"
                                                data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
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
                                            <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio"
                                                data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
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
                                            <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio"
                                                data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
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
                                            <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio"
                                                data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
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
                                            <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio"
                                                data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
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
                                            <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio"
                                                data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
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
                                            <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio"
                                                data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
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
                                            <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio"
                                                data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
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
                            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
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
                            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
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
                                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                                data-msg="Please write something for us" placeholder="Message"></textarea>
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
@endsection