<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<h2><font color="RED">DATA MAHASISWA PRODI SISTEM INFORMASI </font></h2>
		<br/>
		<a href="tambah.php" class="tambah1">Tambah Data</a>
		<br/>
		<br/>
		<table class="table1">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>OPSI</th>
			</tr>
			<?php
			include 'koneksi.php';
			$no = 1;
			($data = mysqli_query($koneksi,"select * from mahasiswa"));
			while ($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['nim']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> ||
							<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
						</td>
					</tr>
					<?php
			}
			?>
		</table>
</body>
</html>