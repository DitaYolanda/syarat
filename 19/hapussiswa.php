<?php
include ('koneksi.php');

$nis=$_GET['id'];

$deletesiswa=mysqli_query($koneksi,"DELETE FROM tbsiswa WHERE nis=$nis");

if ($deletesiswa)
	echo "<script type='text/javascript'> alert('Data siswa berhasil dihapus'); 
	window.location='viewsiswa.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Data siswa gagal dihapus'); 
		 window.location='viewsiswa.php'; </script>";
?>
