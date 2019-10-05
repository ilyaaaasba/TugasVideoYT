 <?php
 //jual produk
 //komik
 //game

 class produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;


    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

 }

//  $produk1 = new Produk();
//  $produk->judul = "Naruto";

//  $produk2 = new Produk();
//  $produk->judul = "uncharted";
//  var_dump($produk1);

$produk1 = new Produk("Naruto", "Kishimotto", "bitnami", 25000);


 $produk2 = new produk("Uncharted", "Neil", "Sony", 250000);


 echo "Komik : ". $produk1->getLabel();
 echo "<br>";
 echo "Game : ". $produk2->getLabel();
 ?>