<section class="content-header">
  <h1>
    Merek
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-eye"></i> Merek</a></li>
    <li class="active">List Merek</li>
  </ol>
</section>


<section class="content">
      <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-12 col-xs-6">

    	<a href="adminweb.php?module=tambah_merek" class="btn btn-primary btn-sm">
    		<i class="fa fa-plus"></i> 
    		Add Merek
    	</a>

    	<br><br>

      	<table class="table table-responsive" style="border-color: black;">
			<tr style="background-color: aqua;">
				<th style="width: 150px">No</th>
				<th>Merek</th>
				<th style="width: 250px">Aksi</th>
			</tr>
				<?php
					include "../lib/config.php";
					include "../lib/koneksi.php";

					$no = 1;

					$kueriMerek= mysqli_query($koneksi, "select * from tbl_merek");
					while($merek=mysqli_fetch_array($kueriMerek)) 
					{
						?>
					
							<tr>
								<td><?=$no++?></td>
								<td><?php echo $merek['nama_merek']; ?></td>
								<td align="center">
									<div class="btn-group" style="margin: 5px;">

										<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_merek&id_merek=<?php echo $merek['id_merek']; ?>" 
												class="btn btn-warning btn-sm"><i class='fa fa-pencil'></i> Update</a>
									</div>

									<div class="btn-group" style="margin: 5px;">
										<a href="<?php echo $admin_url; ?>module/merek/aksi_hapus.php?id_merek=<?php echo $merek['id_merek']; ?>"
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


