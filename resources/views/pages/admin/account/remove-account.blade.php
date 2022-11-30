@extends('layouts.panel')

@section('title', 'Remove Account')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:admin.account.remove-account />
</div>
@endsection