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
            public  $judul, 
                    $penulis,
                    $penerbit,
                    $harga;

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
        }

        $produk1 = new komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 50000, 100);
        $produk2 = new game('GTA VI', 'Ganjar Pranowo', 'Rockstar North', 500000, 200);
        
        echo $produk1->infoProduk();
        echo "<br>";
        echo $produk2->infoProduk();

    ?>
</body>
</html>