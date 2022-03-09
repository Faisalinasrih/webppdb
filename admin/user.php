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
                    <h1 class="h3 mb-2 text-gray-800">User Management</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">User / Pendaftar</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Matematika</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
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
                            <a href="tambahuser.php" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah User</a>
                            <a href="rekapitulasi.php" class="btn btn-success mb-3"><i class="fa fa-table"></i> Rekapitulasi data User</a>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                <!-- Modal -->
                <div class="modal fade" id="mod1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-2" style="width: 14rem;"
                                            src="../assets/img/pasfoto.jpg" alt="...">
                                    </div>
                                    <!-- Page Heading -->
                                    <div class="p-5">
                                        <form class="user">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">NIK</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="1234567812345678" >
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">NISN</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="12345678">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Nama</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="Faisal Inasri Hidayat">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Passworld</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="12345678" >
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Jenis Kelamin</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="Laki - Laki" >
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Tempat Lahir</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="Bintuhan" >
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Tanggal Lahir</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="10-10-1998">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">No Handphone / WA</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="085609420259" >
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Alamat</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="Desa Pasar Lama, Kec. Kaur Selatan, Kab. Kaur" >
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Alamat Email</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="Finasrihidayat@gmail.com" >
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Asal Sekolah</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="SMP Negeri 01 Kaur Selatan" >
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Pilihan Jurusan Pertama</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="IPA" >
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Pilihan Jurusan Kedua</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="IPA" >
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Jalur Masuk</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="Reguler">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status</label>
                                                        <p style="margin-top: -2%">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                                                              <label class="form-check-label" for="inlineRadio4">Tidak Aktif</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1">
                                                              <label class="form-check-label" for="inlineRadio5">Aktif</label>
                                                            </div>
                                                        </p>
                                            </div>
                                        </form>
                                    </div>

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
                        <h5 class="modal-title" id="exampleModalLabel">Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                    <!-- Page Heading -->
                                    <div class="p-3">
                                        <form class="user">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">NIK</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="1234567812345678">
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">NISN</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="12345678">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Nama</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="Faisal Inasri Hidayat">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Passworld</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="12345678">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Jenis Kelamin</label>
                                                    <select class="form-control form-control-solid " id="exampleFormControlSelect1" >
                                                        <option value="" selected disabled></option>
                                                        <option>Laki - Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Tempat Lahir</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="Bintuhan">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Tanggal Lahir</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="10-10-1998">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">No Handphone / WA</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="085609420259">
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Alamat</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="Desa Pasar Lama, Kec. Kaur Selatan, Kab. Kaur">
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Alamat Email</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="Finasrihidayat@gmail.com">
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Asal Sekolah</label>
                                                    <input type="passworld" class="form-control form-control-solid" id="nik" placeholder="SMP Negeri 01 Kaur Selatan">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Pilihan Jurusan Pertama</label>
                                                        <select class="form-control form-control-solid " id="exampleFormControlSelect1" >
                                                        <option value="" selected disabled></option>
                                                        <option>IPA</option>
                                                        <option>IPS</option>
                                                        <option>Bahasa</option>
                                                        <option>Agama</option>
                                                        <option>Boarding</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Pilihan Jurusan Kedua</label>
                                                        <select class="form-control form-control-solid " id="exampleFormControlSelect1" >
                                                        <option value="" selected disabled></option>
                                                        <option>IPA</option>
                                                        <option>IPS</option>
                                                        <option>Bahasa</option>
                                                        <option>Agama</option>
                                                        <option>Boarding</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Jalur Masuk</label>
                                                    <select class="form-control form-control-solid " id="exampleFormControlSelect1" >
                                                        <option value="" selected disabled></option>
                                                        <option>Umum</option>
                                                        <option>Prestasi</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="formFile" class="form-label">Upload Pas Foto</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="formFile" class="form-label">NISN yang Terdaftar & Scan Rapor Semester 1-5 (PDF)</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status</label>
                                                        <p style="margin-top: -2%">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                                                              <label class="form-check-label" for="inlineRadio4">Tidak Aktif</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1">
                                                              <label class="form-check-label" for="inlineRadio5">Aktif</label>
                                                            </div>
                                                        </p>
                                            </div>
                                        </form>
                                    </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Tambah Data</button>
                      </div>
                    </div>
                  </div>
                </div>

<?php 

    include "footer.php";

 ?>