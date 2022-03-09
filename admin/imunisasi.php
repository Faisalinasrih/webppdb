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
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Imunisasi</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Imunisasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Imunisasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Matematika</td>
                                            <td>System Architect</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mod1"><i class="fas fa-edit"></i>
                                                </button>
                                                <a class="btn btn-danger btn-sm" href="#" role="deleteuser.php"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#mod2"><i class="fas fa-plus"> Tambah Imunisasi</i></button>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                <!-- Modal -->
                <div class="modal fade" id="mod1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Imunisasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                    <!-- Page Heading -->
                                        <form class="user">
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Imunisasi</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="1234567812345678" >
                                                </div>
                                                
                                            </div>
                                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="mod2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Imunisasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                    <!-- Page Heading -->
                                    <form class="user">
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Imunisasi</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="1234567812345678" >
                                                </div>
                                                
                                            </div>
                                    </form>  

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Tambah Data Imunisasi</button>
                      </div>
                    </div>
                  </div>
                </div>

<?php 

    include "footer.php";

 ?>