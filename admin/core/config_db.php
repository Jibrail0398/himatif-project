<?php 
    $db_host = "localhost:3301";
    $db_user = "root";
    $db_pass = "";
    $db_name = "website-himatif";

    $connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$connect) {
        die("Gagal koneksi ke database");
    }

?>