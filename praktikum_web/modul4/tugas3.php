<?php
// Mendapatkan bulan saat ini (dalam bentuk angka)
$currentMonth = date('n');

// Inisialisasi variabel untuk menyimpan jumlah hari dalam bulan
$daysInMonth = 0;

switch ($currentMonth) {
    case 1: // Januari
    case 3: // Maret
    case 5: // Mei
    case 7: // Juli
    case 8: // Agustus
    case 10: // Oktober
    case 12: // Desember
        $daysInMonth = 31;
        break;

    case 4: // April
    case 6: // Juni
    case 9: // September
    case 11: // November
        $daysInMonth = 30;
        break;

    case 2: // Februari
        // Periksa apakah tahun ini kabisat atau bukan
        $currentYear = date('Y');
        if ((($currentYear % 4 == 0) && ($currentYear % 100 != 0)) || ($currentYear % 400 == 0)) {
            $daysInMonth = 29; // Tahun kabisat, Februari memiliki 29 hari
        } else {
            $daysInMonth = 28; // Bukan tahun kabisat, Februari memiliki 28 hari
        }
        break;

    default:
        echo "Bulan tidak valid.";
        break;
}

echo "Jumlah hari dalam bulan ini adalah: " . $daysInMonth . " hari.";
?>
