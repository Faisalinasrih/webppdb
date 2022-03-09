<?php 
    require_once ('../inc/config.php');
    require_once ('../inc/helper.php');
    require_once ('../inc/database.php');

    $datauser = User($_SESSION['id_user']);
    // var_dump($datauser);
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Siswa / Siswi Baru MAN 1 Kota Bengkulu</title>
</head>
<body>
 
  <center>
    <img src="../assets/img/kopman.png">
    <h3 style="margin-bottom: -1%; margin-top: 0%">DATA IDENTITAS SISWA BARU <br>MADRASAH ALIYAH NEGERI 1 KOTA BENGKULU</h3>
  </center>
    <br/>
    <div style="margin-left: 5%; margin-right: 5%">
      <p>
        <h3>Data Siswa</h3>
      </p>
       <table  style="border-collapse: collapse; width: 100%; margin-left: 2%; margin-top: -2%">
         <tr>
           <td style="width: 25%">Nama Lengkap</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['nama']); ?></td>
           <td rowspan="8" style="width: 20%; text-align: center;"><img style="width: 10rem;" src="<?= BASEURL.'/assets/img/pasfoto'.$datauser[0]['pas_foto'] ?>" alt="..."></td>
         </tr>  
         <tr>
           <td style="width: 25%">Jenis Kelamin</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?php if ($datauser[0]['jk'] == 'P'){echo'Perempuan';} elseif($datauser[0]['jk']=='L'){echo'Laki - Laki';} ?></td>
         </tr>  
         <tr>
           <td style="width: 25%">NISN</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['nisn']); ?></td>
         </tr>  
         <tr>
           <td style="width: 25%">NIS</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['nis']); ?></td>
         </tr>  
         <tr>
           <td style="width: 25%; vertical-align: top">Tempat & Tanggal Lahir</td>
           <td style="width: 5%; vertical-align: top;">:</td>
           <td style="width: 50%; vertical-align: top"><?= filter($datauser[0]['tp_lahir']); ?> / <?= filter($datauser[0]['tg_lahir']); ?></td>
         </tr>  
         <tr>
           <td style="width: 25%">Alamat</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['alamat']); ?></td>
         </tr> 
         <tr>
           <td style="width: 25%">Kelurahan / Desa</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['desa']); ?></td>
         </tr> 
         <tr>
           <td style="width: 25%">Kecamatan</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['kec']); ?></td>
         </tr>    
         <tr>
           <td style="width: 25%">Kabupaten</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['kab']); ?></td>
         </tr>    
         <tr>
           <td style="width: 25%">Provinsi</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['provinsi']); ?></td>
         </tr>
         <tr>
           <td style="width: 25%">Koordinat Alamat</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['koor_alamat']); ?></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kode Pos</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['kode_pos']); ?></td>
         </tr>      
         <tr>
           <td style="width: 25%">Asal Sekolah</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"><?= filter($datauser[0]['asal_sekolah']); ?></td>
         </tr>       
         <tr>
           <td style="width: 25%">Anak Ke</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">1</td>
         </tr>    
         <tr>
           <td style="width: 25%">Jumlah Saudara</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">1</td>
         </tr>    
         <tr>
           <td style="width: 25%">Agama</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Islam</td>
         </tr>    
         <tr>
           <td style="width: 25%">Cita - Cita</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Manjadi Dewa Asgard</td>
         </tr>    
         <tr>
           <td style="width: 25%; vertical-align: top">No Handphone / Whatsapp</td>
           <td style="width: 5%; vertical-align: top">:</td>
           <td style="width: 50%; vertical-align: top">082282508526</td>
         </tr>    
         <tr>
           <td style="width: 25%">Email</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Harussarjana10@gmail.com</td>
         </tr>    
         <tr>
           <td style="width: 25%">Hobi</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Menyendiri</td>
         </tr>    
         <tr>
           <td style="width: 25%">Status Tempat Tinggal</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Ngekos</td>
         </tr>    
         <tr>
           <td style="width: 25%">Transportasi Kesekolah</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Pajero Sport Roda 2</td>
         </tr>  
         <tr>
           <td style="width: 25%; vertical-align: top;">Jarak dari Tempat Tinggak - Madrasah</td>
           <td style="width: 5%; vertical-align: top;">:</td>
           <td style="width: 50%; vertical-align: top;">1.000.000 Tahun Cahaya</td>
         </tr> 
         <tr>
           <td style="width: 25%">Waktu Tempuh</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">1 Second</td>
         </tr>
         <tr>
           <td style="width: 25%">Yang Membiayai Sekolah</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Harta Lord Asgard</td>
         </tr>    
         <tr>
           <td style="width: 25%">Kebutuhan Khusus</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Tidak ada</td>
         </tr>  
         <tr>
           <td style="width: 25%">Kebutuhan Disabilitas</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Tidak ada</td>
         </tr>  
         <tr>
           <td style="width: 25%">Pra Sekolah</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">TK</td>
         </tr>  
         <tr>
           <td style="width: 25%">Imunisasi</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Campak</td>
         </tr> 
         <tr>
           <td style="width: 25%">Nomor KIP</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Tidak ada</td>
         </tr>   
         <tr>
           <td style="width: 25%">Nomor Kartu Keluarga</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Tidak ada</td>
         </tr>  
         <tr>
           <td style="width: 25%">Kepala Keluarga</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Lord Asgard</td>
         </tr>  
         <tr>
           <td style="width: 25%">Kebutuhan Khusus</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%">Tidak ada</td>
         </tr>  
       </table>
      <p>
        <h3>Data Ayah Kandung</h3>
      </p>
      <table  style="border-collapse: collapse; width: 100%; margin-left: 2%; margin-top: -2%">
         <tr>
           <td style="width: 25%">Nama Lengkap</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Tempat Lahir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Tanggal Lahir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Pendidikan Terakhir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%;">Pekerjaan Utama</td>
           <td style="width: 5%; ">:</td>
           <td style="width: 50%;"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Penghasilan Perbulan</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr> 
         <tr>
           <td style="width: 25%; vertical-align: top;">Nomor Handphone</td>
           <td style="width: 5%; vertical-align: top;">:</td>
           <td style="width: 50%; vertical-align: top;"></td>
         </tr> 
         <tr>
           <td style="width: 25%">Alamat Jika Diluar Negeri</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>    
         <tr>
           <td style="width: 25%">Status Tempat Tinggal</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>    
         <tr>
           <td style="width: 25%">Provinsi</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>
         <tr>
           <td style="width: 25%">Kabupeten / Kota</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kecamatan</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kelurahan / Desa</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Alamat</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kode Pos</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>       
       </table>
       <p>
        <h3>Data Ibu Kandung</h3>
      </p>
      <table  style="border-collapse: collapse; width: 100%; margin-left: 2%; margin-top: -2%">
         <tr>
           <td style="width: 25%">Nama Lengkap</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Tempat Lahir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Tanggal Lahir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Pendidikan Terakhir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%;">Pekerjaan Utama</td>
           <td style="width: 5%; ">:</td>
           <td style="width: 50%;"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Penghasilan Perbulan</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr> 
         <tr>
           <td style="width: 25%; vertical-align: top;">Nomor Handphone</td>
           <td style="width: 5%; vertical-align: top;">:</td>
           <td style="width: 50%; vertical-align: top;"></td>
         </tr> 
         <tr>
           <td style="width: 25%">Alamat Jika Diluar Negeri</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>    
         <tr>
           <td style="width: 25%">Status Tempat Tinggal</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>    
         <tr>
           <td style="width: 25%">Provinsi</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>
         <tr>
           <td style="width: 25%">Kabupeten / Kota</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kecamatan</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kelurahan / Desa</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Alamat</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kode Pos</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>       
       </table>
       <p>
        <h3>Data Wali</h3>
      </p>
      <table  style="border-collapse: collapse; width: 100%; margin-left: 2%; margin-top: -2%">
         <tr>
           <td style="width: 25%">Nama Lengkap</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Tempat Lahir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Tanggal Lahir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Pendidikan Terakhir</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>  
         <tr>
           <td style="width: 25%;">Pekerjaan Utama</td>
           <td style="width: 5%; ">:</td>
           <td style="width: 50%;"></td>
         </tr>  
         <tr>
           <td style="width: 25%">Penghasilan Perbulan</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr> 
         <tr>
           <td style="width: 25%; vertical-align: top;">Nomor Handphone</td>
           <td style="width: 5%; vertical-align: top;">:</td>
           <td style="width: 50%; vertical-align: top;"></td>
         </tr> 
         <tr>
           <td style="width: 25%">Alamat Jika Diluar Negeri</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>    
         <tr>
           <td style="width: 25%">Status Tempat Tinggal</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>    
         <tr>
           <td style="width: 25%">Provinsi</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>
         <tr>
           <td style="width: 25%">Kabupeten / Kota</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kecamatan</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kelurahan / Desa</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Alamat</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>   
         <tr>
           <td style="width: 25%">Kode Pos</td>
           <td style="width: 5%">:</td>
           <td style="width: 50%"></td>
         </tr>       
       </table>
       <br>
       <br>
       <p>
        <table style="text-align: center; width: 100%">
          <tr>
            <td style="width: 50%"></td>
            <td style="width: 50%">Mengetahui<br>Bengkulu, ..........................<br></td>
          </tr>
          <tr>
            <td></td>
            <td style="width: 10%;">Kepala Madrasah<br><br><br><br>Faisal Abdul Aziz, M.Ag</td>
          </tr>
          <tr>
            <td></td>
            <td>NIP. 197405071999031004</td>
          </tr>
        </table>
      </p>

    </div>
  <script>
    window.print();
  </script>
  
</body>
</html>