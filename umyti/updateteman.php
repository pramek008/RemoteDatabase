<?php 
  include "./koneksi.php";

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $telepon = $_POST['telepon'];

  class emp{}
    $query = mysqli_query($koneksi,"UPDATE teman set nama='".$nama."', telepon='".$telepon."' where id='".$id."'");
    if ($query) {
      $response = new emp();
      $response->success = 1;
      $response->message = "Data berhasil diedit";
      die(json_encode($response));
    }else{
      $response = new emp();
      $response->success = 0;
      $response->message = "Gagal menyimpan data";
      die(json_encode($response));
    }
?>