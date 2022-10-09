<?php
  $idvendor = $_POST['idvendor'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $notelp = $_POST['notelp'];
  $email = $_POST['email'] . "\n";

  $file = fopen("../assets/vendor.txt", "a");
  fwrite($file, $idvendor . "|" . $nama . "|" . $alamat . "|" . $notelp . "|" . $email);
  fclose($file);
  header("Location: index.php");
?>