<?php 
$nilai = 90;

  if($nilai >= 90 && $nilai >= 100){
    echo "Nilai : A<br>";
    echo "Keterangan : Baik Sekali";
  }
  elseif($nilai >= 76 && $nilai >= 89){
    echo "Nilai : B<br>";
    echo "Keterangan : Baik";
  }
  elseif($nilai >= 60 && $nilai >= 75){
    echo "Nilai : C<br>";
    echo "Keterangan : Cukup";
  }
  elseif($nilai >= 50 && $nilai >= 59){
    echo "Nilai D<br>";
    echo "Keterangan : Hampir Cukup";
  }
  else{
    echo "Nilai E<br>";
    echo "Keterangan : Kurang";
  }
?>