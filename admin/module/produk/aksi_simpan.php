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
	$lokasifile = $_FILES['gambar']['tmp_name'];
	$namafile = date("his").$_FILES['gambar']['name'];

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

	if(move_uploaded_file($lokasifile , $uploadfile)){
		// echo "Nama File : <b> </b> sukses di upload"; 

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