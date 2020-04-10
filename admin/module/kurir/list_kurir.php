<section class="content-header">
  <h1>
    Kurir
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> Kurir</a></li>
    <li class="active">List Kurir</li>
  </ol>
</section>


<section class="content">
      <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-12 col-xs-6">

    	<a href="adminweb.php?module=tambah_kurir" class="btn btn-primary btn-sm">
    		<i class="fa fa-plus"></i> 
    		Add kurir
    	</a>

    	<br><br>

      	<table class="table table-responsive" style="border-color: black;">
			<tr style="background-color: aqua;">
				<th style="width: 150px">No</th>
				<th>Nama Kurir</th>
				<th style="width: 250px">Aksi</th>
			</tr>
				<?php
					include "../lib/config.php";
					include "../lib/koneksi.php";

					$no = 1;

					$kueriKurir= mysqli_query($koneksi, "select * from tbl_kurir");
					while($kat=mysqli_fetch_array($kueriKurir)) 
					{
						?>
					
							<tr>
								<td><?=$no++?></td>
								<td><?php echo $kat['nama_kurir']; ?></td>
								<td align="center">
									<div class="btn-group" style="margin: 5px;">

										<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_kurir&id_kurir=<?php echo $kat['id_kurir']; ?>" 
												class="btn btn-warning btn-sm"><i class='fa fa-pencil'></i> Update</a>
									</div>

									<div class="btn-group" style="margin: 5px;">
										<a href="<?php echo $admin_url; ?>module/kurir/aksi_hapus.php?id_kurir=<?php echo $kat['id_kurir']; ?>"
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


