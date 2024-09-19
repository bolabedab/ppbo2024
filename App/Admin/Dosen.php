<?php

namespace App\Admin;

class Dosen extends Pegawai{
    public $nidn;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, int $nidn) {
        parent::__construct($nip,$nama,$no_hp,$alamat);
        $this->nidn = $nidn;
    }

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan\n";
    }
    
}