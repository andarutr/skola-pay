@extends('layouts.skolapay')

@section('title','Pembayaran')

@section('breadcrumb')
    @include('partials.skolapay.breadcrumb')
@endsection

@section('content')
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <!-- Checkout Area -->
        <livewire:card-payment />
        <!--// Checkout Area --> 
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-12">
        <!-- Promo Offer Area -->
    <div class="tm-section promo-area bg-grey mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 align-self-end">
                    <div class="tm-promo-image-2">
                        <img class="wow fadeInLeft" src="/assets/images/heroslider/banner-ppdb.webp" alt="promo image">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="tm-promo-content tm-padding-section">
                        <h2><span class="color-theme">Pembayaran</span><br>PPDB Tahun 2022/2023</h2>
                        <p>Kamu juga dapat membayar PPDB (Pembayaran Peserta Didik Baru) dengan klik tombol dibawah.</p>
                        <div class="tm-countdown" data-countdown="2022/12/12"></div>
                        <a href="#" class="tm-button">Bayar PPDB<b></b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Promo Offer Area -->
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endpush