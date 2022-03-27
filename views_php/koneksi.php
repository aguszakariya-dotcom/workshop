<?php 
$host = "localhost:3300";
$user = "root";
$pass = "root";
$db = "project";
$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    die("Koneksi Gagal: ".mysqli_connect_error());
}else{
    // echo "Koneksi Berhasil";
}
