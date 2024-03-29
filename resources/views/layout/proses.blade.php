<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLSAM - Point Exchange</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/waste-bank/TRASH.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/waste-bank/icon 16x16.png" />
    <link rel="manifest" href="assets/images/resources/logo-1.png" />
    <meta name="description" content="OLSAM" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">



    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/wostin-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/wostin.css" />
    <link rel="stylesheet" href="assets/css/wostin-responsive.css" />

    <style>
        ol{
            color: black;
            
        }
        container{
            background: rgb(255,255,255) !important;
background: linear-gradient(357deg, rgba(255,255,255,1) 0%, rgba(220,255,219,1) 100%) !important;
        }
        #img-container{
            position: absolute; 
            height: 100px;
            width: 100px;
            top: 50;
            margin-top: -100px;
            left: 80%;
           
        }

    </style>
</head>
<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-wrapper__logo">
                        <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
                    </div>
                    <div class="main-menu-three__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li>
                                <a href="/index" class="active-tab">Beranda</a>
                            </li>
                            <li>
                                <a href="/service" class="active-tab">Layanan Kami</a>
                            </li>
                            <li>
                                <a href="/about">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="/proses">Cara Kerja</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Informasi
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/informasi">Bank Sampah</a></li>
                                  <li><a class="dropdown-item" href="/pemilihan_sampah">Pemilihan Sampah</a></li>
                                </ul>
                              </li>
                            <li>
                                <a href="/kontak">Kontak Kami</a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-menu-three__right">
                        <div class="main-menu-three__search-box">
                            <a href="/login">Masuk</a>
                        </div>
                        <div class="main-menu-three__call">
                            <div class="main-menu-three__call-icon">
                                <span class="icon-budget"></span>
                            </div>
                            <div class="main-menu-three__call-number">
                                <h5><a href="/poin">Point</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

                            
                            <!--Main Slider Start-->
        <section class="main-slider main-slider-three">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": false,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        
                        <div class="container">
                            <img src="assets/fdesign/18.png" alt="" id="img-container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content" style="margin-top:-70px;">
                                        <h1 style="font-family: Arial, Helvetica, sans-serif;font-weight: bold;font-size: xx-large;margin-bottom:25px;">Alur Penukaran Poin<br />Menjadi Voucher Belanja</h1>
                                        <p><ol>
                                            <li>
                                                Login ke Akun Anda:
                                                <ul>
                                                    <li>
                                                        Buka situs web Bank Sampah.
                                                    </li>
                                                    <li>
                                                        Masuk ke akun Anda menggunakan nama pengguna dan kata sandi.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Akses Halaman Penukaran Poin:
                                                <ul>
                                                    <li>
                                                    Setelah masuk, cari opsi atau halaman yang berkaitan dengan penukaran poin menjadi voucher. Ini mungkin disebut "Penukaran Poin" atau "Voucher Rewards."
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Pilih Voucher yang Diinginkan:
                                                <ul>
                                                    <li>
                                                    Jelajahi daftar voucher yang tersedia. Voucher tersebut mungkin mencakup berbagai penawaran, seperti diskon belanja, produk gratis, atau layanan tertentu.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Lihat Persyaratan Penukaran:
                                                <ul>
                                                    <li>
                                                    Setiap voucher mungkin memiliki persyaratan tertentu, seperti jumlah poin yang diperlukan untuk menebusnya atau batas waktu penggunaan. Pastikan Anda membaca persyaratan dengan teliti.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Pilih Jumlah Poin yang Akan Ditebus:
                                                <ul>
                                                    <li>
                                                    Pilih jumlah poin yang ingin Anda tukarkan untuk voucher tersebut. Jumlah ini akan tergantung pada jumlah poin yang Anda miliki dan jumlah yang diperlukan untuk voucher yang Anda pilih.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Konfirmasi Penukaran:
                                                <ul>
                                                    <li>
                                                    Setelah Anda memilih jumlah poin, konfirmasikan penukaran tersebut. Pastikan Anda sudah yakin dengan pilihan Anda.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Terima Voucher:
                                                <ul>
                                                    <li>
                                                    Setelah penukaran poin berhasil, voucher Anda akan tersedia dalam akun Anda. Anda mungkin bisa mengunduhnya dalam format digital atau menerimanya melalui email.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Gunakan Voucher:
                                                <ul>
                                                    <li>
                                                        Gunakan voucher yang Anda terima sesuai dengan persyaratan yang ada. Misalnya, jika itu adalah voucher diskon belanja, gunakan voucher tersebut saat berbelanja di toko yang berpartisipasi.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Selesaikan Transaksi:
                                                <ul>
                                                    <li>
                                                        Setelah menggunakan voucher, pastikan untuk menyelesaikan transaksi dengan cara yang sesuai dengan ketentuan voucher tersebut.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Cek Sisa Poin:
                                                <ul>
                                                    <li>
                                                        Setelah penukaran selesai, cek sisa poin yang Anda miliki untuk mengetahui berapa poin yang masih tersedia untuk ditukarkan atau digunakan di masa mendatang.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Logout :
                                                <ul>
                                                    <li>
                                                        Jangan lupa untuk logout dari akun Anda jika Anda telah menggunakan komputer atau perangkat umum untuk menghindari akses yang tidak sah.
                                                    </li>
                                                </ul>
                                            </li>
                                        </ol></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->
       </div>

       <!--Site Footer Start-->
       <footer class="site-footer">
        <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.jpg);">
        </div>
        <div class="site-footer__middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInUp animated" data-wow-delay="100ms" style="margin-right: auto; visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="footer-widget__column footer-widget__about">
                            <a href="index.html"><img src="assets/images/resources/logo-1.png" alt="" style="margin-bottom:50px;"></a>
                            <div class="footer-widget__about-text-box">
                                <p class="footer-widget__about-text">"Transformasi Sampah Menjadi Kebaikan: Mari Bersama-sama Peduli Lingkungan dan Dapatkan Insentif!"</p>
                            </div>
                            <div class="social-icons" style="margin-top:10px;">
                                <a href="#" class="social-icon"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram fa-2x"></i></a>
                                <!-- Add more social media icons as needed -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Abouts</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="about.html">Careers</a></li>
                                <li><a href="request-pickup.html">Contact us</a></li>
                                <li><a href="about.html">Privacy Policy</a></li>
                                <li><a href="services.html">Terms and Condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="footer-widget__column footer-widget__services clearfix">
                            <h3 class="footer-widget__title">Olah Sampah</h3>
                            <ul class="footer-widget__services-list list-unstyled clearfix">
                                <li><a href="dumpster-rental.html">Products</a></li>
                                <li><a href="about.html">Partner</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="zero-waste.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="site-footer-bottom-shape"
                style="background-image: url(assets/images/shapes/site-footer-bottom-shape.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">Berubah Untuk Bumi: Poin Untuk Planet</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>




    <!-- template js -->
    <script src="assets/js/wostin.js"></script>
</body>
</html>
