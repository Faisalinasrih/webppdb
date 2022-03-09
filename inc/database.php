<?php 

	require_once ('config.php');
	require_once ('Medoo.php');
	date_default_timezone_set("Asia/Jakarta");

	$db= new Medoo([
		'database_type'=>'mysql',
		'server'=>DBHOST,
		'database_name'=>DBNAME,
		'username'=>DBUSER,
		'password'=>DBPASS,
	]);

	function cekUser($param){
		global $db;
		$a = $db->select('user',[
			'id_user'
		],[
			'username'=>$param
		]);
		return count($a);
		# code...
	}

	function cekPass($username,$password,$rule){
		global $db;
		if ($rule == 1) {
			$a = $db->select('user',[
				'id_user'
			],[
				'username'=>$username,
				'pass'=>$password
			]);
			$b = count($a);
			# code...
		} elseif ($rule == 2) {
			$c = $db->get('user',[
				'id_user',
				'status'
			],[
				'username'=>$username,
				'pass'=>$password
			]);

			$b = $c;
		}
		return $b;
	}

	function getUser($username,$password){
		global $db;
		$c = $db->get('user',[
				'id_user',
				'role'
			],[
				'username'=>$username,
				'pass'=>$password,
				'status'=>'1'
			]);
		return $c;
	}

	function cekNisn($nisn){
		global $db;
		$c = $db->select('data_diri',[
			'id_data_diri'

		],[
			'nisn'=>$nisn

		]);

		return count($c);

	}

	function cekNik($nik){
		global $db;
		$c = $db->select('user',[
			'id_user'

		],[
			'username'=>$nik

		]);

		return count($c);

	}

	function cekNohp($nohp){
		global $db;
		$c = $db->select('data_diri',[
			'id_data_diri'

		],[
			'no_hp'=>$nohp

		]);

		return count($c);

	}
	function cekEmail($email){
			global $db;
			$c = $db->select('user',[
				'id_user'

			],[
				'email'=>$email

			]);

			return count($c);

		}

	function addRegister($data){
		global $db;

		$token = base64_encode(sha1(date('d').rand(0,100).date('i').rand(0,10000).date('s')));
		$date = date('Y-m-d h:i:s');

		$a = $db->insert('user',[
				'username'=>$data['nik'],
				'pass'=>$data['pass'],
				'email'=>$data['email'],
				'role'=>'siswa',
				'status'=>'0'
		]);
		$id_user = $db->id();
		$b = $db->insert('data_diri',[
				'id_user'=>$id_user,
				'nama'=>$data['nama'],
				'nisn'=>$data['nisn'],
				'no_hp'=>$data['no_hp']

		]);

		$c = $db->insert('token',[
				'id_user'=>$id_user,
				'email'=>$data['email'],
				'token'=>$token,
				'date'=>$date,
				'status'=>'0'
		]);

		$d = $db->insert('kelulusan',[
				'id_user'=>$id_user,
				'status'=>'0'

		]);

		$datas = array('token' =>$token,'email'=>$data['email'],'nama'=>$data['nama'] );

		return $datas;

	}

	function cekToken($token){
		global $db;
		$c = $db->get('token',[
			'id_token',
			'id_user',
			'email',
			'date',
			'status',

		],[

			'token'=>$token
		]);

		return $c;
	}

	function tokenExpired($token){
		global $db;
		$a = $db->update('token',[
			'status'=>'2'

		],[
			'token'=>$token

		]);

		return;
	}

	function tokenStatus($token,$id){
		global $db;
		$a = $db->update('user',[
			'status' => '1'
		],[
			'id_user' => $id
		]);

		$b = $db->update('token',[
			'status' => '1'
		],[
			'id_user' => $id,
			'token' => $token
		]);

		return;


	}

	function cekToken2($token){
		global $db;
		$c = $db->select('token',[
			'id_token',
			'id_user',
			'email',
			'date',
			'status',

		],[

			'id_user'=>$token,
			'status'=>'0'
		]);

		return count($c);
	}

	function getNama($id){
		global $db;
		$a = $db->get('data_diri',[
			'id_user',
			'nama'

		],[
			'id_user'=>$id

		]);

		return $a;

	}

	function kirimUlang($email,$id){
		global $db;
		$token = base64_encode(sha1(date('d').rand(0,100).date('i').rand(0,10000).date('s')));
		$date = date('Y-m-d h:i:s');
		$a = $db->insert('token',[
			'id_user' => $id,
			'email' => $email,
			'token' => $token,
			'date' => $date,
			'status' => '0'

		]);

		return $token;

	}

	function getAlluser($id){
		global $db;
		$a = $db->get('user',[
			'id_user',
			'status',
		],[
			'id_user' => $id
		]);


		return $a;
	}

	function getUserinfo($id_user){
		global $db;
		$a = $db->get('data_diri',[
			'id_user',
			'nama'
		],[
			'id_user' => $id_user
		]);

		return $a;
	}

	function filterMenu($id_user){
		global $db;
		$a = $db->get('data_diri',[
			'id_user',
			'nama',
			'jk',
			'nisn',
			'tp_lahir',
			'tg_lahir',
			'alamat',
			'no_hp',
			'asal_sekolah',
			'id_jurusan_1',
			'id_jurusan_2',
			'jalur',
			'pas_foto',
			'lampiran',

		],[
			'id_user' => $id_user
		]);
		if ($a['nama'] == '' || $a['jk'] == '' || $a['nisn'] == '' || $a['tp_lahir'] == '' || $a['tg_lahir'] == '0000-00-00' || $a['alamat'] == ''  || $a['no_hp'] == '' || $a['asal_sekolah'] == '' || $a['id_jurusan_1'] == '0' ||  $a['jalur'] == '' || $a['pas_foto'] == '' || $a['lampiran'] == '') {
			$menu = false;

		}else {
			$menu = true;
			# code...
		}
		return $menu;
	}

	function filterJalur($id_user){

		global $db;
		$a = $db->get('data_diri',[
			'id_user',
			'jalur'
		],[
			'id_user' => $id_user
		]);

		return $a;
	}

	function filterLulus($id_user){
		global $db;
		$a = $db->get('kelulusan',[
			'id_user',
			'status'
		],[
			'id_user' => $id_user
		]);

		return $a;
	}


	function User($id_user){
		global $db;
		$a = $db->select('data_diri',[
			'[>]user' => ['id_user' => 'id_user'],
			'[>]data_siswa' => ['id_user' => 'id_user'] 
		],[
			'user.username',
			'user.email',
			'user.role',
			'user.status',
			'data_diri.nama',
			'data_diri.jk',
			'data_diri.nisn',
			'data_diri.nis',
			'data_diri.tp_lahir',
			'data_diri.tg_lahir',
			'data_diri.alamat',
			'data_diri.no_hp',
			'data_diri.asal_sekolah',
			'data_diri.id_jurusan_1',
			'data_diri.id_jurusan_2',
			'data_diri.pas_foto',
			'data_diri.lampiran',
			'data_diri.no_pendaftaran',
			'data_diri.jalur',
			'data_diri.asal_sekolah',
			'data_siswa.tahun_masuk',
			'data_siswa.anak_ke',
			'data_siswa.jumlah_saudara',
			'data_siswa.agama',
			'data_siswa.cita_cita',
			'data_siswa.hobi',
			'data_siswa.status_tinggal',
			'data_siswa.provinsi',
			'data_siswa.kec',
			'data_siswa.kab',
			'data_siswa.desa',
			'data_siswa.koor_alamat',
			'data_siswa.kode_pos',
			'data_siswa.trasportasi',
			'data_siswa.jarak',
			'data_siswa.waktu',
			'data_siswa.yang_membiayai',
			'data_siswa.keb_khusus',
			'data_siswa.keb_disabiltas',
			'data_siswa.prasekolah',
			'data_siswa.imunisasi',
			'data_siswa.no_kip',
			'data_siswa.no_kk',
			'data_siswa.kep_keluarga',
			'data_siswa.kk',
			'data_siswa.kip'
		],[
			'data_diri.id_user' => $id_user
		]);

		return $a;
	}

	function getJurusan($id_jurusan){
		global $db;
		$a = $db->get('jurusan',[
			'id_jurusan',
			'jurusan'

		],[
			'id_jurusan' => $id_jurusan
		]);

		return $a;
	}

	function listJurusan(){
		global $db;
		$a = $db->select('jurusan',[
			'id_jurusan',
			'jurusan'
		]);

		return $a;
	}
	
	function editdataUser($da){
		global $db;
		$a = $db->update('user',[
			'email' =>$da['email']


		],[
			'id_user' => $_SESSION['id_user']
		]);

		$b = $db->update('data_diri',[
			'nama' => $da['nama'],
			'jk' => $da['jk'],
			'tp_lahir' => $da['tp_lahir'],
			'tg_lahir' => $da['tg_lahir'],
			'alamat' => $da['alamat'],
			'no_hp' => $da['no_hp'],
			'asal_sekolah' => $da['asal_sekolah'],
			'id_jurusan_1' => $da['id_jurusan_1'],
			'id_jurusan_2' => $da['id_jurusan_2'],
			'jalur' => $da['jalur'],
			'pas_foto' => $da['pas_foto'],
			'lampiran' => $da['lampiran']
		],[
			'id_user' => $_SESSION['id_user']
		]);

		return;
	}

	function nilaiRapor(){
		global $db;
		$a = $db->select('mapel',[
			'[>]rapor' => ['id_mapel' => 'id_mapel'], 
		],[
			'mapel.mapel',
			'rapor.nilai',
			'rapor.semester',
			'rapor.id_mapel'

		],[
			'rapor.id_user' => $_SESSION['id_user']
		]);

		return $a;
	}

	function getMapel(){
		global $db;
		$a = $db->select('mapel',[
			'id_mapel',
			'mapel'

		]);

		return $a;
	}

	function getRapor($id_mapel,$semester){
		global $db;
		$a = $db->get('rapor',[
			'nilai',
			'semester'

		],[
			'id_user' => $_SESSION['id_user'],
			'id_mapel'=> $id_mapel,
			'semester'=> $semester


		]);

		return $a;
	}

	function getPrestasi($id_user){
		global $db;
		$a = $db->select('prestasi',[
			'id_pretasi',
			'pretasi',
			'lampiran'

		],[
			'id_user' => $_SESSION['id_user']


		]);

		return $a;
	}

	function geteditPrestasi($id){
		global $db;
		$a = $db->get('prestasi',[
			'id_pretasi',
			'pretasi',
			'lampiran'

		],[
			'id_user' => $_SESSION['id_user'],
			'id_pretasi' => $id


		]);

		return $a;
	}

	function validitiData($param,$rule){
		global $db;
		if ($rule=='nohp') {
			$a = $db->select('data_diri',[
				'id_data_diri'

			],[
				'no_hp' => $param
			]);
		}elseif ($rule=='email') {
			$a = $db->select('user',[
				'id_user'
			],[
				'email' => $param
			]);
		}elseif ($rule=='jurusan1') {
			$a = $db->select('data_diri',[
				'id_data_diri'
			],[
				'id_jurusan_2' => $param,
				'id_user' => $_SESSION['id_user']
			]);
		}elseif ($rule=='jurusan2') {
			$a = $db->select('data_diri',[
				'id_data_diri'
			],[
				'id_jurusan_1' => $param,
				'id_user' => $_SESSION['id_user']
			]);
		}elseif ($rule=='upload') {
			if ($param=='upload1') {
				$a = $db->get('data_diri',[
					'pas_foto',
				],[
					'id_user' => $_SESSION['id_user']
				]);
			}elseif ($param=='upload2') {
				$a = $db->get('data_diri',[
					'lampiran'
				],[
					'id_user' => $_SESSION['id_user']
				]);
			}
		}elseif ($rule=='data') {
			if ($param=='email') {
				$a = $db->get('user',[
					'email'
				],[
					'id_user' => $_SESSION['id_user']
				]);
			}elseif ($param=='nohp') {
				$a = $db->get('data_diri',[
					'no_hp'
				],[
					'id_user' => $_SESSION['id_user']
				]);
			}
			
		}
		return $a;
	}

	function addPrestasi($data){
		global $db;
		$a = $db->insert('prestasi',[
			'id_user' => $_SESSION['id_user'],
			'pretasi' => $data['prestasi'],
			'lampiran' => $data['lampiran'],
		]);

		return;
	}

	function editPrestasi($data){
		global $db;
		$a = $db->update('prestasi',[
			'id_user' => $_SESSION['id_user'],
			'pretasi' => $data['prestasi'],
			'lampiran' => $data['lampiran'],
		],[
			'id_pretasi' => $data['id']
		]);

		return;

	}

	function delPrestasi($data){
		global $db;
		$a = $db->delete('prestasi',[
			'id_pretasi' => $data['id']
		]);

		return;

	}

	function getPass($pass){
		global $db;
		$a = $db->select('user',[
			'pass'
		],[
			'id_user' => $_SESSION['id_user'],
			'pass' => $pass
		]);

		return $a;
	}

	function editPass($pass){
		global $db;
		$a = $db->update('user',[
			'pass' => $pass
		],[
			'id_user' => $_SESSION['id_user']
		]);

		return;
	}

	function manageUser(){
		global $db;
		$a = $db->select('data_diri',[
			'[>]user' => ['id_user' => 'id_user'],
			'[>]data_siswa' => ['id_user' => 'id_user'] 
		],[
			'user.username',
			'user.email',
			'user.role',
			'user.status',
			'data_diri.nama',
			'data_diri.jk',
			'data_diri.nisn',
			'data_diri.nis',
			'data_diri.tp_lahir',
			'data_diri.tg_lahir',
			'data_diri.alamat',
			'data_diri.no_hp',
			'data_diri.asal_sekolah',
			'data_diri.id_jurusan_1',
			'data_diri.id_jurusan_2',
			'data_diri.pas_foto',
			'data_diri.lampiran',
			'data_diri.no_pendaftaran',
			'data_diri.jalur',
			'data_diri.asal_sekolah',
			'data_siswa.tahun_masuk',
			'data_siswa.anak_ke',
			'data_siswa.jumlah_saudara',
			'data_siswa.agama',
			'data_siswa.cita_cita',
			'data_siswa.hobi',
			'data_siswa.status_tinggal',
			'data_siswa.provinsi',
			'data_siswa.kec',
			'data_siswa.kab',
			'data_siswa.desa',
			'data_siswa.koor_alamat',
			'data_siswa.kode_pos',
			'data_siswa.trasportasi',
			'data_siswa.jarak',
			'data_siswa.waktu',
			'data_siswa.yang_membiayai',
			'data_siswa.keb_khusus',
			'data_siswa.keb_disabiltas',
			'data_siswa.prasekolah',
			'data_siswa.imunisasi',
			'data_siswa.no_kip',
			'data_siswa.no_kk',
			'data_siswa.kep_keluarga',
			'data_siswa.kk',
			'data_siswa.kip'

		]);

		return;
	}






 ?>