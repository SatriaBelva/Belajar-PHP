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
                return "Judul : ". $this->judul . "<br>" .  
                       "Penulis : ". $this->penulis .  "<br>" .  
                       "Penerbit : ". $this->penerbit . "<br>" .
                       "Harga : $this->harga <br>";
            }
        }

        $produk1 = new Produk();

        $produk2 = new Produk();
        $produk2->judul    = 'Cara Mendapat Uang';
        $produk2->penulis  = 'Satria Belva';
        $produk2->penerbit = 'PT Anjay Mabar';
        $produk2->harga    = 500000;
        
        $produk3 = new Produk();
        $produk3->judul    = 'Coba Coba';
        $produk3->penulis  = 'Bejo';
        $produk3->penerbit = 'PT Awalnya Coba Coba';
        $produk3->harga    = 500000;

        echo "<br>";
        echo "Informasi Produk 1 : <br>". $produk2->getLabel() . "<br>";
        echo "Informasi Produk  2 : <br>". $produk3->getLabel();
        echo "<br>"
    ?>
    <?php
        // Class dan Object
        class tes{ // Class
            public $warna    = 'Merah';  // Property
            private $ukuran  = 32;       // Property  
            protected $harga = 50000;    // Property

            public  function infoProduk(){ // Method    
                echo "Warna : ". $this->warna . "<br>";
                echo "Ukuran : ". $this->ukuran . "<br>";
                echo "Harga : Rp." . number_format($this->harga) . "<br><hr>";
            }
        }

        $a =  new tes();
        $b =  new tes();

        var_dump($a);
        echo "<br>";
        var_dump($b)
    ?>
</body>
</html>