<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function KelilingLingkaran($jari) : float {
    $keliling = 3.14*2*$jari;
    return $keliling;
}

function VolumeBola($jari) : float {
    $vb = 4/3*3.14*($jari**3);
    return $vb;
}

function VolumeTabung($jari,$tinggi) : float {
    $vt = 3.14*$jari*$jari*$tinggi;
    return $vt;
}

function VolumeKerucut($jari,$tinggi) : float {
    $vk = 1/3*3.14*$jari*$jari*$tinggi;
    return $vk;
}
$kelilinglingkaran=KelilingLingkaran(45);
echo "Keliling lingkaran = {$kelilinglingkaran}\n";
$vbola=VolumeBola(45);
echo "Volume bola = {$vbola}\n";
$vtabung=VolumeTabung(45,10);
echo "Volume tabung = {$vtabung}\n";
$vkerucut=VolumeKerucut(45,10);
echo "Volume kerucut = {$vkerucut}";