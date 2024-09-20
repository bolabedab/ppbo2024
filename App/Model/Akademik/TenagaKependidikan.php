<?php

namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

class TenagaKependidikan extends Pegawai{
    public $gaji_pokok;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, int $gaji_pokok){
        parent::__construct($nip,$nama,$no_hp,$alamat);
        $this->gaji_pokok=$gaji_pokok;
    }

    public function cuti(): void {
        echo "{$this->nama} sedang mengambil cuti";
    }
    
}