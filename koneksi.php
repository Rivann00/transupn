<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "transupn";

$koneksi = mysqli_connect($host, $user, $pass, $database);
if ($koneksi) {
    $buka=mysqli_select_db($database);
    echo = "database terhubung";
    if (!$buka) {
        echo "database tidak terhubung";
    }else{
        echo = "MySQL tidak terhubung";
    }

}
?>