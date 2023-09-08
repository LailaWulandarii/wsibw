<?php
// Matriks pertama
$matrixA = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks kedua
$matrixB = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Matriks hasil penjumlahan
$hasil = array();

// Melakukan penjumlahan matriks
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $hasil[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
    }
}

// Menampilkan matriks hasil
echo "Matriks Hasil Penjumlahan:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $hasil[$i][$j] . " ";
    }
    echo "\n";
}
?>
