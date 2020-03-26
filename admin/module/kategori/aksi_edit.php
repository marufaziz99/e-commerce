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

	$idKategori = $_POST['id_kategori'];
	$namaKategori = $_POST['nama_kategori'];
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_kategori SET nama_kategori = '$namaKategori' WHERE id_kategori = $idKategori");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data Kategori Berhasil Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=kategori';
			</script>";

		// header('location:'.$admin_url.'adminweb.php?module=kategori');
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data Kategori Gagal Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=edit_kategori&id_kategori='+'$idKategori';
			</script>";
	}
}
?>