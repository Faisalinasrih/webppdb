<?php 

    include"header.php";
 
 ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php 

            include"menu.php";

         ?>

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
                                        <tr>
                                            <td>Matematika</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                        </tr>
                                        <tr>
                                            <td>IPA</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                        </tr>
                                        <tr>
                                            <td>IPS</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                        </tr>
                                        <tr>
                                            <td>B. Indonesia</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                        </tr>
                                        <tr>
                                            <td>B. Inggris</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="editrapor.php" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Edit Data Rapor</a>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<?php 

    include "footer.php";

 ?>