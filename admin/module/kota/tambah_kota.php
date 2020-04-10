<section class="content-header">
  <h1>
    Tambah Kota
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> Kota</a></li>
    <li class="active">Tambah Kota</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/kota/aksi_simpan.php" method="post">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama Kota</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="namaKota" name="namaKota" placeholder="Nama Kota">
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