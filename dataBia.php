<?php 
	error_reporting(0);
	include 'koneksi.php';
	$kontak = mysqli_query($conn, "SELECT * FROM user WHERE id = 3 ");
	$a = mysqli_fetch_object($kontak);
?>
<html>
    <head>
        <title>Data Aggota</title>
        <link rel="stylesheet" href="styleData.css"/>
    </head>
    <body>
        <h1>Biodata Anggota</h1>
        <form action="#" style="width: 1000px"class="posisi";>
        <fieldset class="h"/>
        <table style="width: 980px;">
        <tr>
            <td rowspan="15" width="250px">
            <img src="bia.jpg" width="250px" height="250px"/>
            </td>
        </tr>
        <tr>
            <td><b>ID</b></td>
            <td>:</td>
            <td><?php echo $a->id ?></td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>:</td>
            <td><?php echo $a->Nama ?></td>
        </tr>
        <tr>
            <td><b>Tempat, Tanggal Lahir</b></td>
            <td>:</td>
            <td><?php echo $a->TTL?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td>:</td>
            <td><?php echo $a->JenisKelamin ?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td>:</td>
            <td><?php echo $a->Alamat ?></td>
        </tr>
        <tr>
            <td><b>Untuk menuju kalkulator</b></td>
            <td>:</td>
            <td colspan="1" align="left"> <a href="kalkulator.html"style="text-decoration: none;" target="_parent"><input type="button"value="KLIK DISINI "/></a>
            </td>
        </tr>
        <tr>
            <td><b>Edit</b></td>
            <td>:</td>
            <td><a href="editFormBia.php?id=<?php echo $row['id']; ?>"> Edit &nbsp; </a></td>
        </tr>
    </table>
        </fieldset>
        </form>
    </body>
 </html>
