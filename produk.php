 <?php
 //jual produk
 //komik
 //game

 class produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

 }

//  $produk1 = new Produk();
//  $produk->judul = "Naruto";

//  $produk2 = new Produk();
//  $produk->judul = "uncharted";
//  var_dump($produk1);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Kishimotto";
$produk3->penerbit = "bitnami";
$produk3->harga = 30000;

// echo "komik : $produk3->penulis, $produk3->penerbit";
//  echo "<br>";
//  echo $produk3->getLabel();
//  echo "<br>";

 $produk4 = new produk();
 $produk4->judul = "uncharted";
 $produk4->penulis = "Neil Druckmann";
 $produk4->penerbit = "sony computer";
 $produk4->harga = 250000;

 echo "Komik : ". $produk3->getLabel();
 echo "<br>";
 echo "Game : " . $produk4->getLabel();
 ?>