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

	$idKurir = $_GET['id_kurir'];
	$queryEdit = mysqli_query($koneksi, "DELETE FROM tbl_kurir WHERE id_kurir = $idKurir");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data Kurir Berhasil Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=kurir';
			</script>";
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data Kurir Gagal Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=kurir&id_kurir='+'$idKurir';
			</script>";
	}
}
?>