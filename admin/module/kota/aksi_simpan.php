<?php

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$namaKota = $_POST['namaKota'];
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kota (nama_kota) VALUES ('$namaKota')");

	if($querySimpan)
	{
		echo "<script> 
			alert['Data Kota Berhasil Masuk']; 
			window.location = '$admin_url'+'adminweb.php?module=kota';
		</script>";
	}
	else {
		echo "<script> 
			alert['Data Kota Gagal Dimasukkan']; 
			window.location= '$admin_url'+'adminweb.php?module=tambah_kota';
		</script>";
	}
?>