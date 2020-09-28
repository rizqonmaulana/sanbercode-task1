<?php

trait hewan {
    public  $nama,
            $darah = 50,
            $jumlahkaki,
            $keahlian;

    public function atraksi(){
        return "$this->nama sedang $this->keahlian";
    }
}

trait fight{
    public  $attackPower,
            $defensePower;
            

    public function serang($diserang){
        return "$this->nama sedang menyerang $diserang";
    }

    public function diserang($attackPenyerang, $defenseDiserang){    
        $darah = $this->darah;

        $darahSekarang = $this->darah = $darah - ($attackPenyerang / $defenseDiserang);

        return "$this->nama sedang diserang. darah $this->nama sekarang adalah $darahSekarang";
    }


}


class elang{
    use hewan, fight;

    public $jenis = 'elang';

    public function __construct($nama){
        $this->nama = $nama;
        $this->jumlahkaki = 2;
        $this->keahlian = 'terbang tinggi';
        $this->attackPower = 10;
        $this->defensePower = 5;
    }

    public function getInfoHewan(){
        return [$this->nama, $this->darah, $this->jumlahkaki, $this->keahlian, $this->attackPower, $this->defensePower, $this->jenis];
    }
}


class harimau{
    use hewan, fight;

    public $jenis = 'harimau';

    public function __construct($nama){
        $this->nama = $nama;
        $this->jumlahkaki = 4;
        $this->keahlian = 'lari cepat';
        $this->attackPower = 7;
        $this->defensePower = 8;
    }

    public function getInfoHewan(){
        return [$this->nama, $this->darah, $this->jumlahkaki, $this->keahlian, $this->attackPower, $this->defensePower, $this->jenis];
    }
}

echo "Game Pertarungan Hewan <hr>";
echo "Profil : <br>";
$elang = new elang('adit');
$getElang = $elang->getInfoHewan();
foreach ( $getElang as $info ) {
    echo "$info | ";
}

echo "<br>";

$harimau = new harimau('bobo');
$getHarimau = $harimau->getInfoHewan();
foreach ( $getHarimau as $info ) {
    echo "$info | ";
}
echo "<br><br>";

echo "menggunakan skill :<br>";

echo $elang->atraksi();
echo "<br>";
echo $harimau->atraksi();
echo "<br><br>";

echo "bertarung :";
echo "<br>";
echo $elang->serang($harimau->nama);
echo "<br>";
echo $harimau->diserang($elang->attackPower, $harimau->defensePower);
echo "<br>";
echo $elang->serang($harimau->nama);
echo "<br>";
echo $harimau->diserang($elang->attackPower, $harimau->defensePower);
echo "<br>";
echo $elang->serang($harimau->nama);
echo "<br>";
echo $harimau->diserang($elang->attackPower, $harimau->defensePower);
echo "<br>";
echo $elang->serang($harimau->nama);
echo "<br>";
echo $harimau->diserang($elang->attackPower, $harimau->defensePower);
echo "<br>";
echo $elang->serang($harimau->nama);
echo "<br>";
echo $harimau->diserang($elang->attackPower, $harimau->defensePower);
echo "<br>";
echo $harimau->serang($elang->nama);
echo "<br>";
echo $elang->diserang($harimau->attackPower, $elang->defensePower);
echo "<br>";
echo $harimau->serang($elang->nama);
echo "<br>";
echo $elang->diserang($harimau->attackPower, $elang->defensePower);
echo "<br>";
echo $harimau->serang($elang->nama);
echo "<br>";
echo $elang->diserang($harimau->attackPower, $elang->defensePower);
echo "<br>";
echo $harimau->serang($elang->nama);
echo "<br>";
echo $elang->diserang($harimau->attackPower, $elang->defensePower);
echo "<br>";
echo $harimau->serang($elang->nama);
echo "<br>";
echo $elang->diserang($harimau->attackPower, $elang->defensePower);

echo "<hr>";

echo "status sekarang :";

echo "<br>";
$getElang = $elang->getInfoHewan();
foreach ( $getElang as $info ) {
    echo "$info | ";
}

echo "<br>";

$getHarimau = $harimau->getInfoHewan();
foreach ( $getHarimau as $info ) {
    echo "$info | ";
}
