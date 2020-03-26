<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idmerek=$_GET['id_merek'];
	$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_merek WHERE id_merek='$idmerek'");

	$hasilQuery=mysqli_fetch_array($queryEdit);
		$idmerek=$hasilQuery['id_merek'];
	$namamerek=$hasilQuery['nama_merek'];
?>

<section class="content-header">
  <h1>
    Edit merek
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> merek</a></li>
    <li class="active">Edit merek</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/merek/aksi_edit.php" method="post">
				<div class="box-body">
					<div class="form-group">
						<label for="inputEmail13" class="col-sm-2 control-label">Nama merek</label>
						<div class="col-sm-10">
							<input type="hidden" name="id_merek" value="<?=$idmerek?>">
							<input type="text" class="form-control" id="nama_merek" name="nama_merek" placeholder="Nama merek" value="<?=$namamerek?>">
						</div>
					</div>

					<div> 
						<button type="submit" class="btn btn-primary pull-right btn-sm" style="margin-left: 20px; width: 75px;"><i class="fa fa-save"></i>  Simpan</button>
						<a href="adminweb.php?module=merek" class="btn btn-danger btn-sm pull-right" style="width: 75px;"><i class="fa fa-reply"></i>  Back</a>
					</div>

				</div>
			</form>
		</div>
 	</div>

</section>