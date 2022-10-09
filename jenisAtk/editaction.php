<?php
  $idjenis = $_POST['idjenis'];
  $jenis = $_POST['jenis'];
  $temp = "p\n";
  $file = fopen("../assets/jenis.txt", "r");
  $data = [];

  while (!feof($file)) {
    $data[] = fgets($file);
  }
  fclose($file);

  $file = fopen("../assets/jenis.txt", "w");
  foreach ($data as $key => $value) {
    $value = explode("|", $value);

    if (!($value[0] < 2)) {
      if ($value[0] == $idjenis) {
        $value[1] = $jenis;
        $value[2] = $temp;
      }
    }

    $value = implode("|", $value);
    fwrite($file, $value);
  }

  fclose($file);
  header("Location: index.php");
?>
