<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idKota=$_GET['id_kota'];
	$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_kota WHERE id_kota='$idKota'");

	$hasilQuery=mysqli_fetch_array($queryEdit);
		$idKota=$hasilQuery['id_kota'];
	$namaKota=$hasilQuery['nama_kota'];
?>

<section class="content-header">
  <h1>
    Edit Kota
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> Kota</a></li>
    <li class="active">Edit Kota</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/kota/aksi_edit.php" method="post">
				<div class="box-body">
					<div class="form-group">
						<label for="inputEmail13" class="col-sm-2 control-label">Nama Kota</label>
						<div class="col-sm-10">
							<input type="hidden" name="id_kota" value="<?=$idKota?>">
							<input type="text" class="form-control" id="nama_kota" name="nama_kota" placeholder="Nama Kota" value="<?=$namaKota?>">
						</div>
					</div>

					<div> 
						<button type="submit" class="btn btn-primary pull-right btn-sm" style="margin-left: 20px; width: 75px;"><i class="fa fa-save"></i>  Simpan</button>
						<a href="adminweb.php?module=kota" class="btn btn-danger btn-sm pull-right" style="width: 75px;"><i class="fa fa-reply"></i>  Back</a>
					</div>

				</div>
			</form>
		</div>
 	</div>

</section>