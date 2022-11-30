@extends('layouts.skolapay')

@section('title','Menuju Sekolah Digital 3.0')

@section('content')
<!-- About Us Area -->
<div class="tm-section about-us-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image2">
                    <img class="wow fadeInLeft rounded" src="{{ url('assets/images/heroslider/web_app.webp') }}" alt="about image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2>SkolaPay - Web Apps</h2>
                    <p>Skolapay adalah web apps yang berfungsi untuk melakukan pembayaran SPP sekolah hingga PPDB (Pendaftaran Peserta Didik Baru). Diharapkan dengan adanya SkolaPay dapat membantu lembaga pendidikan di Indonesia dalam meningkatkan kualitas layanan pembayaran pendidikan berbasis web. </p>
                    <ul class="stylish-list">
                        <li>- Easy payment</li>
                        <li>- Easy checking spp & ppdb payment status</li>
                        <li>- Easy monitoring information payment</li>
                    </ul>
                    <a href="{{ url('/tentang') }}" class="tm-button">Tentang <b></b></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// About Us Area -->

<!-- Services Area -->
<div class="tm-section services-area tm-padding-section bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="tm-section-title text-center">
                    <h2>Fitur Aplikasi</h2>
                    <p>Satu aplikasi untuk keperluan informasi pembayaran sekolah Anda.</p>
                </div>
            </div>
        </div>
        <div class="row services-wrap">

            <!-- Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                <div class="tm-service text-center">
                    <span class="tm-service-icon">
                        <i class="flaticon-idea"></i>
                    </span>
                    <h5><a href="#">Pembayaran SPP & PPDB</a></h5>
                    <p>Mempermudah orang tua dan siswa untuk melakukan pembayaran SPP dan PPDB yang telah tersedia.</p>
                </div>
            </div>
            <!--// Single Service -->

            <!-- Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                <div class="tm-service text-center">
                    <span class="tm-service-icon">
                        <i class="flaticon-options"></i>
                    </span>
                    <h5><a href="#">Pembayaran Kegiatan Lainnya</a></h5>
                    <p>Mempermudah orang tua dan siswa untuk melakukan pembayaran kegiatan lain yang telah tersedia.</p>
                </div>
            </div>
            <!--// Single Service -->

            <!-- Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                <div class="tm-service text-center">
                    <span class="tm-service-icon">
                        <i class="flaticon-leadership"></i>
                    </span>
                    <h5><a href="#">Check Pembayaran</a></h5>
                    <p>Mempermudah orang tua dan siswa untuk memeriksa pembayaran yang telah tersedia.</p>
                </div>
            </div>
            <!--// Single Service -->

            <!-- Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                <div class="tm-service text-center">
                    <span class="tm-service-icon">
                        <i class="flaticon-responsive"></i>
                    </span>
                    <h5><a href="#">Progressive Web Apps (PWA)</a></h5>
                    <p>Teknologi PWA dapat mempermudah user tanpa meng-install aplikasi.</p>
                </div>
            </div>
            <!--// Single Service -->

            <!-- Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                <div class="tm-service text-center">
                    <span class="tm-service-icon">
                        <i class="flaticon-password"></i>
                    </span>
                    <h5><a href="#">Akses Akun</a></h5>
                    <p>Memudahkan orang tua dan siswa melihat list informasi tagihan sekolah dengan memiliki akun Skolapay.</p>
                </div>
            </div>
            <!--// Single Service -->

            <!-- Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                <div class="tm-service text-center">
                    <span class="tm-service-icon">
                        <i class="flaticon-24-hours"></i>
                    </span>
                    <h5><a href="#">24/7 Support</a></h5>
                    <p>Jika anda mengalami kendala bisa hubungi kami ataupun bisa melalui Live Chat.</p>
                </div>
            </div>
            <!--// Single Service -->

        </div>
    </div>
</div>
<!--// Services Area -->

