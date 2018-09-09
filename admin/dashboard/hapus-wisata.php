<<<<<<< HEAD
<?php
include "../koneksi.php";
$id_wisata = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM wisata WHERE id_wisata='$id_wisata'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'wisata.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'wisata.php'</script>";	
}
=======
<?php
include "../koneksi.php";
$id_wisata = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM wisata WHERE id_wisata='$id_wisata'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'wisata.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'wisata.php'</script>";	
}
>>>>>>> f7976112f70f9e8d744805a8661a87c7bf4047b6
?>