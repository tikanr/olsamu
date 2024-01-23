@extends('layout.penukaran')

@section('title', 'OLSAM | Protect Our Environtment')

@section('content')
<section class="services-one">
    <div class="container">
             <h1 class="industy-details__title"><b>Kumpulkan untuk Mendapatkan Voucher!</b></h1>
                 </div>
        </section>
                <section class="header-about" style="background: linear-gradient(357deg, rgba(255,255,255,1) 0%, rgba(220,255,219,1) 100%); margin-top: 50px;">
                    <div class="presentase" style="background-color:rgb(150, 150, 150);color: white; font-size:  2px ; background-color:  rgb(249, 249, 249); border-radius: 12px; padding: 10px; text-align: center;margin-left:250px;margin-right:250px;margin-top:15px;">
                        <div class="skill">
                            <div class="box">
                                <div class="skill-bar">
                                    <div class="poin">75</div>
                                </div>
                            </div>
                        </div>
                        <p style="color: black; font-size: 18px;">Total Poin Anda : 75 Poin</p>
                    </div>
                <div class="image">
                    <img src="assets/fdesign/16.png" alt="">
                </div>
                <div id="penukaran" style="color:black; font-size: 25px; font-family: 'Times New Roman', Times, serif; text-align: center;font-weight: bold; margin-bottom: 200px; margin-top: 150px;">
                    <script>
                        onload = function () {
                            let id = document.getElementById("penukaran")
                            let loading = document.createElement("div")
                            loading.textContent = "Pointmu lagi diproses ni"
                            id.appendChild(loading)

                            let loaded = setInterval(() => {
                                loading.textContent = loading.textContent + "."
                            }, 1000)

                            setTimeout(() => {
                                clearInterval(loaded) 

                                loading.textContent = "YEAY SELAMAT POINTMU BERHASIL DITUKARKAN"
                            }, 4000);
                        }
                    </script>
                </div>
               </section>
@endsection