<section class="content-header">
  <h1>
    Manajemen Biaya Kirim
</h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tambah Biaya Kirim</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/biaya/aksi_simpan.php" method="post" enctype="multipart/form-data">
				<div class="box-body">
					<h4> Form Tambah Biaya Kirim </h4>
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

								<option value="<?php echo $ko['id_kota']; ?>"><?php echo $ko['nama_kota'];?></option>

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

								<option value="<?php echo $kur['id_kurir']; ?>"><?php echo $kur['nama_kurir'];?></option>

							<?php } ?>
						</select>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Biaya</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="biaya" name="biaya" placeholder="Biaya Kirim" required>
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