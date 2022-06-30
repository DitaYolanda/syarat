<!DOCTYPE html>
<html>
<head>
	<title> View Data Guru </title>
</head>
<body>
	<h2> DATA GURU SMA NEGERI 1 GEGESIK </h2>
	<br/>
	<a href = "addguru.php"> Tambah Data Guru </a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th> No. </th>
			<th> NIP</th>
			<th> NAMA</th>
			<th> JENIS KELAMIN</th>
			<th> ALAMAT</th>
		            
		</tr>
		<?php
		include ('koneksi.php');
		$no=1;
		$dataguru=mysqli_query($koneksi,"SELECT * FROM tbguru") or die (mysqli_error());

		if (!$dataguru) { //to show error statement
   			printf("Error: %s\n", mysqli_error($koneksi));
   			exit();
		}
		
		while ($dg=mysqli_fetch_assoc($dataguru)){
		?>
			<tr>
				<td> <?php echo $no++;?> </td>
				<td> <?php echo $dg['nip'];?> </td>
				<td> <?php echo $dg['namaguru'];?> </td>
				<td> <?php echo $dg['jk'];?> </td>
				<td> <?php echo $dg['alamat'];?> </td>
				<td>
					<a href="editguru.php?id=<?php echo $dg['nip'];?>"> EDIT </a> ||
					<a href="hapusguru.php?id=<?php echo $dg['nip'];?>"> HAPUS </a>
				</td>
		<?php
		}
		?>
	</table>
		<br>
		<a href="index.php"> Kembali ke home </a> || <a href="cetakguru.php" target="_blank">Cetak Data Guru</a>
	
</body>
</html>