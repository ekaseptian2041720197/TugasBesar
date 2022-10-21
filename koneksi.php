<?php  
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'user_desainweb';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal Terhubung Ke Database');
?>