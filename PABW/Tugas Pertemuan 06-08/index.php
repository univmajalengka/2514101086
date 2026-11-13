
<?php
function hitungDiskon($totalBelanja) {
    $diskon = 0;

    if ($totalBelanja >= 100000) {
        $diskon = 0.10 * $totalBelanja;
    } elseif ($totalBelanja >= 50000) {
        $diskon = 0.05 * $totalBelanja;
    }

    return $diskon;
}

$totalBelanja = 135000;
$diskon = hitungDiskon($totalBelanja);
$totalBayar = $totalBelanja - $diskon;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pangandaran Discount</title>

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: 'Trebuchet MS', Arial, sans-serif;
    background: #fff8ed;
    color: #31566a;
}

.navbar {
    padding: 22px 8%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 20px;
    font-weight: bold;
    color: #247c91;
}

.logo span {
    color: #f19b69;
}

.navbar small {
    color: #7b9ca5;
}

.container {
    max-width: 900px;
    margin: 35px auto;
    padding: 20px;
}

.hero {
    width: 100%;
    background: linear-gradient(135deg, #bce8e8, #d9f1ed);
    border-radius: 28px;
    padding: 45px 30px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.sun {
    width: 65px;
    height: 65px;
    background: #ffc77d;
    border-radius: 50%;
    margin: 0 auto 18px;
    box-shadow: 0 0 30px #ffdb9b;
}

.hero h1 {
    font-size: 34px;
    margin: 0;
    color: #286b7d;
}

.hero p {
    color: #527e88;
    margin-bottom: 0;
}

.wave {
    font-size: 35px;
    margin-top: 20px;
    letter-spacing: 8px;
}

.calculator {
    background: white;
    width: 100%;
    max-width: 550px;
    margin: -15px auto 0;
    position: relative;
    padding: 30px;
    border-radius: 24px;
    box-shadow: 0 12px 35px rgba(69, 115, 122, 0.10);
}
.calculator h2 {
    text-align: center;
    margin-top: 0;
    color: #347d8d;
}

.subtitle {
    text-align: center;
    color: #91a9ad;
    font-size: 14px;
    margin-bottom: 25px;
}

.item {
    background: #f5faf8;
    padding: 18px;
    border-radius: 15px;
    margin-bottom: 13px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.item span {
    color: #78949a;
    font-size: 14px;
}

.item strong {
    color: #326e7d;
}

.diskon {
    background: #fff2e6;
}

.diskon strong {
    color: #e9955e;
}

.total {
    background: #347d8d;
    color: white;
    padding: 23px;
    border-radius: 17px;
    text-align: center;
    margin-top: 20px;
}

.total p {
    margin: 0 0 10px;
    color: #d7eeee;
}

.total h2 {
    color: white;
    font-size: 29px;
    margin: 0;
}

.footer {
    text-align: center;
    color: #91a9ad;
    font-size: 13px;
    margin-top: 30px;
}

.hero,
.calculator {
    width: 100%;
    max-width: 550px;
    margin-left: auto;
    margin-right: auto;
}

</style>
</head>

<body>


<div class="container">

    <section class="hero">
        <div class="sun"></div>
        <h1>Little Beach Savings</h1>
        <p>Belanja hemat, liburan tetap menyenangkan!</p>
        <div class="wave">〰 〰 〰</div>
    </section>

    <section class="calculator">
        <h2>Perhitungan Diskon</h2>
        <p class="subtitle">
            Yuk, lihat berapa banyak yang bisa kamu hemat!
        </p>

        <div class="item">
            <span>Total Belanja</span>
            <strong>Rp <?= number_format($totalBelanja, 0, ',', '.') ?></strong>
        </div>

        <div class="item diskon">
            <span>Diskon Kamu ✨</span>
            <strong>Rp <?= number_format($diskon, 0, ',', '.') ?></strong>
        </div>

        <div class="total">
            <p>Total yang Harus Dibayar</p>
            <h2>Rp <?= number_format($totalBayar, 0, ',', '.') ?></h2>
        </div>
    </section>


</div>

</body>
</html>
