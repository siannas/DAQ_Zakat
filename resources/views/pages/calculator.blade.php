@extends('layouts.main')

@section('calculator')
<!-- Main Content -->
<div id="content">

    @include('includes.topnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid page-body">
        <ul class="nav nav-pills nav-fill mb-3" id="tabs_2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tabs_2_1" role="tab"
                    aria-controls="home" aria-selected="true">
                    <span class="nav-link-icon d-block"><i class="fas fa-atlas fa-2x"></i></span>
                    <span class="d-none d-sm-block mt-3">Tentang Zakat Fitrah</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab"
                    aria-controls="profile" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="fas fa-calculator fa-2x"></i></span>
                    <span class="d-none d-sm-block mt-3">Kalkulasi & Pembayaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs_2_3" role="tab"
                    aria-controls="contact" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="fas fa-question fa-2x"></i></i></span>
                    <span class="d-none d-sm-block mt-3">Ajukan Pertanyaan</span>
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs_2_1" role="tabpanel" aria-labelledby="home-tab">
                <!--==========================
  About Us Section
============================-->
                <section id="about">
                    <div class="container">

                        <header class="section-header">
                            <h3>Tentang Zakat Fitrah</h3>
                            <p>Serba serbi zakat fitrah, pengertian, tujuan, dan keutamaan.</p>
                        </header>

                        <div class="row about-container">


                            <div class="col-lg-6 content order-lg-1 order-2">
                                <p>
                                    Zakat Fitrah ialah zakat diri yang diwajibkan atas diri setiap individu
                                    lelaki dan perempuan muslim yang berkemampuan dengan syarat-syarat yang
                                    ditetapkan. Kata Fitrah yang ada merujuk pada keadaan manusia saat baru
                                    diciptakan sehingga dengan mengeluarkan zakat ini manusia dengan izin
                                    Allah akan kembali fitrah.
                                </p>

                                <div class="icon-box wow fadeInUp">
                                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                                    <h4 class="title"><a href="">Besar Zakat</a></h4>
                                    <p class="description">Besar zakat yang dikeluarkan menurut para ulama
                                        adalah sesuai penafsiran terhadap hadits adalah sebesar satu sha' (1
                                        sha'=4 mud, 1 mud=675 gr) atau kira-kira setara dengan 3,5 liter
                                        atau 2.7 kg makanan pokok (tepung, kurma, gandum, aqith) atau yang
                                        biasa dikonsumsi di daerah bersangkutan (Mazhab syafi'i dan Maliki)
                                    </p>
                                </div>

                                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon"><i class="fa fa-photo"></i></div>
                                    <h4 class="title"><a href="">Waktu Pengeluaran</a></h4>
                                    <p class="description">Zakat Fitrah dikeluarkan pada bulan Ramadan,
                                        paling lambat sebelum orang-orang selesai menunaikan Salat Ied. Jika
                                        waktu penyerahan melewati batas ini maka yang diserahkan tersebut
                                        tidak termasuk dalam kategori zakat melainkan sedekah biasa.</p>
                                </div>

                                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon"><i class="fa fa-bar-chart"></i></div>
                                    <h4 class="title"><a href="">Penerima Zakat</a></h4>
                                    <p class="description">Penerima Zakat secara umum ditetapkan dalam 8
                                        golongan/asnaf (fakir, miskin, amil, muallaf, hamba sahaya,
                                        gharimin, fisabilillah, ibnu sabil) namun menurut beberapa ulama
                                        khusus untuk zakat fitrah mesti didahulukan kepada dua golongan
                                        pertama yakni fakir dan miskin. Pendapat ini disandarkan dengan
                                        alasan bahwa jumlah/nilai zakat yang sangat kecil sementara salah
                                        satu tujuannya dikelurakannya zakat fitrah adalah agar para fakir
                                        dan miskin dapat ikut merayakan hari raya dan saling berbagi sesama
                                        umat islam.</p>
                                </div>

                            </div>

                            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">

                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/JLbpPINCMGs" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>

                        <div class="row about-extra">
                            <div class="col-lg-6 wow fadeInUp">
                                <img src="img/about-extra-1.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                                <h4>Sumber Hadits berkenaan dengan Zakat Fitrah</h4>
                                <p>
                                    Diriwayatkan dari Ibnu Umar t.ia berkata : Rasulullah telah mewajibkan
                                    zakat fithrah dari bulan Ramadan satu sha' dari kurma, atau satu sha'
                                    dari sya'iir. atas seorang hamba, seorang merdeka, laki-laki, wanita,
                                    anak kecil dan orang dewasa dari kaum muslilmin. (H.R : Al-Bukhary dan
                                    Muslim)
                                </p>
                                <p>
                                    Diriwayatkan dari Umar bin Nafi' dari ayahnya dari Ibnu Umar ia berkata
                                    ; Rasulullah telah mewajibkan zakat fithrah satu sha' dari kurma atau
                                    satu sha' dari sya'iir atas seorang hamba, merdeka, laki-laki, wanita,
                                    anak kecil dan orang dewasa dari kaum muslimin dan dia memerintahkan
                                    agar di tunaikan / dikeluarkan sebelum manusia keluar untuk salat 'ied.
                                    (H. R : Al-Bukhary, Abu Daud dan Nasa'i)
                                </p>
                                <p>
                                    Diriwayatkan dari Ibnu Abbas ra. ia berkata : Rasulullah saw telah
                                    memfardhukan zakat fithrah untuk membersihkan orang yang shaum dari
                                    perbuatan sia-sia dan dari perkataan keji dan untuk memberi makan orang
                                    miskin. Barang siapa yang mengeluarkannya sebelum salat, maka ia berarti
                                    zakat yang di terima dan barang siapa yang mengeluarkannya sesudah salat
                                    'ied, maka itu berarti shadaqah seperti shadaqah biasa (bukan zakat
                                    fithrah). (H.R : Abu Daud, Ibnu Majah dan Daaruquthni)
                                </p>
                            </div>
                        </div>

                        <div class="row about-extra">
                            <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                                <img src="img/about-extra-2.svg" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                                <h4>Hikmah disyari'atkannya Zakat Fitrah</h4>
                                <p>
                                    Zakat fitrah merupakan zakat diri, di mana Allah memberikan umur panjang
                                    baginya sehingga ia bertahan dengan nikmat-Nya.
                                </p>
                                <p>
                                    Zakat fitrah juga merupakan bentuk pertolongan kepada umat Islam, baik
                                    kaya maupun miskin sehingga mereka dapat berkonsentrasi penuh untuk
                                    beribadah kepada Allah Ta'ala dan bersukacita dengan segala anugerah
                                    nikmat-Nya.
                                </p>
                                <p>
                                    Hikmahnya yang paling agung adalah tanda syukur orang yang berpuasa
                                    kepada Allah atas nikmat ibadah puasa. (Lihat Al Irsyaad Ila Ma'rifatil
                                    Ahkaam, oleh Syaikh Abdurrahman bin Nashir As-Sa'di, hlm. 37.)
                                </p>
                                <p>
                                    Di antara hikmahnya adalah sebagaimana yang terkandung dalam hadits Ibnu
                                    Abbas radhiAllahu 'anhuma di atas, yaitu puasa merupakan pembersih bagi
                                    yang melakukannya dari kesia-siaan dan perkataan buruk, demikian pula
                                    sebagai salah satu sarana pemberian makan kepada fakir miskin.
                                </p>

                            </div>


                        </div>

                    </div>
                </section><!-- #about -->
            </div>
            <div class="tab-pane fade" id="tabs_2_2" role="tabpanel" aria-labelledby="profile-tab">


                <div class="container">
                    <br>
                    <p class="text-center">Pelajari Zakat Fitrah lebih lanjut <a href="fitrah.html">
                            disini</a></p>
                    <hr>

                    <div class="row">
                        <aside class="col-sm-6">

                            <article class="card">

                                <div class="card-body p-5">
                                    <p class="alert alert-success">Some text success or error</p>

                                    <form role="form">
                                        <div class="form-group">
                                            <label for="username">Nama Kepala Keluarga</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="username" placeholder=""
                                                    required="">
                                            </div> <!-- input-group.// -->
                                        </div> <!-- form-group.// -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="example-number-input">Jumlah
                                                        Keluarga</label>

                                                    <input class="form-control" type="number" value="0"
                                                        id="example-number-input">


                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="oke-number-input">Harga Beras</label>

                                                    <input class="form-control" id="oke-number-input">
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input">Tenggang
                                                        Zakat</label>

                                                    <input class="form-control" type="datetime-local"
                                                        value="2011-08-19T13:45:00" id="example-datetime-local-input">

                                                </div>
                                            </div>


                                            <button class="subscribe btn btn-primary btn-block" type="button"> Confirm
                                            </button>
                                    </form>
                                </div> <!-- card-body.// -->
                            </article> <!-- card.// -->


                        </aside> <!-- col.// -->
                        <aside class="col-sm-6">

                            <article class="card">

                                <div class="card-body p-5">

                                    <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                                <i class="fa fa-credit-card"></i> Hasil</a></li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                                <i class="fab fa-paypal"></i>Bayar Sekarang</a></li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                                <i class="fa fa-university"></i>Simpan Riwayat</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-tab-card">
                                            <p class="alert alert-success">Some text success or error</p>
                                            <div class="row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-12 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                        Total Zakat :</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        Rp.100.000</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div> <!-- tab-pane.// -->
                                        <div class="tab-pane fade" id="nav-tab-paypal">
                                            <p>Silahkan bayarkan zakat anda ke surau atau target penerima
                                                zakat terdekat anda secara langsung, bila sudah silahkan
                                                melakukan konfirmasi dengan menekan tombol di bawah untuk me
                                                record progress zakat anda</p>
                                            <p>
                                                <button type="button" class="btn btn-primary"> <i
                                                        class="fab fa-paypal"></i> Sudah Membayar </button>
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="nav-tab-bank">
                                            <p>Rincian Kalkulasi</p>
                                            <dl class="param">
                                                <dt>Username: </dt>
                                                <dd>...</dd>
                                            </dl>
                                            <dl class="param">
                                                <dt>Kode Zakat: </dt>
                                                <dd>12345678912345</dd>
                                            </dl>
                                            <dl class="param">
                                                <dt>Nominal Zakat: </dt>
                                                <dd>Rp. ...</dd>
                                            </dl>
                                            <p><strong>Catatan:</strong> Semua Record yang tersimpan akan
                                                ditampilkan di menu <a href="#">Zakat Saya</a></p>
                                            <button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i>
                                                Simpan </button>
                                        </div> <!-- tab-pane.// -->
                                    </div> <!-- tab-content .// -->

                                </div> <!-- card-body.// -->
                            </article> <!-- card.// -->


                        </aside> <!-- col.// -->
                    </div> <!-- row.// -->

                </div>
                <!--container end.//-->

                <br><br>
                <article class="bg-white mb-3">
                    <div class="card-body text-center">

                        <h3 class="text-white mt-3">Kalkulasi Zakat by - ZakatKita</h3>
                        <p class="h5 text-white">Komponen dan Fasilitas <br> didedikasikan untuk melayani
                            ummat</p> <br>
                        <p><a class="btn btn-white text-white" target="_blank" href="#"> zakatkita.com
                                <i class="fa fa-window-restore "></i></a></p>
                    </div>
                    <br><br>
                </article>
            </div>
            <div class="tab-pane fade" id="tabs_2_3" role="tabpanel" aria-labelledby="contact-tab">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul Tiket</label>
                        <input type="username" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Prioritas</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                            <option>Urgent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Tiket</label>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example"
                                value="customEx">
                            <label class="custom-control-label" for="customRadio">Keluhan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                value="customEx">
                            <label class="custom-control-label" for="customRadio2">Permintaan/Pertanyaan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Tiket</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
                <button class="subscribe btn btn-primary btn-block" type="button"> Confirm </button>
            </div>
        </div>

        <!-- Page Heading -->
        <!-- Dropdown Card Example -->


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
