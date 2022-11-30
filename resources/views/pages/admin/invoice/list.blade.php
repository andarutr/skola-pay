@extends('layouts.panel')

@section('title', 'Tagihan')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:admin.invoice.invoice-table />
</div>
@endsection