<?php

namespace App\Model\Akademik;

class Pegawai{
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn(){
        echo "{$this->nama} berhasil cek in\n";
        return true;
    }

    public function cekOut(){
        echo "{$this->nama} berhasil cek out\n";
        return true;
    }

    public function setNo_hp($no_hp){
        $this->no_hp = $no_hp;
    }

    protected function getNo_hp(){
        return $this->no_hp;
    }
}