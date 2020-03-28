<section class="content-header">
  <h1>
    Manajemen Produk
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-eye"></i> Produk</a></li>
    <li class="active">List Produk</li>
  </ol>
</section>


<section class="content">
      <!-- Small boxes (Stat box) -->
  
<div class="box-body table-responsive no-padding">
	<table class="table table-hover">
		<tr>
			<th>Produk</th>
			<th>Gambar</th>
			<th style="width: 110px">Aksi</th>
		</tr>
			<?php
				include "../lib/config.php";
				include "../lib/koneksi.php";

				$kueriProduk=mysqli_query($koneksi, "select * from tbl_produk");

				while($pro=mysqli_fetch_array($kueriProduk)) {
					?>

		<tr>
			<td><?php echo $pro['nama_produk']; ?> </td>
			<td>
				<img src="upload/<?php echo $pro['gambar']; ?>" height="100" width="150">
			</td>
			<td>
				<div class="btn-group">
					<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_produk&id_produk=<?php echo $pro['id_produk']; ?>"
						class="btn btn-warning"> <i class='fa fa-pencil'></i></button></a>
					<a href="<?php echo $admin_url; ?>module/produk/aksi_hapus.php?id_produk=<?php echo $pro['id_produk']; ?>"
						onClick="return confirm('Anda Yakin ingin Mengahpus Data ini?')" class="btn btn-danger"><i class='fa fa-power-off'></i></button></a>
				</div>
			</td>
		</tr>
	<?php			} ?>

	</table>

	<a href="adminweb.php?module=tambah_produk" class="btn btn-primary btn-sm">
    		<i class="fa fa-plus"></i> 
    		Add Produk
    	</a>
</div><!-- /.box-body -->
</section>


