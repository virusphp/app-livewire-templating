@extends('layouts.master-tabler')

@section('content')
	
	@yield('breadcrum')

	<div class="page-body">
		<div class="container-xl">
			@livewire('master.satuan.satuan')
		</div>
	</div>

@endsection