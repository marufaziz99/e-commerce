<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idKurir=$_GET['id_kurir'];
	$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_kurir WHERE id_kurir='$idKurir'");

	$hasilQuery=mysqli_fetch_array($queryEdit);
		$idKurir=$hasilQuery['id_kurir'];
	$namaKurir=$hasilQuery['nama_kurir'];
?>

<section class="content-header">
  <h1>
    Edit Kurir
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> Kurir</a></li>
    <li class="active">Edit Kurir</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/kurir/aksi_edit.php" method="post">
				<div class="box-body">
					<div class="form-group">
						<label for="inputEmail13" class="col-sm-2 control-label">Nama Kurir</label>
						<div class="col-sm-10">
							<input type="hidden" name="id_kurir" value="<?=$idKurir?>">
							<input type="text" class="form-control" id="nama_kurir" name="nama_kurir" placeholder="Nama Kurir" value="<?=$namaKurir?>">
						</div>
					</div>

					<div> 
						<button type="submit" class="btn btn-primary pull-right btn-sm" style="margin-left: 20px; width: 75px;"><i class="fa fa-save"></i>  Simpan</button>
						<a href="adminweb.php?module=kurir" class="btn btn-danger btn-sm pull-right" style="width: 75px;"><i class="fa fa-reply"></i>  Back</a>
					</div>

				</div>
			</form>
		</div>
 	</div>

</section>