<?php 
	require_once ('../inc/database.php');
	require_once ('../inc/helper.php');
	require_once ('../inc/config.php');
	require_once ('../inc/Uploader.php');

	if ($_SESSION['id_user']=='') {
		header('Location:'.BASEURL.'/page/login.php');
		exit;
	}

	$idprestasi = filter($_GET['id']);
	$filelampiran = geteditPrestasi($idprestasi);

	unlink("../assets/img/piagam".$filelampiran['lampiran']);

	$data = array(
			'id' => $idprestasi


		);

		delPrestasi($data);
		kirimNotif('alert-success','Data Berhasil Dihapus');
		header('Location:'.BASEURL.'/app/panel.php?page=prestasi-siswa');


?>