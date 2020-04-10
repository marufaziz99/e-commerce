<?php
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])) 
{
	echo "<center> Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}

else
{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	date_default_timezone_set('Asia/Jakarta');

//ambil data yang di kirim dari form
<<<<<<< Updated upstream
	$lokasifile = $_FILES['gambar']['tmp_name'];
	$namafile = date("his").$_FILES['gambar']['name'];
=======
	$nama_file = $_FILES['gambar'] ['name'];
	$ukuran_file = $_FILES['gambar'] ['size'];
	$tipe_file = $_FILES['gambar'] ['type'];
	$tmp_file = $_FILES['gambar'] ['tmp_name'];
>>>>>>> Stashed changes

//data selain gambar
	$idKategori = $_POST['idKategori'];
	$idMerek = $_POST['idMerek'];
	$namaProduk = $_POST['namaProduk'];
	$deskripsiProduk = $_POST['deskripsiProduk'];
	$hargaProduk = $_POST['hargaProduk'];
	$slide = $_POST['slide'];
	$rekomendasi = $_POST['rekomendasi'];

//set path folder lokasi penyimpanan gambar
	$uploaddir = "../../upload/";
	$uploadfile = $uploaddir.$namafile;

<<<<<<< Updated upstream
	if(move_uploaded_file($lokasifile , $uploadfile)){
		// echo "Nama File : <b> </b> sukses di upload"; 
=======
	if ($tipe_file == "image/jpeg" || $tipe_file == "image/png")
	{
		if ($ukuran_file <= 1000000) 
		{
			if (move_uploaded_file($tmp_file, $path)) 
			{
				if ($tipe_file == "image/jpeg" || $tipe_file == "image/png")
				{
					if ($ukuran_file <= 1000000) 
					{
						if (move_uploaded_file($tmp_file, $path)) 
						{
							$queriSimpan = mysqli_query($koneksi, "INSERT INTO tbl_produk(id_kategori, id_merek, nama_produk, deskripsi, harga, gambar, slide, rekomendasi)
								VALUES('$idKategori', '$idMerek','$namaProduk','$deskripsi','$hargaProduk','$nama_file','$slide','$rekomendasi')");
							if ($querySimpan)
							{
								echo "<script> alert['Data Produk berhasil Masuk']; window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
							}
>>>>>>> Stashed changes

		$sql = mysqli_query($koneksi, "INSERT INTO tbl_produk (id_kategori_produk, id_merek, nama_produk, deskripsi, harga, gambar, slide, rekomendasi) VALUES ($idKategori, $idMerek, '$namaProduk', '$deskripsiProduk', $hargaProduk, '$namafile', '$slide', '$rekomendasi')");

		echo "<script> 
			alert('Data merek Berhasil Masuk'); 
			window.location = '$admin_url'+'adminweb.php?module=produk';
		</script>";

		// echo "berhasil";
	}
	else{
		echo "<script> 
			alert('Data merek Gagal Dimasukkan'); 
			window.location= '$admin_url'+'adminweb.php?module=tambah_produk';
		</script>";

		// echo "gagal";
	}

}
?>