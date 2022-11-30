@extends('layouts.skolapay')

@section('title','Hubungi Kami')

@section('breadcrumb')
    @include('partials.skolapay.breadcrumb')
@endsection

@section('content')
<!-- Contact Us -->
<div class="tm-section contact-us-area tm-padding-section bg-white">
    <div class="container">
        <div class="row justify-content-center mt-30-reverse">

            <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="tm-contact-block text-center">
                    <span class="tm-contact-icon">
                        <i class="flaticon-placeholder"></i>
                    </span>
                    <h5>Alamat</h5>
                    <p>Jl. Raya Bogor No.6, RT.3/RW.1, Cijantung, Kec. Ps. Rebo, Jakarta Timur, 13770</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="tm-contact-block text-center">
                    <span class="tm-contact-icon">
                        <i class="flaticon-call"></i>
                    </span>
                    <h5>Phone</h5>
                    <p><a href="#">0218400387</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="tm-contact-block text-center">
                    <span class="tm-contact-icon">
                        <i class="flaticon-email-1"></i>
                    </span>
                    <h5>Address</h5>
                    <p>Email: <a href="#">surat@smkpbs2-jkt.sch.id</a></p>
                </div>
            </div>

        </div>
    </div>
    <div class="container tm-padding-section-top">
        <div class="row no-gutters">
            <livewire:card-feedback />
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3965.6052651122704!2d106.861308!3d-6.3154710000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed9e83d6dbab%3A0x93a120219e25449d!2sYayasan%20Masjid%20PB%20Soedirman!5e0!3m2!1sen!2sid!4v1667798827120!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!--// Contact Us -->
@endsection