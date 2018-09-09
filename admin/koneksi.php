<<<<<<< HEAD
<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pariwisata";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}   
=======
<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pariwisata";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}   
>>>>>>> f7976112f70f9e8d744805a8661a87c7bf4047b6
?>