<!-- Testimonial Area -->
<div class="tm-section testimonial-area tm-padding-section bg-grey">
    <div class="container">
        <div class="row testimonial-slider-active">

            <!-- Testimonial -->
            <div class="col-lg-6">
                <div class="tm-testimonial">
                    <div class="tm-testimonial-top">
                        <div class="tm-testimonial-author">
                            <img src="{{ url('assets/images/testimonial/muhammad-agus-sanusi.webp') }}" alt="author image">
                        </div>
                        <div class="tm-testimonial-content">
                            <p>Saya Muhammad Agus Sanusi, Saat Sekolah saya mengambil Keahlian Kompetensi Perbankan Syariah. Selama Saya Sekolah di SMK Islam PB Sudirman 2, banyak pelajaran yang sangat bermanfaat, baik itu akademis maupun non akademis dan setelah lulus memiliki modal untuk bersaing di dunia kerja. Saya ucapkan terimakasih banyak kepada Bapak Ibu Guru dan Ibu Kepala Sekolah atas bimbingannya dengan penuh kesabaran dan kasih sayang.</p>
                            <i class="fas fa-quote-left"></i>
                        </div>
                    </div>
                    <div class="tm-testimonial-bottom">
                        <h5>Muhammad Agus Sanusi (Alumni 2011/2012)</h5>
                        <p>Marketing - Bank DKI Syariah</p>
                    </div>
                </div>
            </div>
            <!--// Testimonial -->

            <!-- Testimonial -->
            <div class="col-lg-6">
                <div class="tm-testimonial">
                    <div class="tm-testimonial-top">
                        <div class="tm-testimonial-author">
                            <img src="{{ url('assets/images/testimonial/nida-manzilah.webp') }}" alt="author image">
                        </div>
                        <div class="tm-testimonial-content">
                            <p>Saya Nida, saat sekolah saya mengambil Keahlian Kompetensi ANIMASI. Setelah 3 tahun menempuh pendidikan di bidang kejuruan Animasi memberikan banyak pembelajaran bagi saya. bukan hanya pendidikan formal, SMK Islam PB Soedirman 2 juga memberikan pendidikan agama dan akhlak untuk siswa / siswinya agar tetap cerdas berilmu tetapi tetap selaras dengan akhlak yang baik. Semoga semakin banyak melahirkan ANIMATOR untuk Industri yang membutuhkan. </p>
                            <i class="fas fa-quote-left"></i>
                        </div>
                    </div>
                    <div class="tm-testimonial-bottom">
                        <h5>Nida Manzilah (Alumni 2013/2014)</h5>
                        <p>Project Manager - The Little Giantz</p>
                    </div>
                </div>
            </div>
            <!--// Testimonial -->

            <!-- Testimonial -->
            <div class="col-lg-6">
                <div class="tm-testimonial">
                    <div class="tm-testimonial-top">
                        <div class="tm-testimonial-author">
                            <img src="{{ url('assets/images/testimonial/avatar-girl.webp') }}" alt="author image">
                        </div>
                        <div class="tm-testimonial-content">
                            <p>Saya Niken Diah Yolandri, banyak sekali pengalaman saat sekolah di SMK Pb Soedirman 2 Jakarta, mulai dari yang pemalu sampai berani untuk berbicara didepan umum, Slogan yang berbunyi SMK bisa!!! memang betul adanya,kenapa saya memilih SMK untuk melanjutkan pendidikan dibanding SMA? karena selain pendidikan di SMK juga diajarkan bagaimana untuk terjun praktek kerja lapangan,disitulah saya mengerti arti SMK yang sebenarnya.</p>
                            <i class="fas fa-quote-left"></i>
                        </div>
                    </div>
                    <div class="tm-testimonial-bottom">
                        <h5>Niken Diah Yolandri (Alumni 2016-2017)</h5>
                        <p>Teller - BANK MUAMALAT</p>
                    </div>
                </div>
            </div>
            <!--// Testimonial -->
        </div>
    </div>
</div>
<!--// Testimonial Area -->

<!-- Brand Logos Area -->
<div class="tm-section brand-logos-area tm-padding-section-bottom bg-white">
    <div class="container">
        <div class="brandlogo-slider">

            <!-- Brang Logo Single -->
            <div class="brandlogo">
                <img src="{{ url('assets/images/payment/bsi-syariah.webp') }}" class="rounded" alt="brand-logo" width="150">
            </div>
            <!--// Brang Logo Single -->
            <!-- Brang Logo Single -->
            <div class="brandlogo">
                <img src="{{ url('assets/images/payment/muamalat-bank.webp') }}" class="rounded" alt="brand-logo" width="150">
            </div>
            <!--// Brang Logo Single -->
            <!-- Brang Logo Single -->
            <div class="brandlogo">
                <img src="{{ url('assets/images/payment/bca-bank.webp') }}" class="rounded" alt="brand-logo" width="150">
            </div>
            <!--// Brang Logo Single -->
            <!-- Brang Logo Single -->
            <div class="brandlogo">
                <img src="{{ url('assets/images/payment/bni-bank.webp') }}" class="rounded" alt="brand-logo" width="150">
            </div>
            <!--// Brang Logo Single -->
            <!-- Brang Logo Single -->
            <div class="brandlogo">
                <img src="{{ url('assets/images/payment/bri-bank.webp') }}" class="rounded" alt="brand-logo" width="150">
            </div>
            <!--// Brang Logo Single -->
        </div>
    </div>
</div>
<!--// Brand Logos Area -->
@endsection