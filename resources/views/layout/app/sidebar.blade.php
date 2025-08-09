 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KDMP <sup>LM</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        AREA SEKRETARIS
    </div>

    <!-- Nav Item - Pages Administrasi Umum -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-briefcase"></i>
            <span>Administrasi Umum</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat Administrasi Umum :</h6>
                <a class="collapse-item" href="{{ url('surat-keputusan') }}">Surat Keputusan</a>
                <a class="collapse-item" href="{{ url('surat-tugas') }}">Surat Tugas</a>
                <a class="collapse-item" href="{{ url('surat-undangan') }}">Surat Undangan</a>
                <a class="collapse-item" href="{{ url('surat-pemberitahuan') }}">Surat Pemberitahuan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pengajuan Operasional -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-envelope-open-text"></i>
            <span>Surat Keuangan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat Keuangan:</h6>
                <a class="collapse-item" href="utilities-color.html">Pengajuan Operasional</a>
                <a class="collapse-item" href="utilities-border.html">Surat Tagihan Invoice</a>
                <a class="collapse-item" href="utilities-border.html">Surat Peminjaman Dana</a>
            </div>
        </div>
    </li>
     <!-- Nav Item - Suarat Rapat -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#suratRapat"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-file-alt"></i>
            <span>Surat Rapat</span>
        </a>
        <div id="suratRapat" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat Rapat :</h6>
                <a class="collapse-item" href="cards.html">Berita Acara</a>
                <a class="collapse-item" href="cards.html">Usulan Anggota</a>
            </div>
        </div>
    </li>
     <!-- Nav Item - Surat Personalia -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#suratPersonalia"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-user-alt"></i>
            <span>Surat Personalia</span>
        </a>
        <div id="suratPersonalia" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat Kepegawaian :</h6>
                <a class="collapse-item" href="buttons.html">Surat Keterangan Bekerja</a>
                <a class="collapse-item" href="buttons.html">Surat Teguran</a>
                <a class="collapse-item" href="buttons.html">Surat Cuti</a>
                <a class="collapse-item" href="cards.html">Surat Pengangkatan</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
     AREA BENDAHARA
    </div>

       <!-- Nav Item - Uang Kas -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#uangKas"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-money-bill-wave"></i>
            <span>Uang Kas</span>
        </a>
        <div id="uangKas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">KAS :</h6>
                <a class="collapse-item" href="login.html">Kas Masuk</a>
                <a class="collapse-item" href="register.html">Kas Keluar</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-file-alt"></i>
            <span>Surat</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Keuangan :</h6>
                <a class="collapse-item" href="login.html">SPJ</a>
                <a class="collapse-item" href="register.html">Pengeluaran Kas</a>
                <a class="collapse-item" href="forgot-password.html">Pengajuan Dana</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fa fa-book-open"></i>
            <span>Laporan Keuangan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
