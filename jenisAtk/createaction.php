<?php
  $idjenis = $_POST['idjenis'];
  $jenis = $_POST['jenis'];
  $temp = "p";


  $file = fopen("../assets/jenis.txt", "a");
  fwrite($file, $idjenis . "|" . $jenis . "|" . $temp . PHP_EOL);
  fclose($file);
  header("Location: index.php");
?>