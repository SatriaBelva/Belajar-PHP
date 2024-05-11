<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Produk {
            public    $judul, 
                      $penulis,
                      $penerbit,
                      $harga;
            protected $diskon = 0;
            private   $anjay = "lololol";

            public function getLabel(){
                return "{$this->penulis}, {$this->penerbit}";
            }

            public function __construct($judul = 'default', $penulis = 'default', $penerbit = 'default', $harga = 0){
                $this -> judul    = $judul;
                $this -> penulis  = $penulis;
                $this -> penerbit = $penerbit;
                $this -> harga    = $harga;
            }

            public function infoProduk() {
                $info = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
                return $info;
            }

            public function getAnjay(){
                return  $this->anjay;
            }

        }

        class komik extends Produk {
            public $halaman;

            public function __construct($judul = 'default', $penulis = 'default', $penerbit = 'default', $harga = NULL, $halaman = 0){
                parent::__construct($judul,$penulis,$penerbit,$harga);
                $this->halaman = $halaman;
            }
            
            public function infoProduk(){
                $info = "Komik : ". parent::infoProduk() ." Jumlah Halaman : {$this->halaman} halaman";
                return $info;
            }
        }

        class game extends Produk {
            public $jam;

            public function __construct($judul = 'default', $penulis = 'default', $penerbit = 'default', $harga = NULL, $jam = 0){
                parent::__construct($judul,$penulis,$penerbit,$harga);
                $this->jam = $jam;
            }

            public function infoProduk(){
                $info = "Game : ". parent::infoProduk() ." Hours Play : {$this->jam} jam";
                return $info;
            }

            public function getDiskon($diskon){
                return $this->harga - ($this->harga * ($diskon/100));
            }
        }

        $produk1 = new komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 50000, 100);
        $produk2 = new game('GTA VI', 'Ganjar Pranowo', 'Rockstar North', 500000, 200);
        $produk3 = new produk('GTA VI', 'Ganjar Pranowo', 'Rockstar North', 500000, 200);
        
        echo $produk1->infoProduk();
        echo "<br>";
        echo $produk2->infoProduk();
        echo "<hr>";
        echo $produk2->getDiskon(50);
        echo "<br>";
        echo $produk3->getAnjay();
        
    ?>
</body>
</html>