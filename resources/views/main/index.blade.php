@extends('layout.layout')

@section('title', 'OLSAM | Protect Our Environtment')

@section('content')
    
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
                            <h3 class="feature-one__title "><a href="about.blade.php">Pengelolaan</a></h3>
                        </li>
                        <li class="feature-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__icon">
                                <span class="icon-calendar"></span>
                            </div>
                            <h3 class="feature-one__title "><a href="about.blade.php">Insentif Poin</a></h3>
                        </li>
                        <li class="feature-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__icon">
                                <span class="icon-garbage"></span>
                            </div>
                            <h3 class="feature-one__title "><a href="about.blade.php">Komunitas</a></h3>
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
@endsection