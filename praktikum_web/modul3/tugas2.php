<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas2</title>
</head>
<body>
<?php
// Input
$radiusAlas = 5; // Radius alas kerucut
$tinggiKerucut = 10; // Tinggi kerucut

// Menghitung luas alas kerucut
$luasAlas = pi() * pow($radiusAlas, 2);

// Menghitung garis pelukis (sisi miring) kerucut
$garisPelukis = sqrt(pow($radiusAlas, 2) + pow($tinggiKerucut, 2));

// Menghitung luas permukaan kerucut
$luasPermukaan = pi() * $radiusAlas * ($radiusAlas + $garisPelukis);

// Output hasil
echo "Radius Alas Kerucut = " .$radiusAlas. "<br>";
echo "Tinggi Kerucut = " .$tinggiKerucut. "<br>";
echo "Luas alas kerucut: " . $luasAlas . " satuan persegi<br>";
echo "Luas permukaan kerucut: " . $luasPermukaan . " satuan persegi<br>";
?>
</body>
</html>