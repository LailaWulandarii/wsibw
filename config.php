<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'sikampus');
//untuk cek koneksi
if (!$koneksi){
    die ("koneksi gagal: ". mysqli_connect_error());
}
else{
      echo "koneksi berhasil";
}
  ?>
