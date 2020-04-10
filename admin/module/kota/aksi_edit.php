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

	$idKota = $_POST['id_kota'];
	$namaKota = $_POST['nama_kota'];
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_kota SET nama_kota = '$namaKota' WHERE id_kota = $idKota");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data Kota Berhasil Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=kota';
			</script>";

		// header('location:'.$admin_url.'adminweb.php?module=kota');
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data Kota Gagal Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=edit_kota&id_kota='+'$idKota';
			</script>";
	}
}
?>