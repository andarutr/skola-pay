@extends('layouts.panel')

@section('title', 'Data Tagihan')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:student.invoice.invoice-table />
</div>
@endsection