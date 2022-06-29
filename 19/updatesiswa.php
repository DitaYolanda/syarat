<?php
include "koneksi.php";

if(isset($_POST['submit']))
{
	$NIS=$_POST['NIS'];
	$NAMA=$_POST['NAMA'];	
	$JENISKELAMIN=$_POST['JENIS KELAMIN'];
	$ALAMAT=$_POST['ALAMAT'];

	$updatesiswa=mysqli_query($koneksi,"UPDATE tbsiswa SET NAMA='$NAMA',JENIS KELAMIN='$JENISKELAMIN',ALAMAT='$ALAMAT' WHERE NIS=$NIS");

	if ($updatesiswa)
    echo "<script type='text/javascript'> alert('Data siswa berhasil diubah'); window.location='viewsiswa.php';</script>";
	 else
     echo "<script type='text/javascript'> alert('Data siswa gagal diubah'); window.location='viewsiswa.php';</script>";
}

?>
