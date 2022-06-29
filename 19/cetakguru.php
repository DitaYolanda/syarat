<!DOCTYPE html>
<html>
<body>
	<h2> DATA GURU SMA NEGERI 1 GEGESIK </h2>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th> No. </th>
			<th> NIP </th>
			<th> NAMA </th>
			<th> JENIS KELAMIN </th>
			<th> ALAMAT </th>
		</tr>
		<?php
		include ('koneksi.php');
		$no=1;
		$datasiswa=mysqli_query($koneksi,"select * from tbguru") or die (mysqli_error());

		if (!$datasiswa) { //to show error statement
   			printf("Error: %s\n", mysqli_error($koneksi));
   			exit();
		}
		
		while ($ds=mysqli_fetch_assoc($datasiswa)){
		?>
			<tr>
				<td> <?php echo $no++;?> </td>
				<td> <?php echo $ds['nip'];?> </td>
				<td> <?php echo $ds['namaguru'];?> </td>
				<td> <?php echo $ds['jk'];?> </td>
                <td> <?php echo $ds['alamat'];?> </td>
			
		<?php
		}
		?>
	</table>
	<script>
		window.print();
		</script>
</body>
</html>