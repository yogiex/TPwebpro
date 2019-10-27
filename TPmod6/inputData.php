<?php
if (!$conn = mysqli_connect("localhost", "root", "password", "telkom")) {
	die("koneksi gagal" . mysqli_connect_error());
}
if (isset($_POST["submit"])) {
	$nim = $_POST["nim"];
	$nama = $_POST["nama"];
	$jurusan = $_POST["jurusan"];
	$angkatan = $_POST["angkatan"];
	$universitas = $_POST["universitas"];
	$query = "INSERT INTO tp_1303170030(nim,nama,jurusan,angkatan,universitas)
	VALUES ('$nim','$nama','$jurusan','$angkatan','$universitas')";
	mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>1303170030</title>
    </head>
    <body>
        <form method="post" action="">
            <table>
                <tr><td>NIM</td><td><input type="text" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>JURUSAN</td><td><input type="text" name="jurusan"></td></tr>
                <tr><td>ANGKATAN</td><td><input type="text" name="angkatan"></td></tr>
                <tr><td>UNIVERSITAS</td><td><input type="text" name="universitas"></td></tr>
                <tr><td colspan="2"><button type="submit" name="submit">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>

