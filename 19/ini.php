<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <script src="https://kit.fontawesome.com/0677e96099.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MY NEGES ACADEMY | <b> SMAN 1 GEGESIK </b></a>
          
            <form class="d-flex"  role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="icon ml-4">
              <h4>
                <i class="fa-solid fa-envelope mr-3" data-toggle="tooltip" title="Message"></i>
                <i class="fa-solid fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
                <i class="fa-solid fa-arrow-right-from-bracket mr-3" data-toggle="tooltip" title="Sign-out"></i>
              </h4>
          </div>
        </div>
      </nav>
      
      <div class="row no-gutters mt-5">
        
        <div class="col-md-2 bg-dark mt-2 pr-4">
          <ul class="nav flex-column ml-2 mb-4">
            <li class="nav-item">
              <a class="nav-link active text-white" href="#"><i class="fa-solid fa-table-columns "></i>Dashboard Student</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="viewsiswa.php"><i class="fa-solid fa-user mr-2"></i>Data Siswa</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="viewguru.php"><i class="fa-solid fa-chalkboard-user"></i>Data Guru</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><i class="fa-solid fa-user-gear"></i></i>Data Admin</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="viewjadwal.php" ><i class="fa-solid fa-calendar-days"></i>Jadwal Pelajaran</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><i class="fa-solid fa-display"></i>Nilai Mahasiswa</a><hr class="bg-secondary">
            </li>
          </ul>
        </div>
        <div class="col-md-10 p p-4 pt-8">
        <h3><i class="fa-solid fa-table-columns mr-2"></i> DASHBOARD STUDENT</h3><hr >
        <div class="row text-white">
        <div class="card bg-info" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa-solid fa-user mr-2"></i>
              </div>
            <h5 class="card-title">JUMLAH MURID</h5>
            <div class="display-4">2000</div>
            <a href="viewsiswa.php"><p class="card-text "><i class="fa-solid fa-circle-info "></i> Details</p>
          </div>
        </div>
        
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
</body>
</html>