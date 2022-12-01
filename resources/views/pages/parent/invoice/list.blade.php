@extends('layouts.panel')

@section('title', 'Tagihan')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:parent.invoice.invoice-table />
</div>
@endsection