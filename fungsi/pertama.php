<?php

//mendefinisikan variabel angka1 dan angka2 beserta isian datanya
$angka1 = 31;
$angka2 = 8;

/*menggunakan logika if else dimana jika nilai dari variabel
angka1 lebih besar dari nilai variabel angka2 maka akan akan 
mencetak bahwa angka terbesarnya adalah nilai dari variabel angka1,
jika kondisi tersebut tidak terpenuhi maka akan mencetak nilai dari variabel2
sebagai angka terbesarnya*/ 
if ($angka1 > $angka2){
    echo "Angka terbesarnya adalah: " . $angka1;
 }else {
    echo "Angka terbesar adalah: " . $angka2;
 }
 ?>