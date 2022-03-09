        <?php 
            // var_dump($pengumumanlulus);
         ?>

        <?php 
            if ($filterlulus['status'] == '0') {
         ?>
        <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Pengumuman Hasil Seleksi</h1>

            <div class="p-5">
	            <div class="card mb-2 mt-2 py-3 border-bottom-success">
                    <div class="card-body">
	            		<p class="h4 mb-2 mt-2 text-gray-800 text-center font-weight-bold">PENGUMUMAN HASIL SELEKSI </br> PENERIMAAN PESERTA DIDIK BARU MAN 1 KOTA BENGKULU</br><?= date('d-m-Y') ?></p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">Kepada Calon Siswa / Siswi MAN 1 Kota Bengkulu</p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">Atas Nama</p>
	            		<p class="h5 mb-2 mt-2 text-gray-800 text-center font-weight-bold"><?= filter($pengumumanlulus[0]['nama']); ?></p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">NISN</p>
	            		<p class="h5 mb-2 mt-2 text-gray-800 text-center font-weight-bold"><?= filter($pengumumanlulus[0]['nisn']); ?></p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">Pengumuman <b>BELUM TERSEDIA</b></p>
		        	</div>
             	</div>
            </div>
	            
         </div>
         <!-- end page conten -->

         <?php 
            }elseif ($filterlulus['status'] == '1') {
                # code...
        
          ?>

         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Pengumuman Hasil Seleksi</h1>

            <div class="p-5">
	            <div class="card mb-2 mt-2 py-3 border-bottom-success">
                    <div class="card-body">
	            		<p class="h4 mb-2 mt-2 text-gray-800 text-center font-weight-bold">PENGUMUMAN HASIL SELEKSI </br> PENERIMAAN PESERTA DIDIK BARU MAN 1 KOTA BENGKULU</br><?= date('d-m-Y') ?></p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">Kepada Calon Siswa / Siswi MAN 1 Kota Bengkulu</p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">Atas Nama</p>
	            		<p class="h5 mb-2 mt-2 text-gray-800 text-center font-weight-bold"><?= filter($pengumumanlulus[0]['nama']); ?></p>
                        <p class="h6 mb-2 mt-2 text-gray-800 text-center">NISN</p>
                        <p class="h5 mb-2 mt-2 text-gray-800 text-center font-weight-bold"><?= filter($pengumumanlulus[0]['nisn']); ?></p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">dinyatakan <b>LULUS</b> sebagai Siswa / Siswi Baru MAN 1 Kota Bengkulu</p>
		        	</div>
		        	<div class="col" style="text-align: center;">
		        				<div class="my-2"></div>
                                    <a href="cetakplulus.php" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-print"></i>
                                        </span>
                                        <span class="text">Cetak Bukti Kelulusan</span>
                                    </a>
                    </div>
             	</div>
            </div>
	            
         </div>
         <!-- end page conten -->

         <?php 
            }elseif ($filterlulus['status'] == '2') {
          ?>

         <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Pengumuman Hasil Seleksi</h1>

            <div class="p-5">
	            <div class="card mb-2 mt-2 py-3 border-bottom-success">
                    <div class="card-body">
	            		<p class="h4 mb-2 mt-2 text-gray-800 text-center font-weight-bold">PENGUMUMAN HASIL SELEKSI </br> PENERIMAAN PESERTA DIDIK BARU MAN 1 KOTA BENGKULU</br><?= date('d-m-Y') ?></p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">Kepada Calon Siswa / Siswi MAN 1 Kota Bengkulu</p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">Atas Nama</p>
	            		<p class="h5 mb-2 mt-2 text-gray-800 text-center font-weight-bold"><?= filter($pengumumanlulus[0]['nama']); ?></p>
                        <p class="h6 mb-2 mt-2 text-gray-800 text-center">NISN</p>
                        <p class="h5 mb-2 mt-2 text-gray-800 text-center font-weight-bold"><?= filter($pengumumanlulus[0]['nisn']); ?></p>
	            		<p class="h6 mb-2 mt-2 text-gray-800 text-center">dinyatakan <b>BELUM LULUS</b> sebagai Siswa / Siswi Baru MAN 1 Kota Bengkulu</p>
		        	</div>
             	</div>
            </div>
	            
         </div>

         <?php 
            }
          ?>
         <!-- end page conten -->