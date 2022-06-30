<!DOCTYPE html>
<html>
<head>
	<title> PENDAFTARAN SISWA SMA NEGERI 1 GEGESIK </title>
</head>
<body>

	<h2> PENDAFTARAN SISWA SMA NEGERI 1 GEGESIK</h2>
	<br/>
	<a href="ini.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> Form Pendaftaran Siswa </h3>
	<form method="POST" action="insertsiswa.php">
		<table>
			<tr>
				<td> Nama </td>
				<td> <input type="text" name="namasiswa" placeholder="Masukan Nama Lengkap"></td>
			</tr>
			<tr>
			<tr>
				<td> Kota </td>
				<td> <input type="text" name="kota" placeholder="kota anda sekarang"></td>
			</tr>
			<tr>
			<tr>
				<td> Kode Pos </td>
				<td> <input type="text" name="kodepos" placeholder="Masukan kodepos"></td>
			</tr>
			<tr>
			<td> Tempat Lahir</td>
				<td> <input type="text" name="tempat" placeholder="Masukan Tempat Lahir"></td>

			</tr>
			<tr>
				<td> Tanggal Lahir</td>
				<td> <input type="date" name="tgl"></td>

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
				<td>Anak ke </td>
					<td> <select name="ank">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						dari 
						 <select name="saudara">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> <textarea name="alamat" placeholder="Isi dengan tempat anda tinggal sekarang"cols="21" rows="5"></textarea> </td>
				</tr>
			<tr>
			<td> Asal Sekolah</td>
				<td> <input type="text" name="asalsekolah" placeholder="Masukan Asal sekolah"></td>

			</tr>
			<tr>
			<td> Nama Ayah</td>
				<td> <input type="text" name="namaayah" placeholder="Masukan Nama Ayah"></td>

			</tr>
			<tr>
			<td> Alamat Ayah</td>
			<td> <textarea name="alamatayah" placeholder="Isi dengan tempat tinggal ayah"cols="21" rows="5"></textarea> </td>
				</tr>
			<tr>
			<td> Pekerjaan Ayah</td>
				<td> <input type="text" name="pekerjaanayah" placeholder="Masukan Pekerjaan Ayah"></td>

			</tr>
			<tr>
			<td> Nama Ibu</td>
				<td> <input type="text" name="namaibu" placeholder="Masukan Nama Ibu"></td>

			</tr>
			<tr>
			<td> Alamat Ibu</td>
			<td> <textarea name="alamatibu" placeholder="Isi dengan tempat tinggal ibu"cols="21" rows="5"></textarea> </td>
				</tr>
			<tr>
			<td> Pekerjaan Ibu</td>
				<td> <input type="text" name="pekerjaanibu" placeholder="Masukan Pekerjaan Ibu"></td>

			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" name="submit" value ="SIMPAN">
				<input type="reset" value="RESET"><td>
			</tr>
		</table>
	</form>

</body>
</html>