<ul
    class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar"
>
    <!-- Sidebar - Brand -->
    <a
        class="sidebar-brand d-flex align-items-center justify-content-center"
        href="{{ route('admin.dashboard') }}"
    >
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/mainlogo.png') }}" alt="Logo Utama" style="height: 35px;">
        </div>
        <div class="sidebar-brand-text mx-3">PoliKlinik</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Dokter Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/dokter*') ? 'active' : '' }}">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseDokter"
            aria-expanded="{{ Request::is('admin/dokter*') ? 'true' : 'false' }}"
            aria-controls="collapseDokter"
        >
            <i class="nav-icon fas fa-user-md"></i>
            <span>Dokter</span>
        </a>
        <div
            id="collapseDokter"
            class="collapse {{ Request::is('admin/dokter*') ? 'show' : '' }}"
            aria-labelledby="headingDokter"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen Dokter:</h6>
                <a class="collapse-item {{ Request::is('admin/dokter') ? 'active' : '' }}" href="{{ route('admin.dokter.index') }}">Daftar Dokter</a>
                <a class="collapse-item {{ Request::is('admin/dokter/create') ? 'active' : '' }}" href="{{ route('admin.dokter.create') }}">Tambah Dokter</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pasien Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/pasien*') ? 'active' : '' }}">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapsePasien"
            aria-expanded="{{ Request::is('admin/pasien*') ? 'true' : 'false' }}"
            aria-controls="collapsePasien"
        >
            <i class="nav-icon fas fa-user-injured"></i>
            <span>Pasien</span>
        </a>
        <div
            id="collapsePasien"
            class="collapse {{ Request::is('admin/pasien*') ? 'show' : '' }}"
            aria-labelledby="headingPasien"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen Pasien:</h6>
                <a class="collapse-item {{ Request::is('admin/pasien') ? 'active' : '' }}" href="{{ route('admin.pasien.index') }}">Daftar Pasien</a>
                <a class="collapse-item {{ Request::is('admin/pasien/create') ? 'active' : '' }}" href="{{ route('admin.pasien.create') }}">Tambah Pasien</a>
                <a class="collapse-item {{ Request::is('admin/pasien/riwayat*') ? 'active' : '' }}" href="{{ route('admin.riwayat.index') }}">Riwayat Pasien</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Poli Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/poli*') ? 'active' : '' }}">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapsePoli"
            aria-expanded="{{ Request::is('admin/poli*') ? 'true' : 'false' }}"
            aria-controls="collapsePoli"
        >
            <i class="nav-icon fas fa-hospital"></i>
            <span>Poli</span>
        </a>
        <div
            id="collapsePoli"
            class="collapse {{ Request::is('admin/poli*') ? 'show' : '' }}"
            aria-labelledby="headingPoli"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen Poli:</h6>
                <a class="collapse-item {{ Request::is('admin/poli') ? 'active' : '' }}" href="{{ route('admin.poli.index') }}">Daftar Poli</a>
                <a class="collapse-item {{ Request::is('admin/poli/create') ? 'active' : '' }}" href="{{ route('admin.poli.create') }}">Tambah Poli</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Obat Collapse Menu -->
    <li class="nav-item {{ Request::is('admin/obat*') ? 'active' : '' }}">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseObat"
            aria-expanded="{{ Request::is('admin/obat*') ? 'true' : 'false' }}"
            aria-controls="collapseObat"
        >
            <i class="nav-icon fas fa-pills"></i>
            <span>Obat</span>
        </a>
        <div
            id="collapseObat"
            class="collapse {{ Request::is('admin/obat*') ? 'show' : '' }}"
            aria-labelledby="headingObat"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen Obat:</h6>
                <a class="collapse-item {{ Request::is('admin/obat') ? 'active' : '' }}" href="{{ route('admin.obat.index') }}">Daftar Obat</a>
                <a class="collapse-item {{ Request::is('admin/obat/create') ? 'active' : '' }}" href="{{ route('admin.obat.create') }}">Tambah Obat</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
