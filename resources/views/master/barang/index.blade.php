@extends('layouts.master-tabler')

@section('content')
	@yield('breadcrum')

	<div class="page-body">
		<div class="container-xl">
			@livewire('master.barang.barang')
		</div>
	</div>
	{{-- @livewire('master.barang.barang') --}}
@endsection