<?php

date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$jam = date('H');
if ($jam >=3 && $jam < 11){
    $waktu = "Selamat pagi";
} else if ($jam >= 11 && $jam < 15){
    $waktu = "Selamat Siang";
} else if ($jam >= 15 && $jam < 18){
    $waktu = "Selamat Sore";
} else {
    $waktu = "Selamat malam";
}
echo "{$waktu}, {$nama} sekarang pukul {$jam}\n";