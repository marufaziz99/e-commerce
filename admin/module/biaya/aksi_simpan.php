<?php

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$biaya = $_POST['biaya'];
	$idkota = $_POST['idkota'];
	$idkurir = $_POST['idkurir'];

	
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_biaya_kirim (id_kota, id_jasa, biaya) VALUES ($idkota, $idkurir, $biaya)");

	if($querySimpan)
	{
		echo "<script> 
			alert['Data Biaya Kirim Berhasil Masuk']; 
			window.location = '$admin_url'+'adminweb.php?module=biaya';
		</script>";
	}
	else {
		echo "<script> 
			alert['Data Biaya Kirim Gagal Dimasukkan']; 
			window.location= '$admin_url'+'adminweb.php?module=tambah_biaya';
		</script>";
	}
?>