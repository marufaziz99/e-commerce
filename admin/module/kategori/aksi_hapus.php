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

	$idKategori = $_GET['id_kategori'];
	$queryEdit = mysqli_query($koneksi, "DELETE FROM tbl_kategori WHERE id_kategori = $idKategori");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data Kategori Berhasil Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=kategori';
			</script>";
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data Kategori Gagal Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=edit_kategori&id_kategori='+'$idKategori';
			</script>";
	}
}
?>