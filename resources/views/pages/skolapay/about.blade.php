@extends('layouts.skolapay')

@section('title','Tentang Kami')

@section('breadcrumb')
    @include('partials.skolapay.breadcrumb')
@endsection

@section('content')
<!-- About Us Area -->
<div class="tm-section about-us-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image2">
                    <img class="wow fadeInLeft" src="{{ url('assets/images/logo/logo.webp') }}" alt="Logo" width="350">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2>Tentang SkolaPay</h2>
                    <p>Skolapay adalah web apps yang berfungsi untuk melakukan pembayaran SPP sekolah hingga PPDB (Pendaftaran Peserta Didik Baru). Diharapkan dengan adanya SkolaPay dapat membantu lembaga pendidikan di Indonesia dalam meningkatkan kualitas layanan pembayaran pendidikan berbasis web. </p>
                    <ul class="stylish-list">
                        <li>- Easy payment</li>
                        <li>- Easy checking spp & ppdb payment status</li>
                        <li>- Easy monitoring information payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// About Us Area -->

<!-- Why Choose Area -->
<div class="tm-section whychoose-area tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="whychoose-content">
                    <h2>Kata Sambutan</h2>
                    <h6>Kepala Sekolah</h6>
                    <p>Assalamu’alaikum Wr.Wb. Selamat datang di Website SMK Islam PB. Soedirman 2. Website ini digunakan untuk memberikan informasi terhadap seluruh kompenen sekolah baik itu pendidik, siswa maupun masyarakat. Pada tanggal 10 April 2013 Sekolah SMK Islam PB. Soedirman sdh mendapatkan lisensi ISO 9001:2008 dari PT SGS dan selanjutnya untuk meningkat kualitas lisensi ISO pada tanggal 3 September 2018 Migrasi ke Versi 2015 oleh PT. SGS Indonesia. Kami berharap website ini dapat bermanfaat untuk memajukan sekolah dan peningkatan mutu pendidikan. Wassalamu’alaikum Wr.Wb.</p>
                    <div class="whychoose-block">
                        <span class="whychoose-icon">
                            <i class="flaticon-diagram"></i>
                        </span>
                        <h5>Visi</h5>
                        <p>Menjadikan Lulusan Vokasional Berkarakter Religius Dan Berdaya Saing Global</p>
                    </div>
                    <div class="whychoose-block">
                        <span class="whychoose-icon">
                            <i class="flaticon-chart"></i>
                        </span>
                        <h5>Misi</h5>
                        <p>
                            <ul>
                                <li>Mengembangkan Kurikulum dan Pembelajaran Yang Inovatif, Implementatif Berbasis Industri</li>
                                <li>Mengembangkan Budaya Sekolah Yang Religius dan Pembinaan Minat Bakat Peserta Didik</li>
                                <li>Meningkatkan Kualitas Sarana Prasana dan SDM Pendidikan Dalam Mendukung Penguasaan IPTEK</li>
                                <li>Meningkatkan Mutu Layanan Yang Efektif dan Efisien Pada Seluruh Stakeholder</li>
                                <li>Menyiapkan Lulusan Yang Kompeten, Berjiwa Wirausaha dan Berwawasan Global</li>
                                <li>Meningkatkan Link And Match Dengan Industri Dunia Kerja Untuk Mutu dan Pemasaran Lulusan</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="whychoose-chart">
                    <img src="{{ url('assets/images/testimonial/headmaster.webp') }}" class="wow fadeInRight" width="512">
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Why Choose Area -->
@endsection