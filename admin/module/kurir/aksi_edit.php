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

	$idKurir = $_POST['id_kurir'];
	$namaKurir = $_POST['nama_kurir'];
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_kurir SET nama_kurir = '$namaKurir' WHERE id_kurir = $idKurir");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data Kurir Berhasil Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=kurir';
			</script>";

		// header('location:'.$admin_url.'adminweb.php?module=kurir');
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data Kurir Gagal Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=edit_kurir&id_kurir='+'$idKurir';
			</script>";
	}
}
?>