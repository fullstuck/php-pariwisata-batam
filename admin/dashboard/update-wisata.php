<?php
include "../koneksi.php";
$tgl_upload = date("Y-m-d H:i:s");

$id_wisata  	= $_POST['id_wisata'];
$nama_wisata   	= $_POST['nama_wisata'];
$kategori		= $_POST['kategori'];
$lokasi			= $_POST['lokasi'];
$deskripsi		= $_POST['deskripsi'];


$query = mysqli_query($koneksi, "UPDATE wisata SET nama_wisata='$nama_wisata', kategori='$kategori', lokasi='$lokasi', deskripsi='$deskripsi', tgl_upload='$tgl_upload' WHERE id_wisata='$id_wisata'")or die(mysql_error());
if ($query){
header('location:wisata.php');	
} else {
	echo "gagal";
    }
?>