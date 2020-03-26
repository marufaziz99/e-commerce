<?php

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$namamerek = $_POST['namamerek'];
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_merek (nama_merek) VALUES ('$namamerek')");

	if($querySimpan)
	{
		echo "<script> 
			alert['Data merek Berhasil Masuk']; 
			window.location = '$admin_url'+'adminweb.php?module=merek';
		</script>";
	}
	else {
		echo "<script> 
			alert['Data merek Gagal Dimasukkan']; 
			window.location= '$admin_url'+'adminweb.php?module=tambah_merek';
		</script>";
	}
?>