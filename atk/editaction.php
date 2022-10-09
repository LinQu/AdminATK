<?php
  $id = $_POST['idatk'];
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $vendor = $_POST['vendor'];
  $stok = $_POST['stok'];
  $file = fopen("../assets/data.txt", "r");
  $data = "";

  while (!feof($file)) {
    $line = fgets($file);
    $line = explode("|", $line);

    if (!($line[0] < 2)) {
      if ($line[0] == $id) {
        $line[1] = $nama;
        $line[2] = $jenis;
        $line[3] = $vendor;
        $line[4] = $stok . PHP_EOL;
      }
      $data .= $line[0] . "|" . $line[1] . "|" . $line[2] . "|" . $line[3] . "|" . $line[4];
    }
  }
  
  // $data = substr($data, 0, -1);
  fclose($file);

  $file = fopen("../assets/data.txt", "w");

  fwrite($file, $data);
  fclose($file);

  header("Location: index.php");
?>
