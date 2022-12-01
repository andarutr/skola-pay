@extends('layouts.panel')

@section('title', 'History')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:admin.history.history-table />
</div>
@endsection