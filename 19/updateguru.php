<?php
include "koneksi.php";

if(isset($_POST['submit']))
{
	$nip=$_POST['nip'];
	$namaguru=$_POST['namaguru'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];	

	$updateguru=mysqli_query($koneksi,"UPDATE tbguru SET namaguru='$namaguru', jk='$jk', alamat='$alamat' WHERE nip=$nip");

	if ($updateguru)
    echo "<script type='text/javascript'> alert('Data guru berhasil diubah'); window.location='viewguru.php';</script>";
	 else
     echo "<script type='text/javascript'> alert('Data guru gagal diubah'); window.location='viewguru.php';</script>";
}

?>
