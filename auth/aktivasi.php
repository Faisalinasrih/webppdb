<?php 
	
	// session_start();
	require_once ('../inc/database.php');
	require_once ('../inc/helper.php');
	require_once ('../inc/config.php');

	$token = $_POST['token'];
	$data = cekToken($token);
	$val = cekToken2($data['id_user']);
	if ($val >0) {
		kirimNotif('alert-warning','Kode Aktivasi telah dikirim, cek kembali email kamu');
		header('Location:'.BASEURL.'/page/login.php');
		# code...
	} else{
		$nama = getNama($data['id_user']);
		$user = getAlluser($data['id_user']);
		if ($user['status']=='1') {
			kirimNotif('alert-warning','Akun kamu telah diaktivasi, silahkan Login');
			header('Location:'.BASEURL.'/page/login.php');
			# code...
		} else{
			$token2 = kirimUlang($data['email'], $data['id_user']);
			$dump = array('nama' => $nama['nama'],'email' => $data['email'],'token' => $token2 );
			kirimToken($dump,BASEURL.'/page/aktivasi.php');
			kirimNotif('alert-success','Kode Aktivasi telah dikirim ulang, cek kembali email kamu');
			header('Location:'.BASEURL.'/page/login.php');

		}
		

	}