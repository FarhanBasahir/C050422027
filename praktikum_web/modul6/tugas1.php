<?php
// Membuat array asosiatif
$fruits = array(
    "Apel" => 10,
    "Pisang" => 5,
    "Ceri" => 8,
    "Kurma" => 3,
    "Blueberry" => 12
);

// Fungsi untuk mencetak array
function printArray($arr) {
    foreach ($arr as $key => $value) {
        echo "$key: $value<br>";
    }
}

echo "Array asli:<br>";
printArray($fruits);

// Pengurutan berdasarkan kunci (key) secara ascending
ksort($fruits);
echo "<br>Array setelah diurutkan berdasarkan kunci secara ascending:<br>";
printArray($fruits);

// Pengurutan berdasarkan nilai (value) secara ascending
asort($fruits);
echo "<br>Array setelah diurutkan berdasarkan nilai secara ascending:<br>";
printArray($fruits);

// Pengurutan berdasarkan kunci (key) secara descending
krsort($fruits);
echo "<br>Array setelah diurutkan berdasarkan kunci secara descending:<br>";
printArray($fruits);

// Pengurutan berdasarkan nilai (value) secara descending
arsort($fruits);
echo "<br>Array setelah diurutkan berdasarkan nilai secara descending:<br>";
printArray($fruits);
?>
