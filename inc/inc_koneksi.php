<?php

// Membuat Koneksi dengan Database

$host = "localhost";
$user = "root";
$pass = "";
$db = "bioakrom";

$koneksi = mysqli_connect($host,$user,$pass,$db);

// Cek Koneksi
if(!$koneksi){
  die("Gagal Terkoneksi");
} else {
  echo "Koneksi Berhasil";
}


?>