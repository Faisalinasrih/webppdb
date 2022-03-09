<?php 
	require_once ('../inc/database.php');
	require_once ('../inc/helper.php');
	require_once ('../inc/config.php');
	require_once ('../inc/Uploader.php');

	if ($_SESSION['id_user']=='') {
		header('Location:'.BASEURL.'/page/login.php');
		exit;
	}

	$namaprestasi = filter($_POST['prestasi']);

	$piagam = new Uploader($_FILES['piagam']);
	$piagam->allowed_extensions(array("png", "jpg", "jpeg"));
	$piagam->max_size(1); // di MB
	$piagam->path("../assets/img/piagam");
	$piagam->encrypt_name();
	$filepiagam ='/'.$piagam->get_name();
	if (! $piagam->upload()) {
		kirimNotif('alert-warning','Error '.$piagam->get_error());
		header('Location:'.BASEURL.'/app/panel.php?page=tambah-prestasi-siswa');
		exit;

	} else {

		$data = array(
			'prestasi' =>$namaprestasi,
			'lampiran' => $filepiagam

		);

		addPrestasi($data);
		kirimNotif('alert-success','Edit Data Berhasil');
		header('Location:'.BASEURL.'/app/panel.php?page=prestasi-siswa');

	}

 ?>

 	