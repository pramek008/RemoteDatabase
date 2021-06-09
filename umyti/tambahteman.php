<?php 
  include "./koneksi.php";

  $nama = $_POST['nama'];
  $telepon = $_POST['telepon'];

  class emp{}
    $query = mysqli_query($koneksi,"INSERT INTO teman (nama,telepon) values('$nama','$telepon')");

    if ($query) {
      $response = new emp();
      $response->success = 1;
      $response->message = "Data berhasil disimpan!";
      die(json_encode($response));
    }else{
      $response = new emp();
      $response->success = 0;
      $response->message = "Data Gagal disimpan!";
      die(json_encode($response));
    }
?>