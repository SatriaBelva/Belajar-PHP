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
                    $tipe,
                    $halaman,
                    $jam;

            public function getLabel(){
                return "{$this->penulis}, {$this->penerbit}";
            }

            public function __construct($judul = 'default', $penulis = 'default', $penerbit = 'default', $harga = 0, $tipe = "default", $halaman = 0, $jam = 0){
                $this -> judul    = $judul;
                $this -> penulis  = $penulis;
                $this -> penerbit = $penerbit;
                $this -> harga    = $harga;
                $this -> halaman  = $halaman;
                $this -> jam      = $jam;
                $this -> tipe     = $tipe;
            }

            public function infoProduk() {
                $info = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
                if($this->tipe == "Komik"){
                    $info.=" Jumlah Halaman : {$this->halaman} Halaman";
                }
                elseif($this->tipe == "Game"){
                    $info.= " Hours Play : {$this->jam} Jam";
                }
                return $info;
            }
        }
        $produk1 = new Produk('Jujutsu Kaisen');
        $produk2 = new Produk('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 500000, "Komik", 0, 100);

        echo $produk2->infoProduk();
    ?>
</body>
</html>