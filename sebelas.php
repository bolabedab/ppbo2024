<?php

require_once 'vendor/autoload.php';

use App\Model\Akademik\Dosen;

$dian = new Dosen(198411132015041001, "Dian Prawira", 62111111, "Jln Purnama", "0013118405");
$dian->nidn = "10013810808101";
$dian->getNo_hp();
$dian->mengajar();

