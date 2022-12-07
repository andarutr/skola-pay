@extends('layouts.panel')

@section('title', 'Linked Account')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:admin.account.linked-account />
</div>
@endsection