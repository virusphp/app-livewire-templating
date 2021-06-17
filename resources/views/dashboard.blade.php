@extends('layouts.master')

@section('content')
<div class="span12">
	<div class="widget">
		<div class="widget-header"> <i class="icon-signal"></i>
		    <h3> Area Chart Example</h3>
		</div>
		<div class="widget-content">
		    <canvas id="area-chart" class="chart-holder" height="250" width="1150"> </canvas>
		</div>
	</div>
</div>
@endsection

@push('scripts')

@endpush