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

	$idmerek = $_GET['id_merek'];
	$queryEdit = mysqli_query($koneksi, "DELETE FROM tbl_merek WHERE id_merek = $idmerek");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data merek Berhasil Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=merek';
			</script>";
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data merek Gagal Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=edit_merek&id_merek='+'$idmerek';
			</script>";
	}
}
?>