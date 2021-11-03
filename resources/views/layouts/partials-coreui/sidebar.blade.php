<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <div class="c-sidebar-brand-full" width="118" height="46" alt="Master Data">
            <img src="{{ asset('img/profile/profile.png') }}" width="120" height="46">
        </div>
        <svg class="c-sidebar-brand-minimized" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('coreui/assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <div class="c-sidebar-brand d-md-none">
        <img src="{{ asset('img/profile/profile.png') }}" width="120" height="46">
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="">
                <i class="c-sidebar-nav-icon fa fa-laptop-house"></i>  Dashboard Pendaftaran</a>
        </li>

        <li class="c-sidebar-nav-title">
            Master
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('barang.index') }}">
                <i class="c-sidebar-nav-icon fa fa-credit-card"></i> Barang
            </a>
        </li>
         <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('satuan.index') }}">
                <i class="c-sidebar-nav-icon fa fa-credit-card"></i> Satuan
            </a>
        </li>

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
