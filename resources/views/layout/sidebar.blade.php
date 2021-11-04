<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ url('img/logo.svg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E-Kredit</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('anggota') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>Data Anggota</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('non-anggota') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>Data Non-Anggota</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kolektor') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>Data Kolektor</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-file-invoice-dollar"></i>
                        <p>
                            Kredit Bulanan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('kredit-bulanan') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Data Kredit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kredit-bulanan-anggunan') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Data Anggunan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kredit-bulanan-laporan') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-file-invoice-dollar"></i>
                        <p>
                            Kredit Harian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('kredit-harian') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Data Kredit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kredit-harian-anggunan') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Data Anggunan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kredit-harian-laporan') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('setting-identitas') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Identitas Koperasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('setting-pengguna') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Data Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('setting-backup') }}" class="nav-link">
                                <i class="fa nav-icon"></i>
                                <p>Backup Data</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>