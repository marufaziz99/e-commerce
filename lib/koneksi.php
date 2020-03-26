<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "project_ecommerce_0849";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
	echo "Failed to connect ".mysqli_connect_error();
	exit();
}

?>