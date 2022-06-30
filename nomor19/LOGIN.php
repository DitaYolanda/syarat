<?php
@session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <script src="https://kit.fontawesome.com/0677e96099.js" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            font-family: arial;
            font-size: 14px;
            background-color:#A9A9A9;
        }
        #utama{
            width: 350px;
            margin:0 auto;
            margin-top: 12px;
        }
        #title{
            padding: 10px;
            text-align: center;
            color: #fff;
            font-size: 20px;
            background-color: #CC3333;
            border-top-left-radius: 10px;
            border-top-right-radius:10px ;
            border-bottom: 3px solid #blueviolet
        }
        #inputan{
            background-color:#eaeaec ;
            padding:20px ;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;

        }
       input{
        padding: 10px;
        border: 0;
       } 
.lg{
    width: 240px;
}
.btn{
    background-color:#339966;
    border-radius: 10px;
    color:#fff;
    
}
    </style>
</head>
<body>
    <div id="utama">
        <div id="title">
        <i class="fa-solid fa-graduation-cap"></i>LOGIN</a>
        </div>
        <div id="inputan"> 
            <form action="index.php" method="post">
        <div>
        <center>   <input type="int" name="nomor" placeholder="Masukan NIS atau NIP" /> </center>
        </div>
        <div style="margin-top:10px;">
        <center>   <input type="password" name="pass" placeholder="Password" /> </center>
        </div>
        <div style="margin-top:10px;">
          <center>  <input type="submit" name="login"placeholder="Login" class="btn"/></center>
        </div>
    </div>
            </form>
            <?php
            $nomor = @$_POST['nomor'];
            $pass = @$_POST['pass'];
            $login = @$_POST['login'];

          if($login){
            if($nomor == "" || $pass == ""){
                echo "Data yan anda masukan belum lengkap";

            }
        } 
    
          ?>
    </div>
</body>
</html>