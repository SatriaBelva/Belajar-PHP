<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Part 2</title>
</head>
<body>
    <?php // Scopes
        // Global Scopes
        // $tes = 'Ini Adalah Global Scopes';
        // echo $tes;

        // // Local Scopes
        // $nama = 'Satria Belva Nararya';
        // $umur = 23;
        // function tesScopes(){
        //     $hobby = 'Belajar';
        //     global $nama;
        //     return "Nama Saya Adalah $nama yang berumur ".$GLOBALS['umur'].
        //     ' dan hobby saya adalah '.$hobby;
        // }

        // echo  '<br><br>';
        // $a = tesScopes();
        // echo $a;
        
        // // Static Scopes
        // function staticscopes(string $nama){
        //     $daftarNama = [];
        //     $jumlahNama = 0;

        //     $daftarNama[] = $nama;
        //     $jumlahNama ++ ;
        //     return implode(",\n", $daftarNama)."<br>Jumlah Nama Adalah $jumlahNama<br>";
        // }
        
        // echo '<br><br>';
        // echo staticscopes("Satria");
        // echo staticscopes("Belva")
        ?>

    <?php
        // Const
        // echo '<br><br>';
        // $nama = 'Satria';
        // $nama = 'Bejo';
        // echo $nama;
        // echo '<br><br>';
        
        // define("NAMA", "Satria Belva Nararya");
        // define("UMUR", 23);
        // const HOBBY = "Belajar";
        
        // echo "Nama saya Adalah ".NAMA." dengan Umur "
        // .UMUR." dan hobi saya adalah ".HOBBY;
        // ?>

    <?php
        // Looping  
        // $tes = 4; // Perlu Diingat
        // echo ($tes + 4) . "<br>"; // Line ini hanya menambahkan nilai sementara dan tidak mengubah nilai variabelnya
        // echo ($tes ++ ) . "<br>"; // Line ini menambahkan 1 dan mengubah nilai variabel &tes secara permanen
        // echo ($tes +=4) . "<br>"; // Line ini juga menambahkan nilai 4 ke variabel &tes secara permanen
        
        // // For
        // $tes = 10;
        // for($i=1; $i <= $tes; $i+=1){
        //     echo "Ini adalah iterasi nomer ke-".$i. "<br>";
        //     if($i==5){
        //         echo "anjay slebew meledak <br>";
        //     }
        // }
        
        // Do - While
        // $a = 10;
        // while ($a <= 30) {
        //     echo "ini iterasi ke-".($a-10).
        //     " dan nilai variabel a saat ini adalah $a<br>";
        //     $a++;
        //     switch($a){
        //         case 12 : echo "12 SPESIAL ";
        //         break;
        //         case 18: echo "18 GORENGAN ";
        //         break;
        //         case 20: echo "20 GACOR ";
        //     }
        // }

        // $b = 9;
        // do {
        //     echo "ini adalah iterasi juga";
        //     $b -= 1;
        // }while($b>=10);

        // For Each
        // $buah = array('Apel', 'Anggur', 'Durian', 'Jeruk');
        // $buahBaru = [];
        // foreach ($buah as $i){
        //     $buahBaru[] = $i.' Baru';
        // }
        // print_r($buahBaru);

        // echo '<br><br>';

        // $identitasDiri = 
        // [
        //     'nama' => 'Satria Belva Nararya',
        //     'umur'=> 23,
        //     'kelas'=> 'PWEB A'
        // ];
        // function identitasDiri(){
        //     global $identitasDiri;
        //     echo "Identitas Mahasiswa : <br>";
        //     foreach ($identitasDiri as $key => $value) {
        //         echo "$key : $value <br>";
        //     }
        // }
        // identitasDiri();

        // echo "<br>";
        // $nama = 'Satria Belva Nararya';
        // $iterasi = 1;
        // foreach(str_split($nama) as $huruf){
        //     if($iterasi === 12){
        //         break;
        //     }
        //     elseif($huruf != ' '){
        //         echo "Huruf ke-$iterasi Adalah $huruf <br>";
        //         $iterasi ++;
        //     }
        //     elseif($huruf === ' '){
        //         echo "<br>";
        //     }
        //}
    ?>

    <?php
        // Database

    ?>
</body>
</html>