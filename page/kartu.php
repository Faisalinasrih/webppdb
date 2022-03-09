<!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 text-gray-800">Cetak Kartu Seleksi PPDB Online</h1>

            <div class="p-3">
                <div class="card mb-2 mt-2 py-3 border-bottom-success">
                    <div class="card-body">
                        <p class="h4 mb-2 mt-2 text-gray-800 text-center font-weight-bold">KARTU SELEKSI</br> PENERIMAAN PESERTA DIDIK BARU MAN 1 KOTA BENGKULU</br><?= date('d-m-Y') ?></p>
                        <p class="h6 mb-2 mt-2 text-gray-800 text-center">Atas Nama</p>
                        <p class="h5 mb-2 mt-2 text-gray-800 text-center font-weight-bold"><?= filter($kartu[0]['nama']); ?></p>
                        <p class="h6 mb-2 mt-2 text-gray-800 text-center">NISN</p>
                        <p class="h5 mb-2 mt-2 text-gray-800 text-center font-weight-bold"><?= filter($kartu[0]['nisn']); ?></p>
                    </div>
                    <div class="col" style="text-align: center;">
                                <div class="my-2"></div>
                                    <a href="../page/cetakkartu.php" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-print"></i>
                                        </span>
                                        <span class="text">Cetak Kartu Seleksi</span>
                                    </a>
                    </div>
                </div>
            </div>
                
         </div>
         <!-- end page conten -->