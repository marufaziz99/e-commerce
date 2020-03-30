<section class="content-header">
  <h1>
    Edit Produk
  </h1>
  <ol class="breadcrumb">
    <li><a href="asset/#"><i class="fa fa-list"></i> Produk</a></li>
    <li class="active">Edit Produk</li>
  </ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
	<div class="row">
    	<div class="col-lg-10 col-xs-6">
            <form class="form-horizontal" action="../admin/module/produk/aksi_edit.php" method="post" enctype="multipart/form-data">
                <div class="box-body">

                    <?php

                    include "../lib/koneksi.php";
                    include "../lib/config.php";

                    $id = $_GET['id_produk'];
                    $sql = mysqli_query($koneksi, "select * from tbl_produk join tbl_kategori on tbl_produk.id_kategori_produk = tbl_kategori.id_kategori join tbl_merek on tbl_produk.id_merek = tbl_merek.id_merek where tbl_produk.id_produk = $id");

                    while($pro=mysqli_fetch_array($sql)) 
                    {
                        ?>
                            <input type="hidden" name="id_produk" value="<?=$pro['id_produk']?>">
                            <div class="form-group">
                                <label for="inputEmail3"class="col-sm-2 control-label">Kategori *</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="idKategori" required>
                                        <option value="">-- Pilih Kategori --</option>
                                        <?php
                                                    $kueriKategori=mysqli_query($koneksi, "select * from tbl_kategori");
                                                    while($kat=mysqli_fetch_array($kueriKategori)) {
                                        ?>

                                        <option value="<?php echo $kat['id_kategori']; ?>" <?=($pro['id_kategori_produk'] == $kat['id_kategori'] ?'selected' : '')?>><?php echo $kat['nama_kategori'];?></option>

                                    <?php } ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"class="col-sm-2 control-label">Merek *</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="idMerek" required>
                                        <option value="">-- Pilih Merek --</option>
                                        <?php
                                                include "../lib/koneksi.php";
                                                    $kueriMerek=mysqli_query($koneksi, "select * from tbl_merek");
                                                    while($mer=mysqli_fetch_array($kueriMerek)) {
                                        ?>

                                        <option value="<?php echo $mer['id_merek']; ?>" <?=($pro['id_merek'] == $mer['id_merek'] ? 'selected' : '')?>><?php echo $mer['nama_merek'];?></option>

                                    <?php } ?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk *</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk" value="<?=$pro['nama_produk']?>" required>
                            </div>
                            </div>

                            <div class="form-group">                                    
                                <label for="inputEmail3" class="col-sm-2 control-label"> Gambar</label>
                                <div class="col-sm-10">
                                <img src="upload/<?=$pro['gambar']?>" alt="" width="100">
                                    <input type="file" id="gambar" name="gambar" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"> Deskripsi Produk *
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk" placeholder="Deskripsi Produk" value="<?=$pro['deskripsi']?>" required>
                                </div>
                            </div>

                            <div class="form-group">                                    
                                <label for="inputEmail3" class="col-sm-2 control-label">Harga Produk *</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Harga Produk" value="<?=$pro['harga']?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Slide</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="slide" id="slide" value="Y" <?=($pro['slide'] == 'Y' ? 'checked' : '')?>>
                                            Ya
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="slide" id="slide" value="N" <?=($pro['slide'] == 'N' ? 'checked' : '')?>>
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
                                            <input type="radio" name="rekomendasi" id="rekomendasi" value="Y" <?=($pro['rekomendasi'] == 'Y' ? 'checked' : '')?>>
                                            Ya
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="rekomendasi" id="rekomendasi" value="N" <?=($pro['rekomendasi'] == 'N' ? 'checked' : '')?>>
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    ?>

                    </div><!-- /.box-body -->
                    <div> 
                        <button type="submit" class="btn btn-primary pull-right"> Simpan Perubahan </button>
                    </div><!-- /.box-footer -->
                </div>
            </form>
		</div>
 	</div>

</section>