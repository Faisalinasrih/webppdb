<!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Ubah Password</h1>
	            <div class="p-5">
	            	<?php showNotif(); ?>
	            	<form class="user" action="<?= BASEURL.'/app/editpass.php' ?>" method="post" enctype='multipart/form-data'>
		            	<div class="form-group row">
		            		<div class="col-sm-6 mb-3 mb-sm-0">
		            			<label for="exampleFormControlSelect1 pl-3">Password Lama</label>
		            			<input name="plama" type="password" value="" class="form-control form-control-solid" placeholder="Password Lama" required="">
		            		</div>
				            <div class="col-sm-6 mb-3 mb-sm-0">
                                  <label for="formFile" class="form-label">Password Baru</label>
                                  <input name="pbaru" type="password" value="" class="form-control form-control-solid" placeholder="Password Baru" required="">
                            </div>
			            </div>
			            <button type="submit" class="btn btn-success mt-3"><i class="fa fa-save"></i> Simpan Password</button>
		            </form>
		        </div>
         </div>
         <!-- /.container-fluid -->