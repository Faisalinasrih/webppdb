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
  <title>Cetak Kartu PPDB MAN 1 Kota Bengkulu</title>
</head>
<body>
 
  <center>
    <img src="../assets/img/kopman.png">
    <h2 style="margin-bottom: -2%; margin-top: -2px">KARTU PENDAFTARAN PPDB 2022</h2>
    <h3 style="margin-bottom: -2%;">MAN 1 KOTA BENGKULU</h4><br>
    <h3 style="margin-bottom: -2%;">Nomor Peserta: MA<?= filter($datauser[0]['no_pendaftaran']); ?></h4><br>
  </center>
    <br/>
    <div style="margin-left: 5%; margin-right: 5%">
      
        <table>
          <tr>
            <td rowspan="8" style="width: 35%;"><img style="width: 10rem;" src="<?= BASEURL.'/assets/img/pasfoto'.$datauser[0]['pas_foto'] ?>" alt="..."></td>
            <td style="width: 30%;"> NISN </td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;"><?= filter($datauser[0]['nisn']); ?></td>
          </tr>
          <tr>
            <td style="width: 30%;"> NIK </td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;"><?= filter($datauser[0]['username']); ?></td>
          </tr>
          <tr>
            <td style="width: 30%;"> Nama </td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;"><?= filter($datauser[0]['nama']); ?></td>
          </tr>
          <tr>
            <td style="width: 30%;"> Tempat / Tanggal Lahir </td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;"> <?= filter($datauser[0]['tp_lahir']); ?> / <?= filter($datauser[0]['tg_lahir']); ?></td>
          </tr>
          <tr>
            <td style="width: 30%; vertical-align: top;"> Alamat </td>
            <td style="width: 5%; vertical-align: top;">:</td>
            <td style="width: 65%;"><?= filter($datauser[0]['alamat']); ?></td>
          </tr>
          <tr>
            <td style="width: 30%;"> Asal Sekolah </td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;"><?= filter($datauser[0]['asal_sekolah']); ?></td>
          </tr>
          <tr>
            <td style="width: 30%;"> Pilihan Jurusan </td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">
              <?php if ($datauser[0]['id_jurusan_1'] == '0'){ 
                # code...
              ?>
                 Belum Tersedia
              <?php 
                 }else{
              ?>
                 <?= filter(getJurusan($datauser[0]['id_jurusan_1'])['jurusan']); ?>
              <?php 
                }
              ?> 

              &

              <?php if ($datauser[0]['id_jurusan_2'] == '0'){ 
               # code...
              ?>
                  Belum Tersedia
              <?php 
                  }else{

              ?>
                  <?= filter(getJurusan($datauser[0]['id_jurusan_2'])['jurusan']); ?>
              <?php 
                  }
              ?>



            </td>
          </tr>
          <tr>
            <td style="width: 30%;"> No Wa </td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;"><?= filter($datauser[0]['no_hp']); ?></td>
          </tr>
        </table>
      </p>
      <label>Kelengkapan Berkas :</label>
      <table border="1" style="border-collapse: collapse; width: 100%">
        <tr style="text-align: center;">
          <td style="width: 5%">No</td>
          <td style="width: 60%">Berkas</td>
          <td style="width: 35%">Kelengkapan</td>
        </tr>
        <tr>
          <td style="text-align: center; width: 5%">1</td>
          <td style="width: 60%">Print Out NISN</td>
          <td style="width: 35%; text-align: center;">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Ada</label>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2"> Tidak Ada</label><br>

          </td>
          <tr>
          <td style="text-align: center; width: 5%">2</td>
          <td style="width: 60%">Surat Keterangan Berkelakuan Baik (SKBB)</td>
          <td style="width: 35%; text-align: center;">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Ada</label>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2"> Tidak Ada</label><br>

          </td>
          <tr>
          <td style="text-align: center; width: 5%">3</td>
          <td style="width: 60%">Pas Foto 3x4 Warna 3 Lembar</td>
          <td style="width: 35%; text-align: center;">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Ada</label>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2"> Tidak Ada</label><br>

          </td>
          <tr>
          <td style="text-align: center; width: 5%">4</td>
          <td style="width: 60%">Foto Copy Rapor Semester 1 s/d 5 (dilegalisir)</td>
          <td style="width: 35%; text-align: center;">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Ada</label>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2"> Tidak Ada</label><br>

          </td>
          <tr>
          <td style="text-align: center; width: 5%">5</td>
          <td style="width: 60%">Foto Copy Kartu Keluarga</td>
          <td style="width: 35%; text-align: center;">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Ada</label>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2"> Tidak Ada</label><br>
          </td>
          <tr>
          <td style="text-align: center; width: 5%">6</td>
          <td style="width: 60%">Foto Copy Piagam Akademin / Non Akademik (Jika ada)</td>
          <td style="width: 35%; text-align: center;">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Ada</label>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2"> Tidak Ada</label><br>

          </td>
        </tr>
      </table>
      <p style="margin-bottom: -2px">
        Catatan:
        <ol style="margin-top: -2px">
          <li>Kolom di tas di isi oleh <b>TIM VERIFIKATOR</b> pada saat peserta mengumpulkan berkas pendaftaran</br></li>
          <li>Kartu Peserta PPDB <b>WAJIB</b> dibawa pada saat kegiatan seleksi / tes berlangsung</br></li>
        </ol> 
      </p>
      <p>
        <table style="text-align: center; width: 100%">
          <tr>
            <td style="width: 50%"></td>
            <td style="width: 50%">Mengetahui<br>Bengkulu, ..........................<br></td>
          </tr>
          <tr>
            <td></td>
            <td style="width: 10%;">Verifikator<br><br><br><br></td>
          </tr>
          <tr>
            <td></td>
            <td>...........................................</td>
          </tr>
        </table>
      </p>
  </div>
  <script>
    window.print();
  </script>
  
</body>
</html>

