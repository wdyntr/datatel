<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Data Prosek Pelanggan</div>
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
        <i class="fa-solid fa-person"></i>
        <span>List Data Pelanggan</span>
    </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('sma_smk') }}">
        <i class="fa-solid fa-school"></i>
            <span>List SMA/SMK</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('hotel') }}">
        <i class="fa-solid fa-hotel"></i>
            <span>List Hotel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('universitas') }}">
        <i class="fa-solid fa-graduation-cap"></i>
            <span>List Universitas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('bank') }}">
        <i class="fa-solid fa-building-columns"></i>
            <span>List Bank</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('faskes') }}">
        <i class="fa-solid fa-notes-medical"></i>
            <span>List Faskes</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('cafe') }}">
        <i class="fa-solid fa-mug-saucer"></i>
            <span>List Cafe</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('wisata_lamsel') }}">
        <i class="fa-solid fa-map-location-dot"></i>
            <span>List Wisata LamSel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('wisata_kuliner') }}">
        <i class="fa-solid fa-map-location-dot"></i>
            <span>List Wisata kuliner</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pdam') }}">
        <i class="fa-solid fa-building"></i>
            <span>List PDAM</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('perusahaan') }}">
        <i class="fa-solid fa-building-user"></i>
            <span>List Perusahaan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('bpr') }}">
        <i class="fa-solid fa-credit-card"></i>
            <span>List BPR</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('stasiuntv') }}">
        <i class="fa-solid fa-tv"></i>
            <span>List Stasiun TV</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/profile">
        <i class="fa-solid fa-user"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>