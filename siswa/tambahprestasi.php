<?php 

	include "header.php"; 

?>


<body id="page-top">

	<!-- Page Wrapper -->
    <div id="wrapper">

    	<?php 

    		include "menu.php";

    	 ?>


    	 <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tambah Prestasi</h1>
	            <div class="p-5">
	            	<form class="user">
		            	<div class="form-group row">
		            		<div class="col-sm-6 mb-3 mb-sm-0">
		            			<label for="exampleFormControlSelect1 pl-3">Prestasi</label>
		            			<input type="text" class="form-control form-control-solid" id="nik" placeholder="Detail Prestasi">
		            		</div>
				            <div class="col-sm-6 mb-3 mb-sm-0">
                                  <label for="formFile" class="form-label">Upload Bukti Prestasi</label>
                                  <input class="form-control" type="file" id="formFile">
                            </div>
			            </div>
			            <a href="rekapitulasi.php" class="btn btn-success mt-3"><i class="fa fa-plus"></i> Tambah Data Prestasi</a>
		            </form>
		        </div>
         </div>
         <!-- /.container-fluid -->



    

<?php 

	include "footer.php";

 ?>