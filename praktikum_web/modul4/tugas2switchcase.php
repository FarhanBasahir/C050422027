<?php 
$nilai = 95;

switch(true){
  case($nilai >= 90 && $nilai >= 100):
    echo "Nilai : A<br>";
    echo "Baik Sekali";
    break;
  case($nilai >= 76 && $nilai >= 89):
    echo "Nilai : B<br>";
    echo "Baik";
    break;
  case($nilai >= 60 && $nilai >= 75):
    echo "Nilai : C<br>";
    echo "Cukup";
    break;
  case($nilai >= 50 && $nilai >= 59):
    echo "Nilai : D<br>";
    echo "Hampir Cukup";
    break;
  default:
    echo "Nilai : E<br>";
    echo "Kurang";
  }
?>