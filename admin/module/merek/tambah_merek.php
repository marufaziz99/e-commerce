<section class="content-header">
  <h1>
    Tambah merek
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> merek</a></li>
    <li class="active">Tambah merek</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">

			<form class="form-horizontal" action="../admin/module/merek/aksi_simpan.php" method="post">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama merek</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="namamerek" name="namamerek" placeholder="Nama merek">
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