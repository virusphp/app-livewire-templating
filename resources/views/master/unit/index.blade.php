@extends('layouts.master-tabler')

@section('content')
	
	@yield('breadcrum')

	<div class="page-body">
		<div class="container-xl">
			@livewire('master.unit.unit')
		</div>
	</div>

@endsection