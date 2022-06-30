<?php
//koneksi database
include ('koneksi.php');

if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
    $nis=$_POST['NIS'];
    $namasiswa=$_POST['NAMA'];
    $jk=$_POST['JENIS KELAMIN'];
    $alamat=$_POST['ALAMAT'];
    
//simpan data siswa

    $insertsiswa="INSERT INTO tbsiswa (NIS, NAMA, JENIS KELAMIN, ALAMAT) VALUES($nis,'$namasiswa','$jk','$alamat')";
    $sql=mysqli_query($koneksi,$insertsiswa);
        if ($sql){
            echo "<script type='text/javascript'> alert('Data siswa berhasil disimpan'); window.location='viewsiswa.php';</script>";
        } else {
            
            echo "<script type='text/javascript'> alert('Data siswa gagal disimpan'); window.location='viewsiswa.php';</script>";
        }	
}
	
?>