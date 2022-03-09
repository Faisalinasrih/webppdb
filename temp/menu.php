<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="../assets/img/logoman.png" width="50">
                </div>
                <div class="sidebar-brand-text mx-3">SI PPDB</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?'; ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrasi
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php 
                if ($_SESSION['role'] == 'siswa') {
                    # code...
                

             ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user"
                    aria-expanded="true" aria-controls="collapse">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Akun</span>
                </a>
                <div id="user" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=lihat-data'; ?>">Lihat Data User</a>
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=edit-data'; ?>">Edit Data User</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">


            <?php 
                if ($filtermenu == true) {
                    
               

             ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                Administrasi
            </div>

        

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse"
                    aria-expanded="true" aria-controls="collapse">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Nilai Raport</span>
                </a>
                <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=lihat-nilai'; ?>">Lihat Nilai</a>
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=tambah-nilai'; ?>">Tambah Nilai</a>
                    </div>
                </div>
            </li>
            <?php 
                if ($filterjalur['jalur'] == 'pres') {
                    # code...
              

             ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Prestasi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=prestasi-siswa'; ?>">Lihat Prestasi</a>
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=tambah-prestasi-siswa'; ?>">Tambah Prestasi</a>
                    </div>
                </div>
            </li>

            <?php 
                }

             ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=kartu'; ?>">
                    <i class="fas fa-fw fas fa-id-card-alt"></i>
                    <span>Cetak Kartu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=pengumuman-seleksi'; ?>">
                    <i class="fas fa-fw fas fa-bullhorn"></i>
                    <span>Pengumuman Seleksi</span></a>
            </li>

            <?php 
                if ($filterlulus['status'] == '1') {
                    # code...
             ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Data Diri Siswa</span>
                </a>
                <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=data-siswa-baru'; ?>">Lihat Data Diri</a>
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=edit-data-siswa-baru'; ?>">Edit Data Diri</a>
                    </div>
                </div>
            </li>

            <?php 
                }

             ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=info'; ?>">
                    <i class="fas fa-fw fas fa-question-circle"></i>
                    <span>Informasi PPDB</span></a>
            </li>

            <?php 
                }

             ?>

            <?php 
                } elseif ($_SESSION['role'] == 'sadmin') {
                    # code...
                
             ?>

             <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=manage-user'; ?>">
                    <i class="fas fa-fw fas fa-book"></i>
                    <span>Manajemen User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=manage-rapor'; ?>">
                    <i class="fas fa-fw fas fa-book"></i>
                    <span>Manajemen Data Rapor</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Data Calon Siswa</span>
                </a>
                <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=semua-calon-siswa'; ?>">Seluruh Calon Siswa</a>
                        <a class="collapse-item" href="cards.html">Jurusan IPA</a>
                        <a class="collapse-item" href="cards.html">Jurusan IPS</a>
                        <a class="collapse-item" href="cards.html">Jurusan BAHASA</a>
                        <a class="collapse-item" href="cards.html">Jurusan AGAMA</a>
                        <a class="collapse-item" href="cards.html">Prestasi</a>
                        

                    </div>
                </div>
            </li>

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefourth"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Data Siswa Baru</span>
                </a>
                <div id="collapsefourth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=semua-data-siswa'; ?>">Seluruh Siswa Baru</a>
                        <a class="collapse-item" href="cards.html">Jurusan IPA</a>
                        <a class="collapse-item" href="cards.html">Jurusan IPS</a>
                        <a class="collapse-item" href="cards.html">Jurusan BAHASA</a>
                        <a class="collapse-item" href="cards.html">Jurusan AGAMA</a>
                        <a class="collapse-item" href="cards.html">Prestasi</a>
                        

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tools
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=tambah-mata-pelajaran'; ?>">
                    <i class="fas fa-fw fas fa-book"></i>
                    <span>Manajemen Mata Pelajran</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=tambah-prasekolah'; ?>">
                    <i class="fas fa-fw fas fa-school"></i>
                    <span>Manajemen Pra Sekolah</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=tambah-imunisasi'; ?>">
                    <i class="fas fa-fw fas fa-heartbeat"></i>
                    <span>Manajemen Imunisasi</span></a>
            </li>

            <?php 

                } elseif ($_SESSION['role'] == 'admin') {
                    # code...
                
             ?>
             <!-- Nav Item - Pages Collapse Menu -->
            
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=manage-rapor'; ?>">
                    <i class="fas fa-fw fas fa-book"></i>
                    <span>Manajemen Data Rapor</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Data Calon Siswa</span>
                </a>
                <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=semua-calon-siswa'; ?>">Seluruh Calon Siswa</a>
                        <a class="collapse-item" href="cards.html">Jurusan IPA</a>
                        <a class="collapse-item" href="cards.html">Jurusan IPS</a>
                        <a class="collapse-item" href="cards.html">Jurusan BAHASA</a>
                        <a class="collapse-item" href="cards.html">Jurusan AGAMA</a>
                        <a class="collapse-item" href="cards.html">Prestasi</a>
                        

                    </div>
                </div>
            </li>

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefourth"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Data Siswa Baru</span>
                </a>
                <div id="collapsefourth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL.'/app/panel.php?page=semua-data-siswa'; ?>">Seluruh Siswa Baru</a>
                        <a class="collapse-item" href="cards.html">Jurusan IPA</a>
                        <a class="collapse-item" href="cards.html">Jurusan IPS</a>
                        <a class="collapse-item" href="cards.html">Jurusan BAHASA</a>
                        <a class="collapse-item" href="cards.html">Jurusan AGAMA</a>
                        <a class="collapse-item" href="cards.html">Prestasi</a>
                        

                    </div>
                </div>
            </li>

            <?php 
                }
             ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/app/panel.php?page=ganti-password'; ?>">
                    <i class="fas fa-key"></i>
                    <span>Ganti Password</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL.'/auth/logout.php' ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= filter($user['nama']); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/logoman.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
