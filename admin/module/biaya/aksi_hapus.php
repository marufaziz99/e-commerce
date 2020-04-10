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

	$id_biaya_kirim = $_GET['id_biaya_kirim'];
	$queryEdit = mysqli_query($koneksi, "DELETE FROM tbl_biaya_kirim WHERE id_biaya_kirim = $id_biaya_kirim");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data biaya kirim Berhasil Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=biaya';
			</script>";
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data biaya kirim Gagal Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=biaya';
			</script>";
	}
}
?>