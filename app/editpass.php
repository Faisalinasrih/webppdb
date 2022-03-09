<?php 
	require_once ('../inc/database.php');
	require_once ('../inc/helper.php');
	require_once ('../inc/config.php');

	
	$passlama = sha1($_POST['plama']);
	$passbaru = sha1($_POST['pbaru']);
	$valpass = count(getPass($passlama));
	if ($valpass == 0) {
		kirimNotif('alert-warning','Password lama yang anda masukan salah, silahkan masukan coba lagi ');
		header('Location:'.BASEURL.'/app/panel.php?page=ganti-password');
	}elseif ($valpass > 0) {
		editPass($passbaru);
		kirimNotif('alert-success','Edit Data Berhasil');
		header('Location:'.BASEURL.'/app/panel.php?page=ganti-password');
	}


		

 ?>
