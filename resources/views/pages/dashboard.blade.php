@extends('layouts.main')

@section('dashboard')
<!-- Main Content -->
<div id="content">
    @include('includes.topnavbar')
    <!-- Begin Page Content -->
    <div class="container-fluid page-body">

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
                                    <i class="fas fa-sync-alt"></i>
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

        {{-- partner --}}
        <div class="col-lg-12">
            <section id="services" class="section-bg">
                <div class="container">

                    <header class="section-header">
                        <h3>Our Partner</h3>
                    </header>

                    <div class="row">
                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box no-padding">
                                <div class="image img-fluid" style="background-image: url('data:image/png;base64,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');">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box no-padding">
                                <div class="image img-fluid" style="background-image: url('https://3.bp.blogspot.com/-2Qhib_51OtM/VcFZzhjZ7cI/AAAAAAAACuo/9QrDYWQFLfg/s1600/logo%2Bybm-bri.jpg');">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box no-padding">
                                <div class="image img-fluid" style="background-image: url('https://gudeg.net/cni-content/uploads/modules/posts/20150706024534.jpg');">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box no-padding">
                                <div class="image img-fluid" style="background-image: url('https://bmhpayment.com/wp-content/uploads/2018/04/bmh-logo.png');">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- #services -->
        </div>
        {{-- end partner --}}
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                            <a href="#" class="link-details" title="More Details"><i
                                                    class="ion ion-android-open"></i></a>
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
                                    <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i>
                                    </div>
                                    <h4 class="title"><a href="">Zakat Pertanian</a></h4>
                                    <p class="description">Voluptatum deleniti atque corrupti quos dolores
                                        et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i>
                                    </div>
                                    <h4 class="title"><a href="">Zakat Peternakan</a></h4>
                                    <p class="description">Minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s"
                                data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i>
                                    </div>
                                    <h4 class="title"><a href="">Zakat Perniagaan</a></h4>
                                    <p class="description">Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s"
                                data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i>
                                    </div>
                                    <h4 class="title"><a href="">Zakat Emas & Perak</a></h4>
                                    <p class="description">Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s"
                                data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i>
                                    </div>
                                    <h4 class="title"><a href="">Zakat Barang Temuan</a></h4>
                                    <p class="description">At vero eos et accusamus et iusto odio
                                        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                                        atque</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s"
                                data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i>
                                    </div>
                                    <h4 class="title"><a href="">Zakat Barang Tambang</a></h4>
                                    <p class="description">Et harum quidem rerum facilis est et expedita
                                        distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i>
                                    </div>
                                    <h4 class="title"><a href="">Zakat Penghasilan</a></h4>
                                    <p class="description">Voluptatum deleniti atque corrupti quos dolores
                                        et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i>
                                    </div>
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
                                        width="640" height="480" frameborder="0"
                                        style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
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
                                                    placeholder="Your Name" data-rule="minlen:4"
                                                    data-msg="Please enter at least 4 chars" />
                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" data-rule="email"
                                                    data-msg="Please enter a valid email" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Subject" data-rule="minlen:4"
                                                data-msg="Please enter at least 8 chars of subject" />
                                            <div class="validation"></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                                data-msg="Please write something for us"
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
{{-- dark overlay --}}
<div class="overlay"></div>
@endsection
