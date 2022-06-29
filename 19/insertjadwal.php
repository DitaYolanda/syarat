<?php
//koneksi database
include ('koneksi.php');

if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
    $kodekelas=$_POST['kelas'];
    $nip=$_POST['guru'];
    $kodematpel=$_POST['matpel'];
    $semester=$_POST['semester'];
    $hari=$_POST['hari'];
    $jam=$_POST['jam'];

//cek jadwal guru
$sqlcekguru="SELECT nip, hari, jam FROM tbjadwal WHERE nip='$nip' AND hari='$hari' AND jam='$jam'";
$result=mysqli_query($koneksi,$sqlcekguru);
$rscguru=mysqli_num_rows($result);

//cek jadwal kelas
$sqlcekkelas="SELECT kodekelas, hari, jam FROM tbjadwal WHERE kodekelas='$kodekelas' AND hari='$hari' AND jam='$jam'";
$result2=mysqli_query($koneksi,$sqlcekkelas);
$rsckelas=mysqli_num_rows($result2);

       
        if (($rscguru>0) or ($rsckelas>0))
            {
                echo "<script type='text/javascript'> alert('Data jadwal gagal disimpan. Guru/Kelas tersebut telah memiliki jadwal pada hari & jam tersebut');
                window.location='viewjadwal.php';</script>";
            }
    
        else {
            //simpan data jadwal
            $insertjadwal="INSERT INTO tbjadwal(kodekelas, nip, kodematpel, semester, hari, jam) VALUES('$kodekelas',$nip,'$kodematpel','$semester', '$hari','$jam')";
            $sql=mysqli_query($koneksi,$insertjadwal); 
             if ($sql){
                echo "<script type='text/javascript'> alert('Data jadwal berhasil disimpan'); window.location='viewjadwal.php';</script>";
                 } else {
                    echo "<script type='text/javascript'> alert('Data jadwal gagal disimpan'); window.location='viewjadwal.php';</script>";
                    }	
        }
    }

?>