<?php
   include "Orang.php";
   ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    </div>
         <?php
         // proses instansiasi
         $mahasiswa = new Orang('Aisyifa Arum');
         
         // menggunakan setter dan getter
         $mahasiswa->setNama('Aisyifa Arum');
         $mahasiswa->setTglLahir('2005-10-16');
         $mahasiswa->setAlamat('Desa Awin, Pemayung');

         echo "<br>";
         echo "Data Mahasiswa ". $mahasiswa->getNama() . "<br>";
         echo "Nama : " . $mahasiswa->getNama() . "<br>";
         echo "Tgl Lahir : " . $mahasiswa->getTglLahir() . "<br>";
         echo "Alammat : " . $mahasiswa->getAlamat() . "<br>";

         // memanggil method
         $mahasiswa->ucapkanSalam();
         echo "<Br>";

         $mahasiswa2 = new Orang('Levi Ackerman');
         
         $mahasiswa2->ucapkanSalam();

    ?>
  </div>

</body>
</html>