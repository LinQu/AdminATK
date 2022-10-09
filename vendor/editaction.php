<?php
  $idvendor = $_POST['idvendor'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $notelp = $_POST['notelp'];
  $email = $_POST['email'];
  $file = fopen("../assets/vendor.txt", "r");
  $data = "";

  while (!feof($file)) {
    $line = fgets($file);
    $line = explode("|", $line);

    if (!($line[0] < 2)) {
      if ($line[0] == $idvendor) {
        $line[1] = $nama;
        $line[2] = $alamat;
        $line[3] = $notelp;
        $line[4] = $email . PHP_EOL;
      }
      
      if (!isset($line[1])) {
        break;
      }

      $data .= $line[0] . "|" . $line[1] . "|" . $line[2] . "|" . $line[3] . "|" . $line[4];
    }
  }

  //delete |
  // $data = substr($data, 0, -1);
  fclose($file);

  $file = fopen("../assets/vendor.txt", "w");
  fwrite($file, $data);
  fclose($file);

  header("Location: index.php");
?>
