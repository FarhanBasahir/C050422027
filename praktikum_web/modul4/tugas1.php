<?php 
$jumlah_lembar = 158;

if ($jumlah_lembar < 100){
  $harga_per_lembar = 150; 
}elseif ($jumlah_lembar >= 100 && $jumlah_lembar <= 200){
  $harga_per_lembar = 100;
}else{
  $harga_per_lembar = 80;
}
$biaya_total = $jumlah_lembar * $harga_per_lembar;

echo "Jumlah Lembar Photocopy: $jumlah_lembar lembar<br>";
echo "Harga per Lembar Photocopy: Rp. $harga_per_lembar<br>";
echo "Biaya Total: $biaya_total<br>";
?>