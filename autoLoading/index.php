<?php
    require_once 'App/init.php';
    $produk1 = new Komik("Naruto", "Kishimotto", "bitnami", 25000, 100);

$produk2 = new Game("Uncharted", "Neil", "Sony", 250000, 50);
    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();