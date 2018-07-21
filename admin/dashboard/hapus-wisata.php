<?php
include "../koneksi.php";
$id_wisata = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM wisata WHERE id_wisata='$id_wisata'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'wisata.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'wisata.php'</script>";	
}
?>