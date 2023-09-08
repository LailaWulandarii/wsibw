<?php

/*mendefinisikan variabel tanggal dengan fungsi getdate()
untuk mengambil informasi dari tanggal, hari, dan waktu saat in*/
$tanggal = getdate();

/*mencetak informasi yang berasal dari fungsi getdate dengan elemen array yang 
dihasilkannya 'weekday' untuk hari dalam seminggu, 'mday' untuk hari dalam
sebulan, 'month' untuk nama bulan, dan 'year' untuk tahun*/ 
echo " Today is " . $tanggal['weekday'] . " " . $tanggal['mday']
 . " " . $tanggal['month'] . " " . $tanggal['year'] . "";

?>