@extends('layout.layanan')

@section('title', 'OLSAM | Protect Our Environtment')

@section('content')
<section>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="col-xl-12">
                <div class="manage-waste__inner">
                    <h3 class="manage-waste__title" style="color: black;">Kelola Sampah Secara Efektif <br> dan Mengurangi Dampak Lingkungan
                    </h3>
                <div class="manage-waste__btn-box">
                    <a href="https://api.whatsapp.com/send?phone=62895393112867&text=Saya%20ingin%20melakukan%20penukaran%20sampah,%20harap%20lakukan%20penjemputan%20ke%20lokasi%20saya%20sekarang.&app_absent=0" class="thm-btn manage-waste__btn-1">Jemput Sampahmu</a>
                    <a href="contact.html" class="thm-btn manage-waste__btn-2">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>
   
<!-- service -->
<section class="services-one">
    <div class="container">
        <div class="services-one__top">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="services-one__top-left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Apa yang kami tawarkan</span>
                            <h2 class="section-title__title">Layanan yang kami berikan<br> kepada pelanggan kami
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="services-one__top-right">
                        <p class="services-one__top-text">Kami berkomitmen untuk mengurangi penumpukan sampah di masyarakat sampai sampah terkecil sekalipun, sebagai salah satu upaya dalam menjaga lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-one__bottom">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Services One Single-->
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="assets/images/services/services-1-1.jpg" alt="">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-garbage-1"></span>
                            </div>
                        </div>
                        <div class="services-one__content-box">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="zero-waste.html">Zero Waste</a></h3>
                            </div>
                            <div class="services-one__hover">
                                <h3 class="services-one__hover-title"><a href="zero-waste.html">Zero Waste</a>
                                </h3>
                                <p class="services-one__hover-text">Membantu mengurangi limbah di sekitar rumahmu.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <!--Services One Single-->
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="assets/images/services/services-1-2.jpg" alt="">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-dumpster"></span>
                            </div>
                        </div>
                        <div class="services-one__content-box">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="dumpster-rental.html">Pickup</a></h3>
                            </div>
                            <div class="services-one__hover">
                                <h3 class="services-one__hover-title"><a href="dumpster-rental.html">Pickup
                                    </a></h3>
                                <p class="services-one__hover-text">Jemputan sampah dengan waktu fleksibel.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <!--Services One Single-->
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="assets/images/services/services-1-3.jpg" alt="">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-portable-toilets"></span>
                            </div>
                        </div>
                        <div class="services-one__content-box">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="portable-toilet.html">Olsam Point</a></h3>
                            </div>
                            <div class="services-one__hover">
                                <h3 class="services-one__hover-title"><a href="portable-toilet.html">Olsam Point
                                    </a></h3>
                                <p class="services-one__hover-text">Konversi sampahmu menjadi point.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <!--Services One Single-->
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="assets/images/services/services-1-4.jpg" alt="">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-triangular-arrows-sign-for-recycle"></span>
                            </div>
                        </div>
                        <div class="services-one__content-box">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="recylcing-services.html">Daur Ulang</a></h3>
                            </div>
                            <div class="services-one__hover">
                                <h3 class="services-one__hover-title"><a
                                        href="recylcing-services.html">Daur Ulang</a></h3>
                                <p class="services-one__hover-text">Daur ulang sampah untuk mengurangi penumpukan sampah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start welcome -->
<section class="waste-materials">
    <div class="container">
        <div class="waste-materials__inner">
            <div class="waste-materials-bg"
                style="background-image: url(assets/images/backgrounds/waste-materials-bg.jpg);"></div>
            <div class="waste-materials-shape-1 float-bob-y"><img
                    src="assets/images/shapes/waste-materials-shape-1.png" alt=""></div>
            <div class="waste-materials__title-box">
                <h2 class="waste-materials__title">Jenis sampah yang kami <br> kelola dan daur ulang</h2>
            </div>
            <div class="waste-materials__points">
                <ul class="list-unstyled waste-materials__point-1">
                    <li>
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <div class="text"><a href=""><p>Besi & Logam</p></a>  
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <div class="text"><a href=""><p>Lampu/Bohlam</p></a>  
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <div class="text"><a href="trash/plastik.html"><p>Plastik</p></a>  
                        </div>
                    </li>                      
                    
                    <li>
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <div class="text"><a href=""><p>Buku & Kertas</p></a>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled waste-materials__point-1 waste-materials__point-2">
                    <li>
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <div class="text"><a href=""><p>Alumunium</p></a>                                    
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <div class="text"><a href=""><p>Botol</p></a>                                    
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <div class="text"><a href=""><p>Makanan</p></a>                                    
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <div class="text"><a href=""><p>Elektronik</p></a>                                    
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Welcome End-->
<!--Welcome End-->
@endsection