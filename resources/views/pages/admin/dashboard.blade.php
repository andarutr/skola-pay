@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')
<div class="container-xxl">
	<!-- Page Header -->
	<div class="hk-pg-header pg-header-wth-tab pt-7">
		<div class="d-flex">
			<div class="d-flex flex-wrap justify-content-between flex-1">
				<div class="mb-lg-0 mb-2 me-8">
					<h1 class="pg-title">{{ $menu }}</h1>
				</div>
				<div class="pg-header-action-wrap">
					<div class="input-group w-300p">
						<span class="input-affix-wrapper">
							{{ date('d F Y') }}
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Header -->

	<!-- Page Body -->
	<div class="hk-pg-body">
		<livewire:admin.dashboard />
	</div>
	<!-- /Page Body -->		
</div>
@endsection