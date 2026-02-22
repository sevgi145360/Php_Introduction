<?php
// HTML + PHP Hesap Makinesi:Hesaplama fonksiyonu
function hesapla($s1, $s2, $islem) 
{
    switch ($islem) 
    {
        case '+':
            return $s1 + $s2;
        case '-':
            return $s1 - $s2;
        case '*':
            return $s1 * $s2;
        case '/':
            if ($s2 == 0) return "Hata: Sıfıra bölünemez!";
            return $s1 / $s2;
        default:
            return "Geçersiz işlem.";
    }
}
// Form gönderildiyse sonucu hesapla
$sonuc = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $sayi1 = $_POST["sayi1"];
    $sayi2 = $_POST["sayi2"];
    $islem = $_POST["islem"];
    $sonuc = hesapla($sayi1, $sayi2, $islem);
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>PHP Hesap Makinesi</title>
<style>
    body 
    {
        font-family: Arial;
        background: #f9f9f9;
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }
    .kutu 
    {
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        width: 300px;
        box-shadow: 0 0 10px #ddd;
    }
    button 
    {
        width: 60px;
        height: 45px;
        margin: 5px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        background: #007bff;
        color: white;
    }
    button:hover 
    {
        background: #0056b3;
    }
    .sonuc 
    {
        margin-top: 15px;
        font-size: 20px;
        background: #f1f1f1;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }
</style>
</head>
<body>
<div class="kutu">
    <h2>Hesap Makinesi</h2>
    <form method="POST">
        <input type="number" name="sayi1" placeholder="1. Sayı" required style="width:100%; padding:10px; margin-bottom:10px;">
        <input type="number" name="sayi2" placeholder="2. Sayı" required style="width:100%; padding:10px; margin-bottom:10px;">
        <div style="text-align:center;">
            <button type="submit" name="islem" value="+">+</button>
            <button type="submit" name="islem" value="-">−</button>
            <button type="submit" name="islem" value="*">×</button>
            <button type="submit" name="islem" value="/">÷</button>
        </div>
    </form>
    <?php if ($sonuc !== ""): ?>
    <div class="sonuc">
        <strong>Sonuç:</strong> <?= $sonuc ?>
    </div>
    <?php endif; ?>
</div>
</body>
</html>