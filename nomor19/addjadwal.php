<!DOCTYPE html>
<html>
<head>
	<title> Tambah Data Jadwal </title>
</head>
<body>

	<h2> TAMBAH DATA JADWAL </h2>
	<br/>
	<a href="viewjadwal.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> Form Tambah Data Jadwal </h3>
    <?php
        include "koneksi.php";
        $tahunajar = (strval(date('Y'))."/".strval(date('Y')+1));
    ?>
	<form method="POST" action="insertjadwal.php">
		<table>
			<tr>
					<td>Kelas</td>
					<td> <select name="kelas">
							<?php
                                 $datakelas=mysqli_query($koneksi,"SELECT * FROM tbkelas WHERE tahunajar='$tahunajar'");
                                 while ($dk=mysqli_fetch_assoc($datakelas)){
                                     $kodekelas=$dk['kodekelas'];
                                     $namakelas=$dk['namakelas'];
                                     
                                     echo "<option value='$kodekelas'>$namakelas</option>";
                                 }
         
                            ?>
						</select>
					</td>
				</tr>
                <tr>
					<td>Guru</td>
					<td> <select name="guru">
							<?php
                                 $dataguru=mysqli_query($koneksi,"SELECT * FROM tbguru");
                                 while ($dg=mysqli_fetch_assoc($dataguru)){
                                     $nip=$dg['nip'];
                                     $namaguru=$dg['namaguru'];
                                     
                                     echo "<option value='$nip'>$namaguru</option>";
                                 }
         
                            ?>
						</select>
					</td>
				</tr>
                <tr>
					<td>Mata Pelajaran</td>
					<td> <select name="matpel">
							<?php
                                 $datamatpel=mysqli_query($koneksi,"SELECT * FROM tbmatpel");
                                 while ($dm=mysqli_fetch_assoc($datamatpel)){
                                     $kodematpel=$dm['kodematpel'];
                                     $namamatpel=$dm['namamatpel'];
                                     
                                     echo "<option value='$kodematpel'>$namamatpel</option>";
                                 }
         
                            ?>
						</select>
					</td>
				</tr>
                <tr>
					<td>Semester</td>
					<td> <select name="semester">
			                <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
						</select>
					</td>
				</tr>
                <tr>
					<td>Hari</td>
					<td> <select name="hari">
			                <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
						</select>
					</td>
				</tr>
				<tr>
                    <td>Jam</td>
					<td> <select name="jam">
			                <option value="07.30-07.45">07.30-07.45</option>
                            <option value="07.45-09.15">07.45-09.15</option>
                            <option value="09.30-11.00">09.30-11.00</option>
                            <option value="11.00-12.15">11.00-12.15</option>
						</select>
					</td>
				</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" name="submit" value ="SIMPAN JADWAL">
				<input type="reset" value="RESET"><td>
			</tr>
		</table>
	</form>

</body>
</html>