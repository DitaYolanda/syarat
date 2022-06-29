<!DOCTYPE html>
<html>
<head>
	<title> View Data Jadwal </title>
</head>
<body>
	<h2> DATA JADWAL SMA NEGERI 1 GEGESIK </h2>
	<br/>
	<a href = "addjadwal.php"> Tambah Data Jadwal </a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th> No. </th>
			<th> Guru </th>
			<th> Kelas </th>
			<th> Hari </th>
            <th> Jam </th>
			<th> Mata Pelajaran </th>
            <th> Semester </th>
		</tr>
		<?php
		
        include ('koneksi.php');
        $tahunajar = (strval(date('Y'))."/".strval(date('Y')+1));

		$no=1;
        $queryjadwal="SELECT namaguru, namakelas, tbjadwal.hari, tbjadwal.jam, namamatpel, semester 
        FROM tbguru, tbkelas, tbmatpel, tbjadwal 
        WHERE tbguru.nip=tbjadwal.nip AND tbkelas.kodekelas=tbjadwal.kodekelas 
        AND tbmatpel.kodematpel=tbjadwal.kodematpel AND tbkelas.tahunajar='$tahunajar'";
		$datajadwal=mysqli_query($koneksi, $queryjadwal);
       	
		while ($dj=mysqli_fetch_assoc($datajadwal)){
			
		?>

			<tr>
				<td> <?php echo $no++;?> </td>
				<td> <?php echo $dj['namaguru'];?> </td>
				<td> <?php echo $dj['namakelas'];?> </td>
				<td> <?php echo $dj['hari'];?> </td>
                <td> <?php echo $dj['jam'];?> </td>
                <td> <?php echo $dj['namamatpel'];?> </td>
                <td> <?php echo $dj['semester'];?> </td>
		<?php
		}
		?>
	</table>
		<br>
		<a href="inI.php"> Kembali ke home </a> || <a href="#" target="_blank">Cetak Jadwal</a>
	
</body>
</html>