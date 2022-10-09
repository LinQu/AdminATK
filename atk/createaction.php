<?php
  $idatk = PHP_EOL . $_POST['idatk'];
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $vendor = $_POST['vendor'];
  $stok = $_POST['stok'];
  $file = fopen("../assets/data.txt", "a");

  fwrite($file, $idatk . "|" . $nama . "|" . $jenis . "|" . $vendor . "|" . $stok);
  fclose($file);

  header("Location: index.php");
?>