<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Rapor Calon Siswa</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Rapor</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama Siswa</th>
                                            <th style="text-align: center;">Jurusan</th>
                                            <th style="text-align: center;">Rata - Rata</th>
                                            <th style="text-align: center;">status</th>
                                            <th style="text-align: center;">Scan Rapor</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">1</td>
                                            <td>System Architect</td>
                                            <td>Matematika</td>
                                            <td>Matematika</td>
                                            <td>System Architect</td>
                                            <td style="text-align: center;"><a class="btn btn-danger btn-sm" href="#" role="deleteuser.php"><i class="fas fa-download"></i></a></td>
                                            <td style="text-align: center;">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mod1"><i class="fas fa-eye"></i>
                                                </button>
                                                <a class="btn btn-primary btn-sm" href="<?= BASEURL.'/app/panel.php?page=edit-nilai'; ?>"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" href="#" role="deleteuser.php"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                <!-- Modal -->
                <div class="modal fade" id="mod1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Mata Pelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                    <!-- Page Heading -->
                                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mata Pelajaran</th>
                                            <th>S 1</th>
                                            <th>S 2</th>
                                            <th>S 3</th>
                                            <th>S 4</th>
                                            <th>S 5</th>
                                            <th>Total</th>
                                            <th>Rerata</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Matematika</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                        </tr>
                                        <tr>
                                            <td>IPA</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                        </tr>
                                        <tr>
                                            <td>IPS</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                        </tr>
                                        <tr>
                                            <td>B. Indonesia</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                        </tr>
                                        <tr>
                                            <td>B. Inggris</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                            <td>1234</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <label for="exampleFormControlSelect1 pl-3">Status Cetak</label>
                                                        <p style="margin-top: -2%">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                                                              <label class="form-check-label" for="inlineRadio4">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1">
                                                              <label class="form-check-label" for="inlineRadio5">Izinkan</label>
                                                            </div>
                                                        </p>
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
                        <h5 class="modal-title" id="exampleModalLabel">Data Mata Pelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                    <!-- Page Heading -->
                                    <form class="user">
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Mata Pelajaran</label>
                                                    <input type="text" class="form-control form-control-solid" id="nik" placeholder="1234567812345678" >
                                                </div>
                                                
                                            </div>
                                    </form>  

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Tambah Data Mata Pelajaran</button>
                      </div>
                    </div>
                  </div>
                </div>