<?php 
  function tampil_ganjil(){
    $jumlah = 1;
    for ($i =10; $i<=123456; $i++) {
      if ($i % 2 == 1){
        $jumlah++;
      }
    }
    return $jumlah;
  }

  //pemanggil fungsi
  echo "Bilangan ganjil dari 10-123456 :<br>";
  echo tampil_ganjil();
?>