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

	$idProduk = $_GET['id_produk'];
	$queryEdit = mysqli_query($koneksi, "DELETE FROM tbl_produk WHERE id_produk= $idProduk");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data Produk Berhasil Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=produk';
			</script>";
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data Produk gagal Dihapus');
				window.location.href = '$admin_url'+'adminweb.php?module=produk';
			</script>";
	}
}
?>