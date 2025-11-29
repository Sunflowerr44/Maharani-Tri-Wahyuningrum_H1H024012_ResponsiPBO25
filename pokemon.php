<?php
abstract class Pokemon {
    protected $nama;
    protected $tipe;
    protected $level;
    protected $hp;

    public function __construct ($nama, $tipe, $level, $hp) {
        $this->nama = $nama;
        $this->tipe = $tipe;
        $this->level = $level;
        $this->hp = $hp;
    }

    public function getnama() {
        return $this->nama;
    }
    public function gettipe() {
        return $this->tipe;
    }
    public function getlevel() {
        return $this->level;
    }
    public function gethp() {
        return $this->hp;
    }

    public abstract function specialMove();

    public function train($jenisLatihan, $intensitas) {
        $levelAwal = $this->level;
        $hpAwal = $this->hp;

        
        if ($jenisLatihan == "Attack") {
            $this->level += 1;
            $this->hp += 3 * $intensitas;
        }
        else if ($jenisLatihan == "Defense") {
            $this->level += 1;
            $this->hp += 2 * $intensitas;
        }
        else if ($jenisLatihan == "Speed") {
            $this->level += 1;
            $this->hp += 1 * $intensitas;
        }
        return [
            "levelAwal" => $levelAwal,
            "hpAwal" => $hpAwal,
            "levelAkhir" => $this->level,
            "hpAkhir" => $this->hp
        ];
    }


}

class Pidgeotto extends Pokemon {
    public function __construct() {
        $this->nama = "Pidgeotto";
        $this->tipe = "Flying";
        $this->level = 18;
        $this->hp = 63;
    }
    public function specialMove() {
        return "Gust : Gerakan tipe terbang yang dipelajari oleh Pidgeotto yang merupakan tahap evolusi dari Pidgey. Gerakan ini menghasilkan angin kencang untuk menyerang lawan.";
    }
}