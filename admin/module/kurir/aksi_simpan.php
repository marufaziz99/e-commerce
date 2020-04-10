<?php

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$namaKurir = $_POST['namaKurir'];
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kurir (nama_kurir) VALUES ('$namaKurir')");

	if($querySimpan)
	{
		echo "<script> 
			alert['Data Kurir Berhasil Masuk']; 
			window.location = '$admin_url'+'adminweb.php?module=kurir';
		</script>";
	}
	else {
		echo "<script> 
			alert['Data Kurir Gagal Dimasukkan']; 
			window.location= '$admin_url'+'adminweb.php?module=tambah_kurir';
		</script>";
	}
?>