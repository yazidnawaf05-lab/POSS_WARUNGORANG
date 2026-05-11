<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "POSS_WARUBGORANG";

$conn = mysqli_connect($hostname, $username, $password, $db);

if ($conn){
    echo "berhasil";

}else{
    echo "Koneksi Gagal";
}