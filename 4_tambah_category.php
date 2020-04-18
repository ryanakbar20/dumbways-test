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

  $categories = query("SELECT * FROM categories");

    function tambah ($data) {
        global $conn;
        $nama = $data["nama"];
        $query = "INSERT INTO categories VALUES(
            NULL, '$nama'
        )";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    if (isset($_POST["submit"])) {
      if (tambah($_POST) > 0) {
        echo "<script>
                alert('Berhasil Menambah Category!');
                document.location.href = '4.php';
              </script>";
      } else {
        echo "Gagal Menambah Category!";
        echo mysqli_error($conn);
      }
    }

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
            <a href="4.php"><h2 class="h2">WARTEG KITAH</h2></a>
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
          <h1 style="margin-bottom: 30px;">Menambah Category</h1>
          <ol>
          <?php foreach ($categories as $i) : ?>
            <li>
              <p><?= $i["name"]; ?></p>
            </li>
          <?php endforeach; ?>
          </ol>
          <h1 style="margin-bottom: 30px;">Menambah Category</h1>
          <form action="" method="POST">
              <tr>
                  <td>
                      <label for="nama"><h4>Nama Category :</h4></label>
                      <input name="nama" type="text" id="nama" />
                  </td>
                  <br>
                  <td>
                      <button class="btn btn-large btn-block btn-primary" type="submit" name="submit">Buat Category</button>
                  </td>
              </tr>
          </form>
      </div>
      
    <!-- <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>