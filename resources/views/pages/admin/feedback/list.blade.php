@extends('layouts.panel')

@section('title', 'Feedback')

@section('content')
<div class="container-xxl">
  @include('partials.panel.breadcrumb')
  <livewire:admin.feedback.feedback-table />
</div>
@endsection