<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../../dist/assets/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="brand-text font-weight-light">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="/admin-dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Tabel Pengguna -->
                <li class="nav-item">
                    <a href="/pengguna" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Pengguna</p>
                    </a>
                </li>

                <!-- Tabel Kebun -->
                <li class="nav-item">
                    <a href="/kebun" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>Data Kebun</p>
                    </a>
                </li>

                <!-- Tabel Petugas -->
                <li class="nav-item">
                    <a href="/petugas" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>Data Petugas</p>
                    </a>
                </li>

                <!-- Tabel Produksi -->
                <li class="nav-item">
                    <a href="/produksi" class="nav-link">
                        <i class="nav-icon fas fa-industry"></i>
                        <p>Data Produksi</p>
                    </a>
                </li>

                <!-- Tabel Distribusi -->
                <li class="nav-item">
                    <a href="/distribusi" class="nav-link">
                        <i class="nav-icon fas fa-truck"></i>
                        <p>Data Distribusi</p>
                    </a>
                </li>

                <!-- Tabel Laporan -->
                <li class="nav-item">
                    <a href="/laporan" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Data Laporan</p>
                    </a>
                </li>

                <!-- Tabel Pembayaran -->
                <li class="nav-item">
                    <a href="/pembayaran" class="nav-link">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>Data Pembayaran</p>
                    </a>
                </li>

                <!-- Tabel Kategori Panen -->
                <li class="nav-item">
                    <a href="/kategori-panen" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kategori Panen</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
