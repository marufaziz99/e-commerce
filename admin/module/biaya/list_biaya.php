<section class="content-header">
  <h1>
    Manajemen Biaya Kirim
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Biaya Kirim</li>
  </ol>
</section>


<section class="content">
      <!-- Small boxes (Stat box) -->
  
<div class="box-body table-responsive no-padding">
	<table class="table table-hover">
		<h4>Data Biaya Kirim</h4>
		<tr>
			<th>No</th>
			<th>Kota</th>
			<th>Kurir</th>
			<th>Biaya</th>
			<th style="width: 110px">Aksi</th>
		</tr>
			<?php
				$no = 1;
				include "../lib/config.php";
				include "../lib/koneksi.php";

				$kueriBiaya= mysqli_query($koneksi, "SELECT * FROM tbl_biaya_kirim JOIN tbl_kota ON tbl_biaya_kirim.id_kota = tbl_kota.id_kota JOIN tbl_kurir ON tbl_biaya_kirim.id_jasa = tbl_kurir.id_kurir");

				while ($bia=mysqli_fetch_array($kueriBiaya)) {
					?>

		<tr>
			<td><?=$no++?></td>
			<td><?=$bia['nama_kota']?></td>
			<td><?=$bia['nama_kurir']?></td>
			<td><?=$bia['biaya']?></td>
			</td>
			<td>
				<div class="btn-group">
					<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_biaya&id_biaya_kirim=<?php echo $bia['id_biaya_kirim']; ?>"
						class="btn btn-warning"> <i class='fa fa-pencil'></i></button></a>
					<a href="<?php echo $admin_url; ?>module/biaya/aksi_hapus.php?id_biaya_kirim=<?=$bia['id_biaya_kirim']?>"
						onClick="return confirm('Anda Yakin ingin Mengahpus Data ini?')" class="btn btn-danger"><i class='fa fa-power-off'></i></button></a>
				</div>
			</td>
		</tr>
	<?php			} ?>

	</table>

	<a href="adminweb.php?module=tambah_biaya" class="btn btn-primary btn-sm">
    		<i class="fa fa-plus"></i> 
    		Tambah Biaya Kirim
    	</a>
</div><!-- /.box-body -->
</section>


