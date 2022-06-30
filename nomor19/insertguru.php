<?php
//koneksi database
include ('koneksi.php');

if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
    $nip=$_POST['nip'];
    $namaguru=$_POST['namaguru'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];

//cek nis siswa
    $querycek="SELECT nip FROM tbguru WHERE nip=$nip"; 
    $cek=mysqli_query($koneksi,$querycek);
    
    if (mysqli_num_rows ($cek)>0){ //jika nip sudah ada dalam DB
        echo "<script type='text/javascript'> alert('NIP tersebut sudah ada dalam database'); window.location='viewsiswa.php';</script>";
    } else {
        //menambahkan data ke tbguru jika nip tsb belum ada dalam DB
        $insertguru="INSERT INTO tbguru(nip, namaguru, jk, alamat) VALUES($nip,'$namaguru','$jk','$alamat')";
        
        if (mysqli_query($koneksi,$insertguru)){
            echo "<script type='text/javascript'> alert('Data guru berhasil disimpan'); window.location='viewguru.php';</script>";
        } else {
            
            echo "<script type='text/javascript'> alert('Data guru gagal disimpan'); window.location='viewguru.php';</script>";
        }	
    }


	
}
?>