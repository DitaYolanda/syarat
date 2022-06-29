<?php
include ('koneksi.php');

$nip=$_GET['id'];

$deleteguru=mysqli_query($koneksi,"DELETE FROM tbguru WHERE nip=$nip");

if ($deleteguru)
	echo "<script type='text/javascript'> alert('Data guru berhasil dihapus'); 
	window.location='viewguru.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Data guru gagal dihapus'); 
		 window.location='viewguru.php'; </script>";
?>
