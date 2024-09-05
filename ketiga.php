<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas($jari_jari) : float {
        return self::PHI*$jari_jari*$jari_jari;
    }

    public function keliling($jari_jari) : float {
        return 2*self::PHI*$jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume($jari_jari) : float {
        return (4/3)*self::PHI*pow($jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function volume($jari_jari,$tinggi) : float {
        return self::PHI*pow($jari_jari,2)*$tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function volume($jari_jari,$tinggi) : float {
        return (1/3)*self::PHI*pow($jari_jari,2)*$tinggi;
    }
}

$nasi_tumpeng = new Kerucut();
echo "Volume Nasi tumpeng adalah ".$nasi_tumpeng->volume(4,10);

$bola = new Bola();
echo "\nVolume bola adalah {$bola->volume(7)}";

$volumeTabung = new Tabung();
echo "\nVolume tabung adalah {$volumeTabung->volume(5, 15)}";