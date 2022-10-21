<?php
    include "koneksi.php";
    $connect = mysqli_connect("localhost", "root", "", "user_desainweb");

    $id = 2;
    $nama = $_GET['nama'];
    $ttl = $_GET['ttl'];
    $jenisKelamin = $_GET['jenisKelamin'];
    $alamat = $_GET['alamat'];

    $query = "UPDATE user SET nama='$nama', ttl='$ttl', jenisKelamin='$jenisKelamin', alamat='$alamat' WHERE id=2";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Berhasil update data";
    ?>
    <a href="dataAldo.php"> Lihat data </a>
    <?php
    }
    else{
        echo "Gagal update data" . mysqli_error($connect);
    }
?>