<?php
    $conn = mysqli_connect('localhost', 'root', '', 'dumbways');

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    $makanankering = query("SELECT * FROM foods WHERE category_id = 2");
    $makanankuah = query("SELECT * FROM foods WHERE category_id = 1");
    $minumandingin = query("SELECT * FROM foods WHERE category_id = 3");

    $stok = 0;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Warteg Kita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" >
  </head>
  <body>
    <div class="container">
      <div class="nav">
        <table>
        <tr>
          <td>
            <h2 class="h2">WARTEG KITAH</h2>
          </td>
          <td>
            <a href="4_tambah_category.php"><h3 class="h2">Tambah Kategori</h3></a>
          </td>
          <td>
            <a href="4_tambah_makanan.php"><h3 class="h2">Tambah Makanan</h3></a>
          </td>
        </tr>
        </table>
      </div>
      <h1 style="margin-bottom: 30px;">Menu Makanan</h1>
        <div class="categories">
          <h3>Makanan Kuah</h3>
          <?php foreach ($makanankuah as $food) : ?>
            <div class="box">
                <a href="4_detail.php?id=<?= $food["id"]; ?>">
                <img src="image/<?= $food["image"]; ?>" style="width: 200px; height: 200px;">
                </a>
                <div class="box-components">
                  <div>
                  <h3><?= $food["name"] ?></h3>
                  <p>Stok : <?= $food["stok"]; ?> </p>
                  <button class="btn btn-large btn-block btn-primary">BELI</button>
                  </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="categories">
          <h3>Makanan Kering</h3>
          <?php foreach ($makanankering as $food) : ?>
            <div class="box">
              <a href="4_detail.php?id=<?= $food["id"]; ?>">
                <img src="image/<?= $food["image"]; ?>" style="width: 200px; height: 200px;">
                </a>
                <div class="box-components">
                  <div>
                  <h3><?= $food["name"] ?></h3>
                  <p>Stok : <?= $food["stok"]; ?> </p>
                  <button class="btn btn-large btn-block btn-primary">BELI</button>
                  </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="categories">
          <h3>Minuman Dingin</h3>
          <?php foreach ($minumandingin as $food) : ?>
            <div class="box">
                <a href="4_detail.php?id=<?= $food["id"]; ?>">
                <img src="image/<?= $food["image"]; ?>" style="width: 200px; height: 200px;">
                </a>
                <div class="box-components">
                  <div>
                  <h3><?= $food["name"] ?></h3>
                  <p>Stok : <?= $food["stok"]; ?> </p>
                  <button class="btn btn-large btn-block btn-primary">BELI</button>
                  </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>