<?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser']))
{
	echo "<center> Untuk mengakses modul, Anda harus login <br>";
	echo "<a href='../../index.php'><b>LOGIN</b></a></center>";
}

else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idKota = $_GET['id_kota'];
	$queryEdit = mysqli_query($koneksi, "DELETE FROM tbl_kota WHERE id_kota = $idKota");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data Kota Berhasil Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=kota';
			</script>";
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data Kota Gagal Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=kota&id_kota='+'$idKota';
			</script>";
	}
}
?>