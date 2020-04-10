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
		<h3>Data Produk</h3>
		<tr>
			<th>No</th>
			<th>Produk</th>
			<th>Kategori</th>
			<th>Merek</th>
			<th>Gambar</th>
			<th style="width: 110px">Aksi</th>
		</tr>
			<?php
				$no = 1;
				include "../lib/config.php";
				include "../lib/koneksi.php";

				$kueriProduk= mysqli_query($koneksi, "select * from tbl_produk join tbl_kategori on tbl_produk.id_kategori_produk = tbl_kategori.id_kategori join tbl_merek on tbl_produk.id_merek = tbl_merek.id_merek");

				while($pro=mysqli_fetch_array($kueriProduk)) {
					?>

		<tr>
			<td><?=$no++?></td>
			<td><?=$pro['nama_produk']?> </td>
			<td><?=$pro['nama_kategori']?></td>
			<td><?=$pro['nama_merek']?></td>
			<td>
				<img src="upload/<?=$pro['gambar']?>" height="100" width="150">
			</td>
			<td>
				<div class="btn-group">
					<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_produk&id_produk=<?php echo $pro['id_produk']; ?>"
						class="btn btn-warning"> <i class='fa fa-pencil'></i></button></a>
					<a href="<?php echo $admin_url; ?>module/produk/aksi_hapus.php?id_produk=<?=$pro['id_produk']?>"
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


