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

            public function __construct($judul = 'default', $penulis = 'default', $penerbit = 'default', $harga = 0){
                $this -> judul    = $judul;
                $this -> penulis  = $penulis;
                $this -> penerbit = $penerbit;
                $this -> harga    = $harga;
            }
        }

        class cetak {
            public function cetakInfo(Produk $produk){
                return "{$produk->getLabel()}";
            }
        }

        $produk1 = new Produk('Jujutsu Kaisen');
        $produk2 = new Produk('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 500000);


        $anjay = new cetak();
        echo $anjay->cetakInfo($produk2);
    ?>
</body>
</html>