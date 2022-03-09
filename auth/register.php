<?php 
	
	// session_start();
	require_once ('../inc/database.php');
	require_once ('../inc/helper.php');
	require_once ('../inc/config.php');

	// var_dump($_POST['nama']);

	$nik = filter($_POST['nik']);
	$nisn = filter($_POST['nisn']);
	$nama = filter($_POST['nama']);
	$pass = sha1(filter($_POST['pass']));
	$nohp = filter($_POST['nohp']);
	$email = filter($_POST['email']);

	$ceknisn = cekNisn($nisn);
		if ($ceknisn > 0) {
			kirimNotif('alert-warning','Nisn telah digunakan');
			header('Location:'.BASEURL.'/page/registrasi.php');
			# code...
		} else{
			$ceknik = cekNik($nik);
			if ($ceknik > 0) {
				kirimNotif('alert-warning','Nik telah digunakan');
				header('Location:'.BASEURL.'/page/registrasi.php');
				# code...
			} else{
				$ceknohp = cekNohp($nohp);
				if ($ceknohp > 0) {
					kirimNotif('alert-warning','No HP telah digunakan');
					header('Location:'.BASEURL.'/page/registrasi.php');
					# code...
				} else{
					$cekemail = cekEmail($email);
					if ($cekemail > 0) {
						kirimNotif('alert-warning','Email telah digunakan');
						header('Location:'.BASEURL.'/page/registrasi.php');
						# code...
					}else{
						$data = array(
							'nik' => $nik,
							'nisn' => $nisn,
							'nama' => $nama,
							'pass' => $pass,
							'no_hp' => $nohp,
							'email' => $email
						);
						$url=BASEURL.'/page/aktivasi.php';
						$token=addRegister($data);
						kirimToken($token,$url);
						kirimNotif('alert-success','Registrasi Berhasil, Silahkan cek Email untuk Aktivasi');
						header('Location:'.BASEURL.'/page/login.php');
					}
				}
			}
		}




?>