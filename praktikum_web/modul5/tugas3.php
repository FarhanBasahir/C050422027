<?php
$count = 0; // Inisialisasi variabel count untuk menyimpan jumlah bilangan

for ($i = 3; $i <= 127; $i++) {
    if ($i % 6 === 0) {
        $count++;
    }
}

echo "Banyaknya bilangan bulat mulai dari 3 s/d 127 yang merupakan kelipatan 6 adalah: " . $count;
?>
