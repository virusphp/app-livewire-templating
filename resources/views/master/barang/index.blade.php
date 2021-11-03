@extends('layouts.master-coreui')

@section('title')
Barang Farmasi
@endsection

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        @livewire('master.barang.barang')
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