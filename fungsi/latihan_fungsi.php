<?php
echo "MEMBUAT FUNGSI \n";

function berhasil(){
    echo "SELAMAT ANDA BERHASIL\n";}

function gagal(){
    echo "MAAF ANDA GAGAL\n";}

$nilai = 90;
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();}

echo "FUNGSI DENGAN PARAMETER\n";

function jumlah($a, $b){
    return $a + $b;}

$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1, $nilai2);

echo "FUNGSI BAWAAN\n";

$sekarang = getdate();
print_r($sekarang);

echo "Sekarang Tanggal : " . $sekarang["mday"];
?>
