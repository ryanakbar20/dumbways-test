<?php 
 $id = $_GET["id"];

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

    $data = query("SELECT * FROM foods WHERE id = $id");
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
      <h1 style="margin-bottom: 30px;">Detail Makanan</h1>
        <div class="categories">
          <?php foreach ($data as $food) : ?>
            <div class="boxmedium">
                <img src="image/<?= $food["image"]; ?>" style="width: 400px; height: 400px;">
                <div class="box-components">
                  <div>
                  <h3><?= $food["name"] ?></h3>
                  <p>Stok : <?= $food["stok"]; ?> </p>
                  <h3><?= $food["deskripsi"] ?></h3>
                  <button class="btn btn-large btn-block btn-primary">BELI</button>
                  <a href="4_hapus.php?id=<?= $food["id"]; ?>"><button class="btn btn-large btn-block btn-danger">HAPUS</button></a>
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