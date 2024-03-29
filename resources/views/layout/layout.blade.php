<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> OLSAM - Protect Our Environtment</title>
    <!-- favicons Icons -->
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
                        <div class="main-slider-three-bg"
                            style="background-image: url(assets/images/backgrounds/main-slider-3-bg.jpg);">
                        </div>
                        <div class="main-slider-three-building">
                            <img src="assets/images/resources/main-slider-three-building.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider__content">
                                        <h5>Mari olah sampahmu bersama kami!</h5>
                                        <h3>Bangun dunia yang bebas sampah bersama Olah Sampah</h3>
                                        <p>Mulailah dengan gerakan kecil seperti mendaur ulangkan sampah untuk menjaga ekosistem dan lingkungan kita</p>
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

        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <ul class="list-unstyled feature-one__list">
                        <li class="feature-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__icon">
                                <span class="icon-budget"></span>
                            </div>
                            <h3 class="feature-one__title "><a href="about.html">Pengelolaan</a></h3>
                        </li>
                        <li class="feature-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__icon">
                                <span class="icon-calendar"></span>
                            </div>
                            <h3 class="feature-one__title "><a href="about.html">Insentif Poin</a></h3>
                        </li>
                        <li class="feature-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__icon">
                                <span class="icon-garbage"></span>
                            </div>
                            <h3 class="feature-one__title "><a href="about.html">Komunitas</a></h3>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        

        <!--Welcome Start-->
        <section class="welcome" style="margin-top:100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"></span>
                                <h2 class="section-title__title">Insentif Poin Untuk Praktik Ramah
                                    Lingkungan</h2>
                            </div>
                            <p class="welcome__text-2">Konsep yang dapat membawa perubahan positif 
                                dalam pengelolaan sampah dan pelestarian 
                                lingkungan. Dengan memberikan poin kepada 
                                individu yang berpartisipasi dalam praktik ramah 
                                lingkungan. Ini adalah langkah yang inovatif dan 
                                efektif untuk memotivasi individu dan komunitas 
                                dalam upaya melindungi planet kita.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome__left">
                            <div>
                                <div class="welcome__img">
                                    <img src="assets/images/resources/cash.jpeg" alt="" style="height:390px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 70px;">
                    <div class="col-xl-6">
                        <div class="welcome__left">
                            <div>
                                <div class="welcome__img">
                                    <img src="assets/fdesign/9.jpeg" alt="" style="height:390px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"></span>
                                <h2 class="section-title__title">Dukungan Perubahan Perilaku
                                    Yang Positif</h2>
                            </div>
                            <p class="welcome__text-2">Gabungkan kesadaran lingkungan dengan insentif poin yang menggiurkan, dan saksikan bagaimana perubahan kecil dalam gaya hidup Anda, seperti mengurangi penggunaan plastik sekali pakai atau bersepeda ke tempat kerja, dapat menghasilkan dampak besar bagi lingkungan dan kesejahteraan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome End-->

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


    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>




    <!-- template js -->
    <script src="assets/js/wostin.js"></script>
</body>


</html>