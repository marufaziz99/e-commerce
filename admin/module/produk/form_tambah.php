<section class="content-header">
  <h1>
    Tambah Produk
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> Produk</a></li>
    <li class="active">Tambah Produk</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/produk/aksi_simpan.php" method="post" enctype="multipart/form-data">
				<div class="box-body">
					<div class="form-group">
						<label for="inputEmail3"class="col-sm-2 control-label">Kategori</label>
						<div class="col-sm-10">
							<select class="form-control" name="idKategori"><

								<?php
										include "../lib/koneksi.php";
											$kueriKategori=mysqli_query($koneksi, "select * from tbl_kategori");
												while($kat=mysqli_fetch_array($kueriKategori)) {
								?>

								<option value="<?php echo $kat['id_kategori']; ?>"><?php echo $kat['nama_kategori'];?></option>

							<?php } ?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3"class="col-sm-2 control-label">Merek</label>
						<div class="col-sm-10">
							<select class="form-control" name="idMerek"><

								<?php
										include "../lib/koneksi.php";
											$kueriMerek=mysqli_query($koneksi, "select * from tbl_merek");
												while($mer=mysqli_fetch_array($kueriMerek)) {
								?>

								<option value="<?php echo $mer['id_merek']; ?>"><?php echo $mer['nama_merek'];?></option>

							<?php } ?>
						</select>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk">
					</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"> Gambar </label>
						<div class="col-sm-10">
							<input type="file" id="gambar" name="gambar">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"> Deskripsi Produk
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk" placeholder="Deskripsi Produk">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Harga Produk</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Harga Produk">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Slide</label>
						<div class="col-sm-10">
							<div class="radio">
								<label>
									<input type="radio" name="slide" id="slide" value="Y">
									Ya
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="slide" id="slide" value="N">
									Tidak
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Produk Rekomendasi</label>
						<div class="col-sm-10">
							<div class="radio">
								<label>
									<input type="radio" name="rekomendasi" id="rekomendasi" value="Y">
									Ya
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="rekomendasi" id="rekomendasi" value="N">
									Tidak
								</label>
							</div>
						</div>
					</div>

					</div><!-- /.box-body -->
					<div class="box-footer"> 
						<button type="submit" class="btn btn-primary pull-right"> Simpan </button>
					</div><!-- /.box-footer -->
				</div>
			</form>
		</div>
 	</div>

</section>