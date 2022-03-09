<?php 
	
	// session_start();
	require_once ('../inc/database.php');
	require_once ('../inc/helper.php');
	require_once ('../inc/config.php');
	
	
	$username = filter($_POST['username']);
	$password = sha1(filter($_POST['password']));
	// var_dump($username);
	// var_dump($_POST['username']);
	$cekuser = cekUser($username);
	if ($cekuser > 0 ) {
		$cekpass = cekPass($username,$password,1);
		if ($cekpass > 0) {
			$cekaktif = cekPass($username,$password,2);
				if ($cekaktif['status']==1) {
					$data = getUser($username,$password);
					$_SESSION['id_user']=$data['id_user'];
					$_SESSION['role']=$data['role'];

					kirimNotif('alert-success','Kamu Berhasil Login');
					header('Location:'.BASEURL.'/app/panel.php');
					# code...
				} else{
					kirimNotif('alert-warning','Akun belum diverifikasi, silahkan cek email');
					header('Location:'.BASEURL.'/page/login.php');
				}
			# code...
		} else {
			kirimNotif('alert-warning','Username atau Password salah');
			header('Location:'.BASEURL.'/page/login.php');
		}
		# code...
	} else{
		kirimNotif('alert-warning','Username atau Password salah');
		header('Location:'.BASEURL.'/page/login.php');
	}

 ?>

 