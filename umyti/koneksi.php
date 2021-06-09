<?php 
  $server = "localhost";
  $user = "root";
  $namaDB = "tiumy";
  $pass = "";
  
  $koneksi =  mysqli_connect($server,$user,$pass,$namaDB) or die("Koneksi gagal!");
?>