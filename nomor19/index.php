
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> SIAKAD : SMA NEGERI 1 GEGESIK</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://kit.fontawesome.com/0677e96099.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MY NEGES</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="LOGIN.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="nav-link active text-white" href="#"><i class="fa-solid fa-table-columns "></i>Dashboard Student</a><hr class="bg-secondary">
                    </li>
                    </li>
                     <li>
                        <a class="nav-link text-white" href="viewsiswa.php"><i class="fa-solid fa-user mr-2"></i>Data Siswa</a><hr class="bg-secondary">
                    </li>
                    <li>
                        <a class="nav-link text-white" href="viewguru.php"><i class="fa-solid fa-chalkboard-user"></i>Data Guru</a><hr class="bg-secondary">
                    </li>
						   <li>
                        <a class="nav-link text-white" href="viewadmin.php"><i class="fa-solid fa-user-gear"></i></i>Data Admin</a><hr class="bg-secondary">
                    </li>	
                      <li  >
                        <a class="nav-link text-white" href="viewjadwal.php" ><i class="fa-solid fa-calendar-days"></i>Jadwal Pelajaran</a><hr class="bg-secondary">
                    </li>
                    <li  >
                        <a class="nav-link text-white" href="viewnilai.php"><i class="fa-solid fa-display"></i>Nilai Mahasiswa</a><hr class="bg-secondary">
                    </li>				
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                        <h5>WELCOME TO MY NEGES ACADEMY. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
             <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon"><i class="fa-solid fa-user"></i>
                </span>
                <div class="text-box" >
                <p class="text-muted">Data Siswa</p>
                    <p class="main-text">3000</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon"><i class="fa-solid fa-chalkboard-user"></i>
                </span>
                <div class="text-box" >
                <p class="text-muted">Data Guru</p>
                    <p class="main-text">60</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon"><i class="fa-solid fa-user-gear"></i></i>
                </span>
                <div class="text-box" >
                <p class="text-muted">Data admin</p>
                    <p class="main-text">10</p>
                </div>
             </div>
		     </div> 
                    </div>
                </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

</body>
</html>
