
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Account</h1>

                    <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Faisal Inasri Hidayat</h6>
                                </div>
                                <div class="card-body">

                                    <!-- Page Heading -->
                                    <div class="p-5">
                                    <?php showNotif();
                                    // var_dump($_SESSION);
                                     ?>
                                        <form action="<?= BASEURL.'/app/editacc.php' ?>" class="user" method="post" enctype='multipart/form-data'>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">NIK</label>
                                                    <input name="nik" type="text" class="form-control form-control-solid" id="nik" placeholder="NIK" value="<?= filter($datauser[0]['username']); ?>" disabled >
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">NISN</label>
                                                    <input name="nisn" type="text" class="form-control form-control-solid" id="nik" placeholder="NISN" value="<?= filter($datauser[0]['nisn']); ?>" disabled>
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Nama</label>
                                                    <input name="nama" type="text" class="form-control form-control-solid" id="nik" placeholder="Nama Lengkap" value="<?= filter($datauser[0]['nama']); ?>" required="">
                                                </div> 
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Jenis Kelamin</label>
                                                    <select name="jk" class="form-control form-control-solid " id="exampleFormControlSelect1"  >
                                                        <option value="<?= $datauser[0]['jk']; ?>" required=""><?php if ($datauser[0]['jk'] == 'P'){echo'Perempuan';} elseif($datauser[0]['jk']=='L'){echo'Laki - Laki';} ?></option>
                                                        <option value="L">Laki - Laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Tempat Lahir</label>
                                                    <input name="tplahir" type="text" class="form-control form-control-solid" id="nik" placeholder="Tempat Lahir" value="<?= filter($datauser[0]['tp_lahir']); ?>" required="">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Tanggal Lahir</label>
                                                    <input name="tglahir" type="date" class="form-control form-control-solid" id="nik" placeholder="Tanggal Lahir" value="<?= filter($datauser[0]['tg_lahir']); ?>" required="">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">No Handphone / WA</label>
                                                    <input name="nohp" type="number" class="form-control form-control-solid" id="nik" placeholder="No Handphone / WA" value="<?= filter($datauser[0]['no_hp']); ?>" required="">
                                                </div>
                                                <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Alamat</label>
                                                    <textarea name="alamat" class="form-control" required=""><?= filter($datauser[0]['alamat']); ?></textarea>
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Alamat Email</label>
                                                    <input name="email" type="email" class="form-control form-control-solid" id="nik" placeholder="Alamat Email" value="<?= filter($datauser[0]['email']); ?>" required="">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Asal Sekolah</label>
                                                    <input name="sasal" type="text" class="form-control form-control-solid" id="nik" placeholder="Asal Sekolah" value="<?= filter($datauser[0]['asal_sekolah']); ?>" required="">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Pilihan Jurusan Pertama</label>
                                                        <select name="jurusan1" class="form-control form-control-solid " id="exampleFormControlSelect1" required="" required="">
                                                        <?php 
                                                            if ($datauser[0]['id_jurusan_1']==0) {
                                                                echo '<option selected disabled></option>';
                                                            } else{
                                                         ?>
                                                        <option value="<?= $datauser[0]['id_jurusan_1']; ?>" ><?= filter(getJurusan($datauser[0]['id_jurusan_1'])['jurusan']); ?></option>
                                                        <?php
                                                        } 
                                                            foreach ($jurusan as $jur) {
                                                         ?>
                                                         <option value="<?= $jur['id_jurusan'] ?>"> <?= $jur['jurusan'] ; ?></option>

                                                        <?php 
                                                          }
                                                        ?>
                                                    </select>
                                                </div>
                                                <!-- <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Pilihan Jurusan Kedua</label>
                                                        <select name="jurusan2" class="form-control form-control-solid " id="exampleFormControlSelect1" required="">
                                                        <?php 
                                                            if ($datauser[0]['id_jurusan_2']==0) {
                                                                echo '<option selected disabled></option>';
                                                            } else{
                                                         ?>
                                                        <option value="<?= $datauser[0]['id_jurusan_2']; ?>" ><?= filter(getJurusan($datauser[0]['id_jurusan_2'])['jurusan']); ?></option>
                                                        <?php
                                                        } 
                                                            foreach ($jurusan as $jur) {
                                                         ?>
                                                         <option value="<?= $jur['id_jurusan'] ?>"> <?= $jur['jurusan'] ; ?></option>

                                                        <?php 
                                                          }
                                                        ?>
                                                    </select>
                                                </div> -->
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="exampleFormControlSelect1 pl-3">Jalur Masuk</label>
                                                    <select name="jalur" class="form-control form-control-solid " id="exampleFormControlSelect1" required="">
                                                        <option value="<?= $datauser[0]['jalur']; ?>"><?php if ($datauser[0]['jalur'] == 'pres'){echo'Prestasi';} elseif($datauser[0]['jalur']=='req'){echo'Reguler';} ?></option>
                                                        <option value="req">Umum</option>
                                                        <option value="pres">Prestasi</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="formFile" class="form-label">Upload Pas Foto</label>
                                                    
                                                    <input name="pasfoto" class="form-control" type="file" id="formFile">
                                                    <?php 
                                                        if ($datauser[0]['pas_foto'] != '') {
                                                           
                                                     ?>
                                                    <a style="margin-top: 2%" href="<?= BASEURL.'/assets/img/pasfoto'.$datauser[0]['pas_foto']; ?>">cek file upload</a>

                                                    <?php 
                                                        }
                                                     ?>
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="formFile" class="form-label">NISN yang Terdaftar & Scan Rapor Semester 1-5 (PDF)</label>
                                                    <input name="lampiran" class="form-control" type="file" id="formFile">
                                                    <?php 
                                                        if ($datauser[0]['lampiran'] != '') {
                                                           
                                                     ?>
                                                    <a style="margin-top: 2%" href="<?= BASEURL.'/assets/lamp'.$datauser[0]['lampiran']; ?>">cek file upload</a>

                                                    <?php 
                                                        }
                                                     ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="text-align: center;">
                                            <button type="submit" class="btn btn-success mt-3"><i class="fa fa-save"></i> Save Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                </div>