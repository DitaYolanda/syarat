<!DOCTYPE html>
<html>
<head>
	<title> Tambah Data Guru </title>
</head>
<body>

	<h2> TAMBAH DATA GURU </h2>
	<br/>
	<a href="viewguru.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> Form Tambah Data Guru </h3>
	<form method="post" action="insertguru.php">
		<table>
			<tr>
				<td> NIP </td>
				<td> <input type="text" name="nip"></td>
			</tr>
			<tr>
				<td> Nama </td>
				<td> <input type="text" name="namaguru"></td>
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
				<td> <textarea name="alamat" cols="40" rows="5"></textarea> </td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" name="submit" value ="SIMPAN">
				<input type="reset" value="RESET"><td>
			</tr>
		</table>
	</form>

</body>
</html>