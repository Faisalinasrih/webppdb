<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Siswa / Siswi Baru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama Siswa</th>
                                            <th style="text-align: center;">Jenis Kelamin</th>
                                            <th style="text-align: center;">Jurusan</th>
                                            <th style="text-align: center;">NISN</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">1</td>
                                            <td>System Architect</td>
                                            <td>Matematika</td>
                                            <td>System Architect</td>
                                            <td style="text-align: center;">System Architect</td>
                                            <td style="text-align: center;">
                                                <!-- Button trigger modal -->
                                                <a class="btn btn-warning btn-sm" href="<?= BASEURL.'/app/panel.php?page=edit-data-siswa-baru'; ?>" role="deleteuser.php"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-primary btn-sm" href="../page/cetakdatasiswa.php" role="deleteuser.php"><i class="fas fa-print"></i></a>
                                                <a class="btn btn-danger btn-sm" href="#" role="deleteuser.php"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="<?= BASEURL.'/app/panel.php?page=tambah-data-siswa'; ?>" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Data Siswa / Siswi</a>
                            <a href="rekapitulasi.php" class="btn btn-success mb-3"><i class="fa fa-table"></i> Rekapitulasi Data Siswa / Siswi</a>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->