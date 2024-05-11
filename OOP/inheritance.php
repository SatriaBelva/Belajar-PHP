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
                    $harga,
                    $halaman,
                    $jam;

            public function getLabel(){
                return "{$this->penulis}, {$this->penerbit}";
            }

            public function __construct($judul = 'default', $penulis = 'default', $penerbit = 'default', $harga = 0, $halaman = 0, $jam = 0){
                $this -> judul    = $judul;
                $this -> penulis  = $penulis;
                $this -> penerbit = $penerbit;
                $this -> harga    = $harga;
                $this -> halaman  = $halaman;
                $this -> jam      = $jam;
            }

            public function infoProduk() {
                $info = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
                return $info;
            }
        }

        class komik extends Produk {
            public function infoProduk(){
                $info = "Komik : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) Jumlah Halaman : {$this->halaman} halaman";
                return $info;
            }
        }
        class game extends Produk {
            public function infoProduk(){
                $info = "Game : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) Hours Play : {$this->jam} jam";
                return $info;
            }
        }

        $produk1 = new komik('Jujutsu Kaisen');
        $produk2 = new game('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 500000, "Komik", 100, 0);
        
        echo $produk1->infoProduk();
        echo "<br>";
        echo $produk2->infoProduk();

    ?>
</body>
</html>