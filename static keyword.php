<?php
    
    class ContohStatic {
        public static $angka = 1;
        public static function halo() {
            return "Halo " . self::$angka++ . " kali.";
        }
    }
    //Tanpa instansiasi
    echo ContohStatic::$angka;
    echo "<br>";
    echo ContohStatic::halo(); 
    echo "<hr>";
    class Contoh {
        public static $angka = 1;   //Menggunakan static keyword tidak akan direset ketika instansiasi obj baru
        public function halo(){
            return "Halo " . self::$angka++ . " kali. <br>";
        }
    }
    $obj = new Contoh;
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();
    echo "<br>";
    $obj2 = new Contoh;
    echo $obj2->halo();
    echo $obj2->halo();
    echo $obj2->halo();