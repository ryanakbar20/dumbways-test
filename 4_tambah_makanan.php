<?php

    $conn = mysqli_connect('localhost', 'root', '', 'dumbways');

    function tambah ($data) {
        global $conn;
        $nama = $data["nama"];
        $stok = $data["stok"];
        $gambar = $data["gambar"];
        $deskripsi = $data["deskripsi"];
        $category = $data["category"];
        if ($category = 'Makanan Kuah') {
          $category = 1;
        }
        if ($category = 'Makanan Kering') {
          $category = 2;
        }
        if ($category = 'Minuman Dingin') {
          $category = 3;
        }
        $query = "INSERT INTO foods VALUES (
            NULL, '$nama', '$stok', '$gambar', '$deskripsi', '$category'
        )";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    if (isset($_POST["submit"])) {
      if (tambah($_POST) > 0) {
        echo "<script>
                alert('Berhasil Menambah Makanan!');
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
          <h1 style="margin-bottom: 30px;">Menambah Makanan</h1>
          <form action="" method="POST" enctype="multipart/form-data">
              <tr>
                  <td>
                      <label for="nama"><h4>Nama Makanan :</h4></label>
                      <input name="nama" type="text" id="nama" />
                  </td>
                  <td>
                      <label for="deskripsi"><h4>Deskripsi Makanan :</h4></label>
                      <input name="deskripsi" type="text" id="deskripsi" />
                  </td>
                  <td>
                      <label for="stok"><h4>Stok Makanan :</h4></label>
                      <input name="stok" type="number" id="stok" />
                  </td>
                  <td>
                      <label for="category"><h4>Category Makanan :</h4></label>
                      <select multiple="multiple">
                        <option>Makanan Kuah</option>
                        <option>Makanan Kering</option>
                        <option>Minuman Dingin</option>
                     </select>
                  </td>
                  <td>
                      <label for="gambar"><h4>Gambar Makanan :</h4></label>
                      <input name="gambar" type="file" id="gambar" />
                  </td>
                  <br>
                  <td>
                      <button class="btn btn-large btn-block btn-primary" type="submit" name="submit">Buat Makanan</button>
                  </td>
              </tr>
          </form>
      </div>
      
    <!-- <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>