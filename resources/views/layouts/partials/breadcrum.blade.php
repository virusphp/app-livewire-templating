<div class="container-xl">
	<!-- Page title -->
	<div class="page-header d-print-none">
	  <div class="row align-items-center">
		<div class="col">
		  <!-- Page pre-title -->
		  <div class="page-pretitle">
			@if (session()->has('message'))
				<div class="alert alert-success">
					{{ session('message') }}
				</div>
			@endif
		  </div>
		</div>
	  </div>
	</div>
</div>