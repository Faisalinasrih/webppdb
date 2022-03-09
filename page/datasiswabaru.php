<?php 
    var_dump($datauser);

 ?><!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php showNotif(); ?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Diri Siswa</h1>

                    <!-- Illustrations -->
                    <!-- data siswa> -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"   aria-controls="collapseCardExample">
                                   <h6 class="m-0 font-weight-bold text-primary">Data <?= filter($user['nama']); ?></h6>
                                </a>
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-3" style="width: 14rem;"
                                                src="<?= BASEURL.'/assets/img/pasfoto'.$datauser[0]['pas_foto'] ?>" alt="...">
                                        </div>
                                        <!-- Page Heading -->
                                        <div class="p-3">
                                            <form class="user">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Nama</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nama Lengkap" value="<?= filter($user['nama']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">NISN</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nomor Induk Siswa Nasional" value="<?= filter($datauser[0]['nisn']); ?>" disabled>
                                                    </div>

                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">NIK</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nomor Induk Keluarga" value="<?= filter($datauser[0]['username']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Tempat Lahir</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Tempat Lahir" value="<?= filter($datauser[0]['tp_lahir']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Tanggal Lahir</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Tanggal Lahir" value="<?= filter($datauser[0]['tg_lahir']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Jenis Kelamin</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Jenis Kelamin" value="<?php if ($datauser[0]['jk'] == 'P'){echo'Perempuan';} elseif($datauser[0]['jk']=='L'){echo'Laki - Laki';} ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Anak Ke</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Anak ke" value="<?= filter($datauser[0]['anak_ke']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Jumlah Saudara</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Jumlah Saudara" value="<?= filter($datauser[0]['jumlah_saudara']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Agama</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Agama" value="<?= filter($datauser[0]['agama']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Cita - Cita</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Cita - Cita" value="<?= filter($datauser[0]['cita_cita']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">No Handphone</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nomor Handphone" value="<?= filter($datauser[0]['no_hp']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Alamat Email</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Alamat Email" value="<?= filter($datauser[0]['email']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Hobi</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Hobi Anda" value="<?= filter($datauser[0]['hobi']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status Tempat Tinggal</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Status Tempat Tinggal" value="<?= filter($datauser[0]['status_tinggal']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Provinsi</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Provinsi" value="<?= filter($datauser[0]['provinsi']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kabupaten / Kota</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kabupaten / Kota" value="<?= filter($datauser[0]['kab']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kecamatan</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kecamatan" value="<?= filter($datauser[0]['kec']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kelurahan / Desa</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kelurahan / Desa" value="<?= filter($datauser[0]['desa']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Alamat</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Alamat" value="<?= filter($datauser[0]['alamat']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Koordinat Alamat</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Koorinat Alamat" value="<?= filter($datauser[0]['koor_alamat']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kode Pos</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kode Pos" value="<?= filter($datauser[0]['kode_pos']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Transportasi Ke Sekolah</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Transportasi Ke Sekolah" value="<?= filter($datauser[0]['trasportasi']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Jarak dari Tempat Tingaal Ke Madrasah</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Jarak Dari Rumah ke Madrasah" value="<?= filter($datauser[0]['jarak']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Waktu Tempuh</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Waktu dari Rumah ke Madrasah" value="<?= filter($datauser[0]['waktu']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Yang Membiayai Sekolah</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Yang Membiayai Sekolah" value="<?= filter($datauser[0]['yang_membiayai']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kebutuhan Kusus</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kebutuhan Khusus" value="<?= filter($datauser[0]['keb_khusus']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kebutuhan Disabilitas</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kebutuhan Disabilitas" value="<?= filter($datauser[0]['keb_disabiltas']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Pra Sekolah</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                            <label class="form-check-label" for="inlineCheckbox1">Pernah TK/RA</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" disabled="" checked="">
                                                            <label class="form-check-label" for="inlineCheckbox2">Pernah Paud</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Imunisasi</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="" checked="">
                                                            <label class="form-check-label" for="inlineCheckbox1">Hepatitis B</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" disabled="">
                                                            <label class="form-check-label" for="inlineCheckbox2">BCG</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                            <label class="form-check-label" for="inlineCheckbox1">DPT</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" disabled="" checked="">
                                                            <label class="form-check-label" for="inlineCheckbox2">Polio</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                            <label class="form-check-label" for="inlineCheckbox1">Campak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" disabled="">
                                                            <label class="form-check-label" for="inlineCheckbox2">Covid</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Nomor KIP</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nomor KIP" value="<?= filter($datauser[0]['no_kip']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Nomor Kartu Keluarga</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nomor Kartu Keluarga" value="<?= filter($datauser[0]['no_kk']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kepala Keluarga</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kepala Keluarga" value="<?= filter($datauser[0]['kep_keluarga']); ?>" disabled>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-4 mb-sm-0" style="text-align: center;">
                                                        <a href="#" class="btn btn-success btn-block"><i class="fas fa-eye"></i>  Kartu Keluarga</a>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-4 mb-sm-0" style="text-align: center;">
                                                        <a href="#" class="btn btn-success btn-block"><i class="fas fa-eye"></i>  KIP</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end data siswa -->
                            <!-- data orang tua -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"   aria-controls="collapseCardExample2">
                                   <h6 class="m-0 font-weight-bold text-primary">Data Ayah Kandung</h6>
                                </a>
                                <div class="collapse show" id="collapseCardExample2">
                                    <div class="card-body">
                                        <!-- Page Heading -->
                                        <div class="p-3">
                                            <form class="user">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Nama Ayah Kandung</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nama Ayah Kandung" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status</label>
                                                        <p style="margin-top: -2%">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio4">Masih Hidup</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio5">Sudah Meninggal</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio6">Tidak Diketahui</label>
                                                            </div>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Tempat Lahir</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Tempat Lahir" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Tanggal Lahir</label>
                                                        <input type="date" class="form-control form-control-solid" id="nik" placeholder="" disabled=""> 
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Pendidikan Terakhir</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Pendidikan Terakhir" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Pekerjaan Utama</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Pekerjaan Utama" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Penghasilan Rata - Rata Perbulan</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Penhasilan" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <p style="margin-top: -2%;">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineCheckbox1">Tidak Memiliki Nomor Handphone</label>
                                                            </div>
                                                        </p>
                                                        <label for="exampleFormControlSelect1 pl-3">No Handphone</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Contoh: 081234567890" disabled="">
                                                    </div>

                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <p style="margin-top: -2%;">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineCheckbox1">Tempat Tinggal Sama Dengan Ayah Kandung</label>
                                                            </div>
                                                        </p>
                                                        <label for="exampleFormControlSelect1 pl-3">Domisili</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Domisili" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled=""></textarea>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status Tempat Tinggal</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Status Tempat tinggal" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Provinsi</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Provinsi" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kabupaten / Kota</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kabupaten atau Kota" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kecamatan</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kecamatan" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kelurahan / Desa</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kelurahan atau Desa" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Alamat</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Alamat" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kode Pos</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kode Pos" disabled="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- data Ibu Kandung -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"   aria-controls="collapseCardExample3">
                                   <h6 class="m-0 font-weight-bold text-primary">Data Ibu Kandung</h6>
                                </a>
                                <div class="collapse show" id="collapseCardExample3">
                                    <div class="card-body">
                                        <!-- Page Heading -->
                                        <div class="p-3">
                                            <form class="user">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Nama Ibu Kandung</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nama Ibu Kandung" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status</label>
                                                        <p style="margin-top: -2%">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio4">Masih Hidup</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio5">Sudah Meninggal</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio6">Tidak Diketahui</label>
                                                            </div>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Tempat Lahir</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Tempat Lahir" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Tanggal Lahir</label>
                                                        <input type="date" class="form-control form-control-solid" id="nik" placeholder="" disabled=""> 
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Pendidikan Terakhir</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Pendidikan Terakhir" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Pekerjaan Utama</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Pekerjaan Utama" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Penghasilan Rata - Rata Perbulan</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Penhasilan" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <p style="margin-top: -2%;">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineCheckbox1">Tidak Memiliki Nomor Handphone</label>
                                                            </div>
                                                        </p>
                                                        <label for="exampleFormControlSelect1 pl-3">No Handphone</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Contoh: 081234567890" disabled="">
                                                    </div>

                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <p style="margin-top: -2%;">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineCheckbox1">Tempat Tinggal Sama Dengan Ayah Kandung</label>
                                                            </div>
                                                        </p>
                                                        <label for="exampleFormControlSelect1 pl-3">Domisili</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Domisili" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled=""></textarea>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status Tempat Tinggal</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Status Tempat tinggal" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Provinsi</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Provinsi" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kabupaten / Kota</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kabupaten atau Kota" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kecamatan</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kecamatan" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kelurahan / Desa</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kelurahan atau Desa" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Alamat</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Alamat" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kode Pos</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kode Pos" disabled="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- data Ibu Kandung -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"   aria-controls="collapseCardExample3">
                                   <h6 class="m-0 font-weight-bold text-primary">Data Wali</h6>
                                </a>
                                <div class="collapse show" id="collapseCardExample3">
                                    <div class="card-body">
                                        <!-- Page Heading -->
                                        <div class="p-3">
                                            <form class="user">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <p style="margin-top: -2%">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio4">Sama Dengan Ayah Kandung</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio5">Sama Dengan Ibu Kandung</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio5">Lainnya</label>
                                                            </div>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Nama Wali</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Nama Wali" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status</label>
                                                        <p style="margin-top: -2%">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio4">Masih Hidup</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio5">Sudah Meninggal</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineRadio6">Tidak Diketahui</label>
                                                            </div>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Tempat Lahir</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Tempat Lahir" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Tanggal Lahir</label>
                                                        <input type="date" class="form-control form-control-solid" id="nik" placeholder="" disabled=""> 
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Pendidikan Terakhir</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Pendidikan Terakhir" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Pekerjaan Utama</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Pekerjaan Utama" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Penghasilan Rata - Rata Perbulan</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Penhasilan" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <p style="margin-top: -2%;">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineCheckbox1">Tidak Memiliki Nomor Handphone</label>
                                                            </div>
                                                        </p>
                                                        <label for="exampleFormControlSelect1 pl-3">No Handphone</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Contoh: 081234567890" disabled="">
                                                    </div>

                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <p style="margin-top: -2%;">
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled="">
                                                              <label class="form-check-label" for="inlineCheckbox1">Tempat Tinggal Sama Dengan Ayah Kandung</label>
                                                            </div>
                                                        </p>
                                                        <label for="exampleFormControlSelect1 pl-3">Domisili</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Domisili" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled=""></textarea>
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Status Tempat Tinggal</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Status Tempat tinggal" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Provinsi</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Provinsi" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kabupaten / Kota</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kabupaten atau Kota" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kecamatan</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kecamatan" disabled="">
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kelurahan / Desa</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kelurahan atau Desa" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Alamat</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Alamat" disabled="">
                                                    </div>
                                                    <div class="col-sm-12 mb-3 mt-2 mb-sm-0">
                                                        <label for="exampleFormControlSelect1 pl-3">Kode Pos</label>
                                                        <input type="text" class="form-control form-control-solid" id="nik" placeholder="Kode Pos" disabled="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tutup card -->
                            <div class="row mb-5" style="text-align: center;">
                                <div class="col-sm-6 mb-3 mt-4 mb-sm-0" style="text-align: center;">
                                        <a href="../page/cetakdatasiswa.php" class="btn btn-success btn-block"><i class="fa fa-print"></i>  Cetak Data Siswa</a>
                                </div>
                                <div class="col-sm-6 mb-3 mt-4 mb-sm-0" style="text-align: center;">
                                        <a href="<?= BASEURL.'/app/panel.php?page=edit-data-siswa-baru'; ?>" class="btn btn-success btn-block"><i class="fa fa-edit"></i>  Edit Data Siswa</a>
                                </div>
                            </div>

                            

                </div>
                <!-- /.container-fluid -->