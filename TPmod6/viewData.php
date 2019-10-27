<?php
if ($conn = mysqli_connect("localhost", "root", "password", "telkom")) {}
$result = mysqli_query($conn, "SELECT * FROM tp_1303170030");
?>
<!DOCTYPE html>
<html>
<head>
	<title>view data</title>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>
<body>
<a href="inputData.php">Tambah Data gan</a>
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Angkatan</th>
		<th>Universitas</th>
	</tr>
	<?php $i = 1;?>
	<?php while ($row = mysqli_fetch_assoc($result)): ?>
	<tr>
		<td><?=$i;?></td>
		<td><?=$row['nim']?> 		</td>
		<td><?=$row['nama']?></td>
		<td><?=$row['jurusan']?></td>
		<td><?=$row['angkatan']?></td>
		<td><?=$row['universitas']?></td>
	</tr>
	<?php $i++;?>
	<?php endwhile;?>
</table>
</body>
</html>