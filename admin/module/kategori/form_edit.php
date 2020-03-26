<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idKategori=$_GET['id_kategori'];
	$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori='$idKategori'");

	$hasilQuery=mysqli_fetch_array($queryEdit);
		$idKategori=$hasilQuery['id_kategori'];
	$namaKategori=$hasilQuery['nama_kategori'];
?>

<section class="content-header">
  <h1>
    Edit Kategori
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> Kategori</a></li>
    <li class="active">Edit Kategori</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/kategori/aksi_edit.php" method="post">
				<div class="box-body">
					<div class="form-group">
						<label for="inputEmail13" class="col-sm-2 control-label">Nama Kategori</label>
						<div class="col-sm-10">
							<input type="hidden" name="id_kategori" value="<?=$idKategori?>">
							<input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" value="<?=$namaKategori?>">
						</div>
					</div>

					<div> 
						<button type="submit" class="btn btn-primary pull-right btn-sm" style="margin-left: 20px; width: 75px;"><i class="fa fa-save"></i>  Simpan</button>
						<a href="adminweb.php?module=kategori" class="btn btn-danger btn-sm pull-right" style="width: 75px;"><i class="fa fa-reply"></i>  Back</a>
					</div>

				</div>
			</form>
		</div>
 	</div>

</section>