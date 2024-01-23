@extends('layout.kontak')

@section('title', 'OLSAM | Protect Our Environtment')

@section('content')
<section class="page-header" style="margin-top:170px;">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Kontak Kami</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Beranda</a></li>
                <li>Kontak Kami</li>
            </ul>
        </div>
    </div>
</section>
<section class="header-about" style="background-image: linear-gradient(#8ad584ee, #ffffffc8);">
    <div class="row">
        <div class="col-xl-12">
            <div class="welcome">
                <form action="#" class="faq-search__search-form">
                    <input type="search" placeholder="Cari yang anda butuhkan" style="background-color: rgba(243, 243, 243, 0.999); color: black;">
                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title " style="font-size: 45px;">Pilih Opsi Yang Kami Sediakan</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Industries One Single-->
                <div class="industries-one__single">
                    <div class="industries-one__img">
                        <img src="assets/waste-bankimages.jpeg" alt="">
                    </div>
                    <div class="industries-one__content">
                        <div class="industries-one__icon">
                            <span class="icon-recycling-symbol"></span>
                        </div>
                        <h3 class="industries-one__title"><a href="panduan.html">Panduan</a>
                        </h3>
                        <p class="industries-one__text">Pertanyaan yang sering ditanyakan pengguna</p>
                        <div class="industries-one__arrow">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Industries One Single-->
                <div class="industries-one__single">
                    <div class="industries-one__img">
                        <img src="assets/waste-bankbank-sampah-png-616cc1e08bae9314b841cb22.png" alt="">
                    </div>
                    <div class="industries-one__content">
                        <div class="industries-one__icon">
                            <span class="icon-quote"></span>
                        </div>
                        <h3 class="industries-one__title"><a href="faq.html">FAQ</a>
                        </h3>
                        <p class="industries-one__text">Pertanyaan yang sering ditanyakan pengguna</p>
                        <div class="industries-one__arrow">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Industries One Single-->
                <div class="industries-one__single">
                    <div class="industries-one__img">
                        <img src="assets/waste-bankbank-sampah-dan-pegadaian_copy_800x500.jpg" alt="">
                    </div>
                    <div class="industries-one__content">
                        <div class="industries-one__icon">
                            <span class="icon-affection"></span>
                        </div>
                        <h3 class="industries-one__title"><a href="komunitas.html">Komunitas</a>
                        </h3>
                        <p class="industries-one__text">Pertanyaan yang sering ditanyakan pengguna</p>
                        <div class="industries-one__arrow">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="faq-content" style="margin-bottom:30px;">
      <h4 class="faq-content-title" style="font-size: 45px; font-weight: bold;"> <center>Cari dibawah ini<br></h4></center>
      <h5 class="faq-content-title-styele" style=" margin: 25px; font-size: 25px; font-family: Arial, Helvetica, sans-serif;"><center>Pilih salah satu pertanyaan yang sudah kami sediakan.</h5>
        <div class="row" style="display: flex; justify-content: center;
        align-items: center;
        position: relative;">
            <div class="col-xl-8 col-lg-7">
                <div class="faq-waste-pickup__left">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Cara kerja Point?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Point akan terus didapatkan apabila kita selalu rajin menukarkan sampah kita melalui
                                        website ini, dan juga dapat ditukarkan melalui menu <a href="point.html">poin</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Cara buat akun?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Untuk pembuatan akun dapat melalui menu registrasi yang telah tersedia
                                        ataupun dapat melalui <a href="register.html">tombol berikut</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion last-chiled">
                            <div class="accrodion-title">
                                <h4>Cara mencari komunitas?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Kamu dapat mencari komunitas peduli lingkungan di sekitar kamu, dan kamu dapat melakukan registrasi
                                        anggota dari komunitas kamu ke website kami ini.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



@endsection