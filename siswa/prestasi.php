<?php 

    include"header.php";
 
 ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php 

            include"menu.php";

         ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Nama Siswa</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Prestasi Siswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Prestasi</th>
                                            <th>Piagam Pretasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pramuka Tingkat Nasional</td>
                                            <td>Piagam</td>
                                            <td>
                                                <a href="editprestasi.php" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="<?= BASEURL.'/app/panel.php?page=tambah-prestasi-siswa'; ?>" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Data Prestasi</a>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<?php 

    include "footer.php";

 ?>