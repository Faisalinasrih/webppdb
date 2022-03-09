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
                    <h1 class="h3 mb-2 text-gray-800">Tambah Account</h1>

                    <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Faisal Inasri Hidayat</h6>
                                </div>
                                <div class="card-body">
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
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="formFile" class="form-label">Upload Pas Foto</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                                <div class="col-sm-6 mb-3 mt-2 mb-sm-0">
                                                    <label for="formFile" class="form-label">NISN yang Terdaftar & Scan Rapor Semester 1-5 (PDF)</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="text-align: center;">
                                            <a href="rekapitulasi.php" class="btn btn-success mt-3"><i class="fa fa-save"></i> Simpan Data Account</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                </div>
                <!-- /.container-fluid -->
<?php 

    include "footer.php";

 ?>