<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
<?php
	include "koneksi.php";
	$connect = mysqli_connect("localhost", "root", "", "user_desainweb");

	$id = 3;
	$query = "SELECT * FROM user WHERE id = '$id'";
	$result = mysqli_query($connect, $query);
?>
<table>
	<form method="GET" action="prosesEditBia.php">
		<?php
		$connect = mysqli_connect("localhost", "root", "", "user_desainweb");
		while ($row=mysqli_fetch_array($result)) {
		?>
	<tr>
		<td> ID </td>
		<td> <input type="number" name="id" value="<?php echo $row['id'];?>"readonly>  </td>
	</tr>
	<tr>
		<td> Nama </td>
		<td> <input type="text" name="nama" value="<?php echo $row['Nama'];?>"> </td>
	</tr>
	<tr>
		<td> Tempat, Tanggal Lahir </td>
		<td> <input type="text" name="ttl" value="<?php echo $row['TTL'];?>"> </td>
	</tr>
	<tr>
		<td> Jenis Kelamin </td>
		<td> <input type="text" name="jenisKelamin" value="<?php echo $row['JenisKelamin'];?>"> </td>
	</tr>
	<tr>
		<td> Alamat </td>
		<td> <input type="text" name="alamat" value="<?php echo $row['Alamat'];?>"> </td>
	</tr>
	<tr>
		<td> <input type="submit" name="edit" value="Edit Data"></td>
	</tr>
	<?php
}
?>
	</form>
</table>
</body>
</html>