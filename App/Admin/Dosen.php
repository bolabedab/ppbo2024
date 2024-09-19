<?php

namespace App\Admin;

class Dosen extends Pegawai{
    public $nidn;

    public function __construct(string $nama, string $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
    
}