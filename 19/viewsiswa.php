<!DOCTYPE html>
<html>
<head>
	<title> View Data Siswa </title>
</head>
<body>
	<h2> DATA SISWA SMA NEGERI 1 GEGESIK </h2>
	<br/>
	<a href = "addsiswa.php"> Tambah Data Siswa </a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th> No. </th>
			<th> NIS </th>
			<th> NAMA </th>
			<th> JENIS KELAMIN </th>
			<th> ALAMAT </th>
		</tr>
		<?php
		include ('koneksi.php');
		$no=1;
		$datasiswa=mysqli_query($koneksi,"select * from tbsiswa") or die (mysqli_error());

		if (!$datasiswa) { //to show error statement
   			printf("Error: %s\n", mysqli_error($koneksi));
   			exit();
		}
		
		while ($ds=mysqli_fetch_assoc($datasiswa)){
		?>
			<tr>
				<td> <?php echo $no++;?> </td>
				<td> <?php echo $ds['NIS'];?> </td>
				<td> <?php echo $ds['NAMA'];?> </td>
				<td> <?php echo $ds['JENIS KELAMIN'];?> </td>
                <td> <?php echo $ds['ALAMAT'];?> </td>
				<td>
					<a href="editsiswa.php?id=<?php echo $ds['NIS'];?>"> EDIT </a> ||
					<a href="hapussiswa.php?id=<?php echo $ds['NIS'];?>"> HAPUS </a>
				</td>
		<?php
		}
		?>
	</table>
		<br>
		<a href="ini.php"> Kembali ke home </a> || <a href="cetaksiswa.php" target="_blank">Cetak Data Siswa</a>
	
</body>
</html>