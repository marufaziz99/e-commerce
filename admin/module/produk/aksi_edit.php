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
    $idProduk = $_POST['id_produk'];
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
    

    if(!empty($lokasifile)){
        $sql = "UPDATE tbl_produk SET id_kategori_produk = $idKategori , id_merek = $idMerek , nama_produk = '$namaProduk' , deskripsi = '$deskripsiProduk', harga = $hargaProduk , gambar = '$namafile', slide = '$slide' , rekomendasi = '$rekomendasi' where id_produk = $idProduk";

        $hasil = mysqli_query($koneksi , $sql);

        if($hasil){
            move_uploaded_file($lokasifile, $uploadfile);

            echo "<script> alert('Data berhasil diubah');
            window.location = '$admin_url'+'adminweb.php?module=produk';
            </script>"; 
        }
        else{
            echo "<script> alert('Data gagal diubah');
            window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk='.$idProduk;
            </script>"; 
        }
    }
    else{
        $sql = "UPDATE tbl_produk SET id_kategori_produk = $idKategori , id_merek = $idMerek , nama_produk = '$namaProduk' , deskripsi = '$deskripsiProduk', harga = $hargaProduk , slide = '$slide' , rekomendasi = '$rekomendasi' where id_produk = $idProduk";

        $hasil = mysqli_query($koneksi , $sql);
        if($hasil){
            echo "<script> alert('Data berhasil diubah');
            window.location = '$admin_url'+'adminweb.php?module=produk';
            </script>"; 
        }
        else{
            echo "<script> alert('Data gagal diubah');
            window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk='.$idProduk;
            </script>"; 
        }
    }

}
?>