<?php
error_reporting(0);
define("HOST", "localhost"); // Host database
define("USER", "root"); // Usernama database
define("PASSWORD", ""); // Password database
define("DATABASE", "wedding1"); // Nama database

$koneksiku = new mysqli(HOST, USER, PASSWORD, DATABASE);

if($koneksiku->connect_error){
	trigger_error('Koneksi ke database gagal: ' . $koneksiku->connect_error, E_USER_ERROR);	
}//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "wedding1";
    
//     // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
//     // membuat koneksi
//     $koneksiku = mysqli_connect($servername, $username, $password, $database);
//     // mengecek koneksi
//     if (!$koneksiku) {
//         die("Koneksi gagal: " . mysqli_connect_error());
//     }
?>