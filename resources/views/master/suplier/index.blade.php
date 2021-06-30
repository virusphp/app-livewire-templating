@extends('layouts.master-tabler')

@section('content')
{{-- 	
	@include('layouts.partials.breadcrum') --}}
	
	@yield('breadcrum')

	<div class="page-body">
		<div class="container-xl">
			@livewire('master.suplier.suplier')
		</div>
	</div>

@endsection