<?php 
// error_reporting(0);
	
	require_once ('../inc/database.php');
	require_once ('../inc/helper.php');
	require_once ('../inc/config.php');
	require_once ('../inc/Uploader.php');

	if ($_SESSION['id_user']=='') {
		header('Location:'.BASEURL.'/page/login.php');
		exit;
	}


	$nama = filter($_POST['nama']);
	$jk = filter($_POST['jk']);
	$tplahir = filter($_POST['tplahir']);
	$tglahir = filter($_POST['tglahir']);
	$nohp = filter($_POST['nohp']);
	$alamat = filter($_POST['alamat']);
	$email = filter($_POST['email']);
	$sasal = filter($_POST['sasal']);
	$jur1 = filter($_POST['jurusan1']);
	$jur2 = filter($_POST['jurusan2']);
	$jal = filter($_POST['jalur']);

	// if ($jur1==0) {
	// 	kirimNotif('alert-warning','Mohon isi Jurusan dengan benar');
	// 	header('Location:'.BASEURL.'/app/panel.php?page=edit-data');
	// 	exit;
	// }

	// if ($jur1==$jur2 || $jur2==$jur1) {
	// 	kirimNotif('alert-warning','Jurusan 1 tidak bisa sama dengan Jurusan 2');
	// 	header('Location:'.BASEURL.'/app/panel.php?page=edit-data');
	// 	exit;
	// }

	$valhp = count(validitiData($nohp,'nohp'));
	$dathp = validitiData('nohp','data');
	if ($valhp > 0 && $nohp != $dathp['no_hp']) {
		kirimNotif('alert-warning','No hp telah digunakan');
		header('Location:'.BASEURL.'/app/panel.php?page=edit-data');
		exit;
		# code...
	}

	$valemail = count(validitiData($email,'email'));
	$datemail = validitiData('email','data');
	if ($valemail > 0 && $email != $datemail['email']) {
		kirimNotif('alert-warning','Email telah digunakan');
		header('Location:'.BASEURL.'/app/panel.php?page=edit-data');
		exit;
		# code...
	}

	// $valjur1 = count(validitiData($jur1,'jurusan1'));
	// if ($valjur1 > 0) {
	// 	kirimNotif('alert-warning','Jurusan 1 tidak bisa sama dengan Jurusan 2');
	// 	header('Location:'.BASEURL.'/app/panel.php?page=edit-data');
	// 	exit;
	// 	# code...
	// }

	// $valjur2 = count(validitiData($jur2,'jurusan2'));
	// if ($valjur2 > 0) {
	// 	kirimNotif('alert-warning','Jurusan 2 tidak bisa sama dengan Jurusan 1');
	// 	header('Location:'.BASEURL.'/app/panel.php?page=edit-data');
	// 	exit;
	// 	# code...
	// }

	$filefoto = validitiData('upload1','upload');
	$filelampiran = validitiData('upload2','upload');
	if ($_FILES['pasfoto']['name'] == "") {
		$pasfoto = $filefoto['pas_foto'];
	} else{
		$foto = new Uploader($_FILES['pasfoto']);
		$foto->allowed_extensions(array("png", "jpg", "jpeg"));
		$foto->max_size(1); // di MB
		$foto->path("../assets/img/pasfoto");
		$foto->encrypt_name();
		$pasfoto ="/".$foto->get_name();
		if (! $foto->upload()) {
			kirimNotif('alert-warning','Error'.$foto->get_error());
			header('Location:'.BASEURL.'/app/panel.php?page=edit-data');
			exit;

		} else {
			unlink("../assets/img/pasfoto".$filefoto['pas_foto']);
		}
	}

	if ($_FILES['lampiran']['name'] == "") {
		$lampran = $filelampiran['lampiran'];
	} else{
		$lamp = new Uploader($_FILES['lampiran']);
		$lamp->allowed_extensions(array("pdf"));
		$lamp->max_size(1); // di MB
		$lamp->path("../assets/lamp");
		$lamp->encrypt_name();
		$lampran ="/".$lamp->get_name();
		if (! $lamp->upload()) {
			kirimNotif('alert-warning','Error'.$lamp->get_error());
			header('Location:'.BASEURL.'/app/panel.php?page=edit-data');
			exit;

		} else {
			unlink("../assets/lamp".$filelampiran['lampiran']);
		}
	}

	$data = array(
		'email' =>$email,
		'nama' => $nama,
		'jk' => $jk,
		'tp_lahir' => $tplahir,
		'tg_lahir' => $tglahir,
		'alamat' => $alamat,
		'no_hp' => $nohp,
		'asal_sekolah' => $sasal,
		'id_jurusan_1' => $jur1,
		'id_jurusan_2' => $jur2,
		'jalur' => $jal,
		'pas_foto' => $pasfoto,
		'lampiran' => $lampran

	);

	editdataUser($data);
	kirimNotif('alert-success','Edit Data Berhasil');
	header('Location:'.BASEURL.'/app/panel.php?page=lihat-data');



 ?>