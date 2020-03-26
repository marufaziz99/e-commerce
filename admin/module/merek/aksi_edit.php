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

	$idmerek = $_POST['id_merek'];
	$namamerek = $_POST['nama_merek'];
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_merek SET nama_merek = '$namamerek' WHERE id_merek = $idmerek");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data merek Berhasil Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=merek';
			</script>";

		// header('location:'.$admin_url.'adminweb.php?module=merek');
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data merek Gagal Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=edit_merek&id_merek='+'$idmerek';
			</script>";
	}
}
?>