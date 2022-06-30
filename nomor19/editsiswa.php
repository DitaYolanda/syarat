<!DOCTYPE html>
<html>
<head>
	<title> EDIT DATA SISWA SMA NEGERI 1GEGESIK </title>
</head>
<body>
<center>
	<h2> EDIT DATA SISWA SMA NEGERI 1 GEGSIK </h2>
	<br/>
	<a href="viewsiswa.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> FORM EDIT DATA SISWA </h3>
	<?php
	include "koneksi.php";
	$nis=$_GET['id'];
	$datasiswa = mysqli_query($koneksi,"SELECT * FROM tbsiswa WHERE nis=$nis");
	while($ds=mysqli_fetch_assoc($datasiswa)){
	?>
	<form method="POST" action="updatesiswa.php">
		<table>
			<tr>
			<td> NIS </td>
			<td> <input type="text" name="NIS" value=<?php echo $ds['NIS'];?>>
			</tr>
			<tr>
				<td> Nama </td>
				<td><input type="text" name="NAMA" value="<?php echo $ds['NAMA']; ?>">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> <select name="JENIS KELAMIN">
		                <option value="Laki-laki">Laki-laki</option>
		                <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td> <textarea name="ALAMAT" cols="40" rows="5"> <?php echo $ds['ALAMAT'];?> </textarea> </td>
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