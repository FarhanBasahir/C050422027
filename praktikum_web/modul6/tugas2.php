<?php
// Array asosiatif awal
$fruits = array(
    "Apel" => 10,
    "Pisang" => 5,
    "Ceri" => 8,
    "Kurma" => 3,
    "Blueberry" => 12
);

// 1. array_push() - Menambahkan elemen baru pada akhir array
array_push($fruits, "Nanas", 7);

// 2. array_pop() - Menghapus dan mengembalikan elemen terakhir dari array
$lastFruit = array_pop($fruits);

// 3. array_shift() - Menghapus dan mengembalikan elemen pertama dari array
$firstFruit = array_shift($fruits);

// 4. array_unshift() - Menambahkan satu atau lebih elemen di awal array
array_unshift($fruits, "Anggur", 4);

// 5. array_merge() - Menggabungkan dua atau lebih array
$additionalFruits = array("kiwi" => 6, "lemon" => 9);
$mergedFruits = array_merge($fruits, $additionalFruits);

// Menampilkan hasil setelah modifikasi
echo "Array setelah penambahan, penghapusan, dan penggabungan:<br>";
print_r($fruits);
echo "<br><br>";

echo "Elemen terakhir dihapus: $lastFruit<br>";
echo "Elemen pertama dihapus: $firstFruit<br><br>";

echo "Array setelah penggabungan dengan array tambahan:<br>";
print_r($mergedFruits);
?>
