<?php 
	require_once ('../inc/database.php');
	require_once ('../inc/helper.php');
	require_once ('../inc/config.php');
	require_once ('../inc/Uploader.php');

	if ($_SESSION['id_user']=='') {
		header('Location:'.BASEURL.'app/panel.php?page=prestasi-siswa');
		exit;
	}

	
	$namaprestasi = filter($_POST['pres']);
	$idprestasi = filter($_POST['id']);
	$filelampiran = geteditPrestasi($idprestasi);

	if ($_FILES['lampir']['name'] == "") {
		$filepiagam = $filelampiran['piagam'];
	} else{
		$piagam = new Uploader($_FILES['lampir']);
		$piagam->allowed_extensions(array("png", "jpg", "jpeg"));
		$piagam->max_size(1); // di MB
		$piagam->path("../assets/img/piagam");
		$piagam->encrypt_name();
		$filepiagam ="/".$piagam->get_name();
		if (! $piagam->upload()) {
			kirimNotif('alert-warning','Error '.$piagam->get_error());
			header('Location:'.BASEURL.'/app/panel.php?page=edit-prestasi-siswa');
			exit;

		} else {

			unlink("../assets/img/piagam".$filelampiran['lampiran']);

		}
	}

	$data = array(
			'id' => $idprestasi,
			'prestasi' =>$namaprestasi,
			'lampiran' => $filepiagam

		);

		editPrestasi($data);
		kirimNotif('alert-success','Edit Data Berhasil');
		header('Location:'.BASEURL.'/app/panel.php?page=prestasi-siswa');

 ?>

 	