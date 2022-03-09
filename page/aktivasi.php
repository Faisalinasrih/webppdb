<?php 
    

    require_once ('../inc/config.php');
    require_once ('../inc/helper.php');
    require_once ('../inc/database.php');
    include "../temp/header.php";

    if (isset($_SESSION['id_user']) && $_SESSION['id_user']<>'')  {
        header('Location:'.BASEURL.'/page/dasboard.php');
        # code...
    }

    if (isset($_GET['token']) && $_GET['token']<>'') {

        $token = filter($_GET['token']);
        $cektoken = cekToken($token);
        $date = date('Y-m-d h:i:s');
        $cekstatus = Timer($cektoken['date'],$date);
        if (empty($cektoken['id_token'])) {
            header('Location:'.BASEURL);# code...
        }
        if ($cekstatus>4) {
            tokenExpired($token);
            $status = 'expired';
            # code...
        }else{
            if ($cektoken['status']==2) {
            $status = 'expired';

            }elseif ($cektoken['status']==1){
                $status = 'aktif';

            }elseif ($cektoken['status']==0){
                tokenStatus($token,$cektoken['id_user']);
                $status = 'aktif';
                
            }
        }
         

    }else{
        header('Location:'.BASEURL);# code...

    }

 ?>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
        	<div class="col-lg-12 mt-5 text-center">
                        <img src="../assets/img/logoman.png" width="150px">
                    </div>

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- page untuk aktif -->
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Aktivasi Account</h6>
                                </div>
                                <?php 
                                    if ($status == 'aktif' ) {
                                        # code...

                                 ?>
                                <div class="card-body p-3" style="text-align: center;">
                                    <div class="alert alert-success " role="alert">Akun anda berhasil di <strong>aktivasi</strong>, silahkan klik untuk login
                                    </div>
                                </div>
                                <div style="text-align: center;">
                                    <a href="<?= BASEURL."/page/login.php" ?>" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-right-to-bracket" style="text-align: center;"></i> Login</a>
                                    <a href="<?= BASEURL; ?>" class="btn btn-warning mb-3"><i class="fa-solid fa-arrow-right-to-bracket" style="text-align: center;"></i> Home</a>
                                </div>
                                <?php 
                                    } elseif ($status == 'expired') {
                                        # code... 
                                 ?>

                                 <div class="card-body p-3" style="text-align: center;">
                                    <div class="alert alert-warning " role="alert">Token <strong>Expired</strong>, silahkan klik untuk kirim ulang token.
                                    </div>
                                </div>
                                <form action="<?= BASEURL."/auth/aktivasi.php"; ?>" method="post">
                                <input type="hidden" name="token" value="<?= $token; ?>">
                                <div style="text-align: center;">
                                    <button class="btn btn-success mb-3" type="submit"><i class="fa-solid fa-arrow-right-to-bracket" style="text-align: center;"></i> Resend</button>

                                </form>
                                    <a href="<?= BASEURL; ?>" class="btn btn-warning mb-3"><i class="fa-solid fa-arrow-right-to-bracket" style="text-align: center;"></i> Home</a>
                                </div>
                                <?php 
                                    }
                                 ?>
                        </div>
                    </div>
                </div>
            </div>
            	</div>
            	<h6 class="h6 text-gray-400 text-center p-5" style="margin-top: -2%"> Follow Us<br></h6>
            	<div class="row">
            		<div class="col-lg-12">
            			<div class="row">
                        <div class="col-lg-4 text-center">
                            <a href="https://www.instagram.com/fatahillahmasyitoh9551/">
                                <img src="../assets/img/logoig.png" width="100">
                            </a>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="https://www.instagram.com/fatahillahmasyitoh9551/">
                                <img src="../assets/img/logofb.png" width="100">
                            </a>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="https://www.instagram.com/fatahillahmasyitoh9551/">
                                <img src="../assets/img/logoyt.png" width="100">
                            </a>
                        </div>
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