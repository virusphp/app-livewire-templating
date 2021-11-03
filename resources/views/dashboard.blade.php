@extends('layouts.master-coreui')

@section('title')
Dashboard
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="display-1 text-center">Selamat Datang di modul : APOTIK</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@push('scripts')

<script>
    window.onload = function() {
        let sidebar = document.getElementById('sidebar')
        sidebar.setAttribute("class", "c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show c-sidebar-minimized");
    };
</script>
@endpush