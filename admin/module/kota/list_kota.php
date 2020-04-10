<section class="content-header">
  <h1>
    Kota
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> Kota</a></li>
    <li class="active">List Kota</li>
  </ol>
</section>


<section class="content">
      <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-12 col-xs-6">

    	<a href="adminweb.php?module=tambah_kota" class="btn btn-primary btn-sm">
    		<i class="fa fa-plus"></i> 
    		Add kota
    	</a>

    	<br><br>

      	<table class="table table-responsive" style="border-color: black;">
			<tr style="background-color: aqua;">
				<th style="width: 150px">No</th>
				<th>Nama Kota</th>
				<th style="width: 250px">Aksi</th>
			</tr>
				<?php
					include "../lib/config.php";
					include "../lib/koneksi.php";

					$no = 1;

					$kueriKota= mysqli_query($koneksi, "select * from tbl_kota");
					while($kat=mysqli_fetch_array($kueriKota)) 
					{
						?>
					
							<tr>
								<td><?=$no++?></td>
								<td><?php echo $kat['nama_kota']; ?></td>
								<td align="center">
									<div class="btn-group" style="margin: 5px;">

										<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_kota&id_kota=<?php echo $kat['id_kota']; ?>" 
												class="btn btn-warning btn-sm"><i class='fa fa-pencil'></i> Update</a>
									</div>

									<div class="btn-group" style="margin: 5px;">
										<a href="<?php echo $admin_url; ?>module/kota/aksi_hapus.php?id_kota=<?php echo $kat['id_kota']; ?>"
												onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm"> <i class='fa fa-trash'></i> Delete</a>
									</div> 
								</td>
							</tr>

						<?php	
					} 
				?>
		</table>
    </div>
  </div>

</section>


