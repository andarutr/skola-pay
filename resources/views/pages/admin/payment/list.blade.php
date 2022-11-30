@extends('layouts.panel')

@section('title', 'Pembayaran')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:admin.payment.payment-card />
</div>
@endsection