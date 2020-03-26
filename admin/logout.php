<?php
	session_start();
	require_once "../lib/koneksi.php";
	require_once "../lib/config.php";

	unset($_SESSION['namauser']);

	header('location:index.php');

?>