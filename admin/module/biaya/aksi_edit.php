<?php

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$biaya = $_POST['biaya'];
	$idkota = $_POST['idkota'];
	$idkurir = $_POST['idkurir'];
	$id = $_POST['id_biaya_kirim'];

	
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_biaya_kirim SET id_kota = $idkota, id_jasa = $idkurir, biaya = $biaya WHERE id_biaya_kirim = $id");

	if($queryEdit){
		echo "<script type='text/javascript'>
				alert('Data Biaya Kirim Berhasil Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=biaya';
			</script>";
	}

	else{
		echo "<script type='text/javascript'>
				alert('Data Biaya Kirim Gagal Diubah');
				window.location.href = '$admin_url'+'adminweb.php?module=edit_biaya&id_biaya_kirim='+'$id';
			</script>";
	}
?>