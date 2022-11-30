@extends('layouts.panel')

@section('title', 'Pembayaran')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:parent.payment.payment-table />
</div>
@endsection