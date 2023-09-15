<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas1</title>
</head>
<body>
  <?php
    $saldoAwal = 2000000;
    $bunga = 0.03;
    $bulan = 11;
    $saldoAkhir = ($saldoAwal * $bunga * $bulan) + $saldoAwal;

    echo "Saldo Awal = Rp" .$saldoAwal.",- <br>";
    echo "Bunga = " .$bunga. "/bulan <br>";
    echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp".$saldoAkhir. ",-";
  ?>
</body>
</html>