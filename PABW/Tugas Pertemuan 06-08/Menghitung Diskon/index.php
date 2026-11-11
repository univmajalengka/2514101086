
<?php

// Fungsi untuk menghitung diskon
function hitungDiskon($totalBelanja) {
    $diskon = 0;

    if ($totalBelanja >= 100000) {
        $diskon = 0.1 * $totalBelanja;
    } elseif ($totalBelanja >= 50000) {
        $diskon = 0.05 * $totalBelanja;
    }

    return $diskon;
}

// Contoh penggunaan fungsi
$totalBelanja = 135000;

// Memanggil fungsi hitungDiskon
$diskon = hitungDiskon($totalBelanja);

// Menghitung total yang harus dibayar
$totalBayar = $totalBelanja - $diskon;

// Menampilkan hasil
echo "Total belanja: Rp. " . $totalBelanja . "<br>";
echo "Diskon: Rp. " . $diskon . "<br>";
echo "Total yang harus dibayar: Rp. " . $totalBayar . "<br>";

?>

