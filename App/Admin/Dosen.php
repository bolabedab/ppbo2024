<?php

namespace App\Admin;

class Dosen extends Pegawai{
    public $nidn;

    public function __construct(string $nama, string $nidn, int $no_hp, int $nip, string $alamat) {
        parent::__construct($nama,$alamat,$nip,$no_hp);
        $this->nidn = $nidn;
    }

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
    
}