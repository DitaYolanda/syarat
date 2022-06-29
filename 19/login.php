<?php
session_start();
include "ini.php";
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];
if($op=="in"){
    $sql = mysqli_query($koneksi,'SELECT * FROM user WHERE username="'.$username.'" AND password="'.$password.'"');
    if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
        $_SESSION['nama'] = $qry['nama'];
    }else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
            document.location='index.php';
        </script>
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['hakakses']);
    header("location:index.php");
}
?>