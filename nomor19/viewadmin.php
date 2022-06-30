<!DOCTYPE html>
<html>
<head>
	<title> View Data Admin </title>
</head>
<body>
	<h2> DATA ADMIN SMA NEGERI 1 GEGESIK </h2>
	<table border="1">
		<tr>
			<th> ID ADMIN </th>
			<th> NAMA ADMIN </th>
			<th> PASSWORD </th>
			<th> NO.TLP </th>
			<th> ALAMAT </th>
		</tr>
		<?php
		include ('koneksi.php');
		$no=1;
		$datasiswa=mysqli_query($koneksi,"select * from tbjadmin") or die (mysqli_error());

		if (!$datasiswa) { //to show error statement
   			printf("Error: %s\n", mysqli_error($koneksi));
   			exit();
		}
		
		while ($ds=mysqli_fetch_assoc($datasiswa)){
		?>
			<tr>
				<td> <?php echo $no++;?> </td>
				<td> <?php echo $ds['id_admin'];?> </td>
				<td> <?php echo $ds['nama_admin'];?> </td>
				<td> <?php echo $ds['password'];?> </td>
                <td> <?php echo $ds['no_tlp'];?> </td>
				<td> <?php echo $ds['alamat'];?> </td>
				<td>
					<a href="editadmin.php?id=<?php echo $ds['id_admin'];?>"> EDIT </a> ||
					<a href="hapusadmin.php?id=<?php echo $ds['id_admin'];?>"> HAPUS </a>
				</td>
		<?php
		}
		?>
	</table>
		<br>
		<a href="index.php"> Kembali ke home </a> || <a href="cetakadmin.php" target="_blank">Cetak Data Admin</a>
	
</body>
</html>