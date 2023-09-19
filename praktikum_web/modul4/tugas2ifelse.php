<?php 
$nilai = 90;

  if($nilai >= 90 && $nilai >= 100){
    echo "Nilai : A<br>";
    echo "Baik Sekali";
  }
  elseif($nilai >= 76 && $nilai >= 89){
    echo "Nilai : B<br>";
    echo "Baik";
  }
  elseif($nilai >= 60 && $nilai >= 75){
    echo "Nilai : C<br>";
    echo "Cukup";
  }
  elseif($nilai >= 50 && $nilai >= 59){
    echo "Nilai D<br>";
    echo "Hampir Cukup";
  }
  else{
    echo "Nilai E<br>";
    echo "Kurang";
  }
?>