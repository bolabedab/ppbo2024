<?php

namespace App\Admin;

class TenagaKependidikan extends Pegawai{
    public $gaji_pokok;

    public function __construct(int $gaji_pokok, int $nip, int $no_hp, string $nama, string $alamat){
        parent::__construct($alamat,$nama,$no_hp,$nip);
        $this->gaji_pokok=$gaji_pokok;
    }

    public function cuti(): void {
        echo "{$this->nama} sedang mengambil cuti";
    }
    
}