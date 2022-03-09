<?php 
	
	// session_start();
    require_once ('../inc/config.php');
    require_once ('../inc/helper.php');
    require_once ('../inc/database.php');

    if (isset($_SESSION['id_user']) && $_SESSION['id_user']<>'')  {
            $user = getUserinfo($_SESSION['id_user']);
            $filtermenu = filterMenu($_SESSION['id_user']);
            $filterjalur = filterJalur($_SESSION['id_user']);
            $filterlulus = filterLulus($_SESSION['id_user']);
    		include_once ('../temp/header.php');
    		include_once ('../temp/menu.php');
    	if (isset($_GET['page']) && $_GET['page']<>'') {
            if ($_GET['page'] == 'lihat-data') {
                $datauser = User($_SESSION['id_user']);
                include_once ('../page/account.php');
            } elseif ($_GET['page'] == 'edit-data') {
                $datauser = User($_SESSION['id_user']);
                $jurusan = listJurusan();
                include_once ('../page/editaccount.php');
            } elseif ($_GET['page'] == 'lihat-nilai') {
                $datanilai = getMapel();
                include_once ('../page/rapor.php');
                # code...
            } elseif ($_GET['page'] == 'tambah-nilai') {
                 $datanilai = nilaiRapor($_SESSION['id_user']);
                include_once ('../page/tambahrapor.php');
            } elseif ($_GET['page'] == 'edit-nilai'){
                $datanilai = nilaiRapor($_SESSION['id_user']);
                include_once ('../page/editrapor.php');
            } elseif ($_GET['page'] == 'kartu'){
                $kartu = User($_SESSION['id_user']);
                include_once ('../page/kartu.php');
            } elseif ($_GET['page'] == 'cetak-kartu'){
                include_once ('../page/cetakkartu.php');
            } elseif ($_GET['page'] == 'pengumuman-seleksi'){
                $pengumumanlulus = User($_SESSION['id_user']);
                include_once ('../page/pengumumank.php');
            } elseif ($_GET['page'] == 'prestasi-siswa'){
                $pres = getPrestasi($_SESSION['id_user']);
                include_once ('../page/prestasi.php');
            } elseif ($_GET['page'] == 'tambah-prestasi-siswa'){
                include_once ('../page/addprestasi.php');
            } elseif ($_GET['page'] == 'edit-prestasi-siswa'){
                if (isset($_GET['id']) && $_GET['id']<>'') {
                    $pres = geteditPrestasi($_GET['id']);
                    include_once ('../page/editprestasi.php');
                }else{
                    echo '<script type="text/javascript">
                    window.location.href = "'.BASEURL.'/app/panel.php?page=prestasi-siswa'.'";
                    </script>';    
                    exit;
                }
            } elseif ($_GET['page'] == 'data-siswa-baru'){
                $datauser = User($_SESSION['id_user']);
                include_once ('../page/datasiswabaru.php');
            } elseif ($_GET['page'] == 'edit-data-siswa-baru'){
                include_once ('../page/editdatasiswabaru.php');
            } elseif ($_GET['page'] == 'info'){
                include_once ('../page/informasi.php');
            } elseif ($_GET['page'] == 'manage-user'){
                $dataacount = manageUser();
                include_once ('../page/muser.php');
            } elseif ($_GET['page'] == 'manage-rapor'){
                include_once ('../page/mrapor.php');
            } elseif ($_GET['page'] == 'semua-calon-siswa'){
                include_once ('../page/allcalonsiswa.php');
            } elseif ($_GET['page'] == 'semua-data-siswa'){
                include_once ('../page/alldatasiswa.php');
            } elseif ($_GET['page'] == 'tambah-data-siswa'){
                include_once ('../page/adddatasiswa.php');
            } elseif ($_GET['page'] == 'tambah-mata-pelajaran'){
                include_once ('../page/addmapel.php');
            } elseif ($_GET['page'] == 'tambah-prasekolah'){
                include_once ('../page/addprasekolah.php');
            } elseif ($_GET['page'] == 'tambah-imunisasi'){
                include_once ('../page/addimunisasi.php');
            } elseif ($_GET['page'] == 'ganti-password'){
                include_once ('../page/cpass.php');
            }
   			
    	}else{
    		include_once ('../page/dasboard.php');
    	}
    		include_once ('../temp/footer.php');
        
        # code...
    }else{
		header('Location:'.BASEURL.'/page/login.php');    
	}


 ?>