<!DOCTYPE html>
<html>
<head>
	<title> EDIT DATA GURU SMA NEGERI 1 GEGESIK </title>
</head>
<body>
<center>
	<h2> EDIT DATA GURU SMA NEGERI 1 GEGESIK </h2>
	<br/>
	<a href="viewguru.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> FORM EDIT DATA GURU </h3>
	<?php
	include "koneksi.php";
	$nip=$_GET['id'];
	$dataguru = mysqli_query($koneksi,"SELECT * FROM tbguru WHERE nip=$nip");
	while($dg=mysqli_fetch_array($dataguru)){
	?>
	<form method="POST" action="updateguru.php">
		<table>
			<tr>
			<td> NIP </td> 
			<td><input type="text" name="nip" value=<?php echo $dg['nip'];?>> </td>
			</tr>
			<tr>
					<td> Nama </td>
					<td><input type="text" name="namaguru" value="<?php echo $dg['namaguru']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td> <select name="jk">
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> <textarea name="alamat" cols="40" rows="5"> <?php echo $dg['alamat'];?> </textarea> </td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="UPDATE"></td>
				</tr>
		</table>
	</form>
	<?php
	}
	?>
</center>
</body>
</html>