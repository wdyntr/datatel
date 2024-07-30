<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('datapelanggan') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data Pelanggan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('sma_smk') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>SMA</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('hotel') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Hotel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('universitas') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>List Universitas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('bank') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>List Bank</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('faskes') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>List Faskes</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('cafe') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>List Cafe</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('wisata_lamsel') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>List Wisata LamSel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('wisata_kuliner') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>List Wisata kuliner</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pdam') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>List PDAM</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>