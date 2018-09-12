<?php
switch($jenis){
  case "Beranda"; include("pages/v_beranda.php"); break;
  case "DataMahasiswa"; include("pages/mahasiswa/v_mahasiswa.php"); break;
  case "TambahMahasiswa"; include("pages/mahasiswa/v_tambah_mahasiswa.php"); break;
  case "UbahMahasiswa"; include("pages/mahasiswa/v_ubah_mahasiswa.php"); break;
}
?>
