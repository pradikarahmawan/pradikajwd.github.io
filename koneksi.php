<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_databases ="tiket";

$db = mysqli_connect($server, $user, $password, $nama_databases);
if(!$db){
    die("gagal terhububg dengan databases: " . mysqli_connect_error());
}
?>