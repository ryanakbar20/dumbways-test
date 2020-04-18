<?php

$conn = mysqli_connect('localhost', 'root', '', 'dumbways');

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM foods WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    $id = $_GET["id"];

    if ($_GET["id"]) {
        if (hapus($id) > 0) {
            echo "<script>
                    alert('DATA BERHASIL DI HAPUS');
                    document.location.href  = '4.php'
                  </script>
            ";
        } else {
            echo "DATA GAGAL DIHAPUS";
            echo mysqli_error($conn);
        }
    }
?>