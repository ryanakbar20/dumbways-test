<?php 

    function cetak ($ganjil) {
        $total = $ganjil * $ganjil;

        for ( $i = 1; $i < $total; $i++) {
            if ($i % $ganjil == 0) {
                echo "<br>";
            } echo "*";
        }
    }

    echo cetak(5);
?>