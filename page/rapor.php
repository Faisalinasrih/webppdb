<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Nama Siswa</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Nilai Rapor</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mata Pelajaran</th>
                                            <th>Semester 1</th>
                                            <th>Semester 2</th>
                                            <th>Semester 3</th>
                                            <th>Semester 4</th>
                                            <th>Semester 5</th>
                                            <th>Total</th>
                                            <th>Rerata</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($datanilai as $nilai) {
                                                # code...
                                         ?>
                                        <tr>
                                            <td><?= filter($nilai['mapel']); ?></td>
                                            <td><?= filter(getRapor($nilai['id_mapel'],'1')['nilai']); ?></td>
                                            <td><?= filter(getRapor($nilai['id_mapel'],'2')['nilai']); ?></td>
                                            <td><?= filter(getRapor($nilai['id_mapel'],'3')['nilai']); ?></td>
                                            <td><?= filter(getRapor($nilai['id_mapel'],'4')['nilai']); ?></td>
                                            <td><?= filter(getRapor($nilai['id_mapel'],'5')['nilai']); ?></td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                        </tr>

                                        <?php 
                                            }
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                            <a href="<?= BASEURL.'/app/panel.php?page=edit-nilai'; ?>" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Edit Data Rapor</a>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<?php 