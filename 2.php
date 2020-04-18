<?php

    $belanja = 0;
    $uang = 0;
    $kembali = 0;
    $diskon = 0;
    $total = 0;

if (isset($_POST["submit"])) {
    $belanja = $_POST["belanja"];
    $uang = $_POST["uang"];
    $kembali = $uang - $belanja;
    $diskon = 0;
    if ($uang >= 200000) {
        $diskon = 20000;
    }
    $total = $kembali + $diskon;
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Vending Machine</title>
  </head>
  <body>
      <h1>Dumbways Vending Machine</h1>
      <form action="" method="POST">
        <ul>
            <li>
                <label for="belanja">Total Belanja : </label><br>
                <input type="number" name="belanja" id="belanja"/>
            </li>
            <br>
            <li>
                <label for="uang">Jumlah Uang : </label><br>
                <input type="number" name="uang" id="uang"/>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Hitung!</button>
            </li>
            <br>
            <li>
                <h3>Kembalian : <?= $kembali ?></h3>
                <h3>Diskon : <?= $diskon ?></h3>
                <h3>Total Kembali : <?= $total ?></h3>
            </li>
        </ul>
      </form >
  </body>
</html>