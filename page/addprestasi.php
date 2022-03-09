<!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tambah Prestasi</h1>
	            <div class="p-5">
	            	<form action="<?= BASEURL.'/app/addprestasi.php' ?>" method="post" enctype='multipart/form-data' class="user">
		            	<div class="form-group row">
		            		<div class="col-sm-6 mb-3 mb-sm-0">
		            			<label for="exampleFormControlSelect1 pl-3">Prestasi</label>
		            			<input type="text" name="prestasi" class="form-control form-control-solid" id="nik" placeholder="Detail Prestasi" required="">
		            		</div>
				            <div class="col-sm-6 mb-3 mb-sm-0">
                                  <label for="formFile" class="form-label">Upload Bukti Prestasi</label>
                                  <input name="piagam" class="form-control" type="file" id="formFile" required="">
                            </div>
			            </div>
			            <button type="submit" class="btn btn-success mt-3"><i class="fa fa-save"></i> Simpan Data Prestasi</button>
		            </form>
		        </div>
         </div>
         <!-- /.container-fluid -->