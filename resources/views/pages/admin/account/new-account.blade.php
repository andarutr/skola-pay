@extends('layouts.panel')

@section('title', 'New Account')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:admin.account.new-account />
</div>
@endsection