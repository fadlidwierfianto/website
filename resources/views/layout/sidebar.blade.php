<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Halaman Awal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('alternatif') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Tabel Alternatif</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('bobot') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Tabel Bobot</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tabel Perhitungan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('norm') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabel Normalisasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('normbobot') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabel Normalisasi Berbobot</p>
                            </a>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tabel Solusi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('solusipositif') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Solusi ideal positif</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('solusinegatif') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Solusi ideal negatif</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                </li>
                <li class="nav-item">
                    <a href="{{ url('distance') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tabel Distance</p>
                    </a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
                <a href="{{ url('hasil') }}" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Tabel Hasil</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('settings') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Pengaturan Akun</p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
