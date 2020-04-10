<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$id_biaya_kirim=$_GET['id_biaya_kirim'];
	$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_biaya_kirim WHERE id_biaya_kirim='$id_biaya_kirim'");

	$hasilQuery=mysqli_fetch_array($queryEdit);
	$id_kota = $hasilQuery['id_kota'];
	$id_kurir = $hasilQuery['id_jasa'];
	$biaya = $hasilQuery['biaya'];
?>

<section class="content-header">
  <h1>
    Edit biaya kirim
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i>biaya_kirim</a></li>
    <li class="active">Edit biaya kirim</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/biaya/aksi_edit.php" method="post">
				<div class="box-body">
					<h4> Form Edit Biaya Kirim </h4>
					<input type="hidden" name="id_biaya_kirim" value="<?=$id_biaya_kirim?>">
					<div class="form-group">
						<label for="inputEmail3"class="col-sm-2 control-label">Kota</label>
						<div class="col-sm-10">
							<select class="form-control" name="idkota" required>
								<option value="">-- Pilih Kota --</option>
								<?php
										include "../lib/koneksi.php";
											$kueriKota=mysqli_query($koneksi, "select * from tbl_kota");
												while($ko=mysqli_fetch_array($kueriKota)) {
								?>

								<option value="<?php echo $ko['id_kota']; ?>" <?=($ko['id_kota'] == $id_kota ? 'selected' : '')?> ><?php echo $ko['nama_kota'];?></option>

							<?php } ?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3"class="col-sm-2 control-label">Kurir</label>
						<div class="col-sm-10">
							<select class="form-control" name="idkurir" required>
								<option value="">-- Pilih Jasa --</option>
								<?php
										include "../lib/koneksi.php";
											$kueriKurir=mysqli_query($koneksi, "select * from tbl_kurir");
												while($kur=mysqli_fetch_array($kueriKurir)) {
								?>

								<option value="<?php echo $kur['id_kurir']; ?>" <?=($kur['id_kurir'] == $id_kurir ? 'selected' : '')?> ><?php echo $kur['nama_kurir'];?></option>

							<?php } ?>
						</select>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Biaya</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="biaya" name="biaya" placeholder="Biaya Kirim" value="<?=$biaya?>" required>
					</div>

					</div><!-- /.box-body -->
					<div> 
						<button type="submit" class="btn btn-primary pull-right"> Simpan </button>
					</div><!-- /.box-footer -->
				</div>
			</form>
		</div>
 	</div>

</section>