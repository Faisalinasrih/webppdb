<!-- Begin Page Content -->
         <div class="container-fluid">
         	<?php 
         		if ($pres==null) {
         			echo '<script type="text/javascript">
    				window.location.href = "'.BASEURL.'/app/panel.php?page=prestasi-siswa'.'";
					</script>';    
        			exit;

         		}
         	 ?>

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Edit Prestasi</h1>
	            <div class="p-5">
	            	<form action="<?= BASEURL.'/app/editprestasi.php' ?>" method="post" enctype='multipart/form-data' class="user">
		            	<div class="form-group row">
		            		<div class="col-sm-6 mb-3 mb-sm-0">
		            			<label for="exampleFormControlSelect1 pl-3">Prestasi</label>
		            			<input type="text" name="pres" class="form-control form-control-solid" id="nik" value="<?= filter($pres['pretasi']); ?>">
		            			<input type="hidden" name="id" value="<?= filter($pres['id_pretasi']); ?>">
		            		</div>
				            <div class="col-sm-6 mb-3 mb-sm-0">
                                  <label for="formFile" class="form-label">Upload Bukti Prestasi</label>
                                  <input name="lampir" class="form-control" type="file" id="formFile">
                                  <a style="margin-top: 2%" href="<?= BASEURL.'/assets/img/piagam'.$pres['lampiran']; ?>">cek file upload</a>

                            </div>
			            </div>
			            <button type="submit" href="rekapitulasi.php" class="btn btn-success mt-3"><i class="fa fa-save"></i> Simpan Data Prestasi</button>
		            </form>
		        </div>
		    </div>
      
         <!-- /.container-fluid -->