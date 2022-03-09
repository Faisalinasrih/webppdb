<?php 
    
    require_once ('../inc/config.php');
    require_once ('../inc/helper.php');
    include "../temp/header.php"; 

?>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <?php showNotif();
                                    // var_dump($_SESSION);
                                 ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Account Baru</h1>
                            </div>
                            <form class="user" action="<?= BASEURL."/auth/register.php" ?>" method="post">
                                <div class="form-group">
                                    <input type="number" name="nik" class="form-control form-control-solid" id="nik"
                                        placeholder="Nomor Induk Kependudukan / NIK" required="">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="nisn" class="form-control form-control-solid" id="nisn"
                                        placeholder="Nomor Induk Siswa Nasional / NISN" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-solid" id="nama"
                                        placeholder="Nama Lengkap" required="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control form-control-solid" id="pass"
                                        placeholder="Password" required="">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="nohp" class="form-control form-control-solid" id="nohp"
                                        placeholder="No Handphone / WA contoh: 0812xxxxxxxx" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-solid" id="email"
                                        placeholder="Alamat Email"required="">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Registrasi Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Tutorial Pendaftaran</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama">Cek NISN Calon Siswa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>