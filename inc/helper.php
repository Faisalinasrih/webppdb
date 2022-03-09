<?php 
	
	session_start();
	require_once ('PHPMailer.php');
	function filter($param){
		$a = htmlspecialchars($param, ENT_QUOTES,'UTF-8');
		return $a;
	}

	function kirimNotif($rule,$param){
		$_SESSION['att']=$rule;
		$_SESSION['pesan']=$param;
		return;
	}

	function showNotif(){
		if (isset($_SESSION['pesan']) && $_SESSION['pesan']<>'') {
			echo '

			<div class="alert '.$_SESSION['att'].' alert-dismissible fade show" role="alert">'.$_SESSION['pesan'].
  				'<button type="button" class="close" data-dismiss="alert" aria-hiden="true">X</button>

			</div>

		';
		}
		
		$_SESSION['att']='';
		$_SESSION['pesan']='';
	}

	function kirimToken($token,$url){
		$nama=$token['nama'];
		$email=$token['email'];
		$token=$token['token'];
		$link=$url.'?token='.$token;
		


		$pesan = '
			Assalamualaikum wr wb<br>
			kepada ananda '.$nama.' berikut link untuk aktifasi akun, silahkan klik link di bawah ini.
		'.'<a hreff="'.$link.'"> klik di sini untuk aktivasi akun</a>';
		// kirimEmail($pesa);
	}

	function kirimEmail($pesan,$email){
		$mail = new PHPMailer(true);
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'user@example.com';                     //SMTP username
	    $mail->Password   = 'secret';                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	    //Recipients
	    $mail->setFrom('ppdb@man1modelbengkulu.sch.id', 'Panitia PPDB');
	    $mail->addAddress($email);     //Add a recipient

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'Aktivasi Akun';
	    $mail->Body    = $pesan;
	    $mail->send();

	    return;
	}

	function Timer($waktuawal,$waktusekarang){
		$awal = strtotime($waktuawal);
		$now = strtotime($waktusekarang);
		$div = $now-$awal;
		$jam = floor($div / (60*60));
		$menit = $div - ($jam * (60*60));
		$waktu = floor($menit/60);
		return $waktu;
	}