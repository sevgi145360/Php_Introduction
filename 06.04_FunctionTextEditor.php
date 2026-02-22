<?php

function metinDuzenle($metin, $islem) {

    switch ($islem) {

        case 'kalin':
            return "<strong>$metin</strong>";

        case 'italik':
            return "<em>$metin</em>";

        case 'buyuk':
            return mb_strtoupper($metin);

        case 'kucuk':
            return mb_strtolower($metin);

        case 'ters':
            return strrev($metin);

        case 'kelime_sayisi':
            return "Kelime Sayısı: " . str_word_count($metin);

        default:
            return $metin;
    }
}

$sonuc = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $metin = $_POST["metin"];
    $islem = $_POST["islem"];
    $sonuc = metinDuzenle($metin, $islem);
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>PHP Metin Düzenleyici</title>
<style>
    body {
        font-family: Arial;
        background: #f4f4f4;
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }
    .kutu {
        width: 450px;
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px #ccc;
    }
    textarea {
        width: 100%;
        height: 120px;
        padding: 10px;
        margin-bottom: 15px;
        font-size: 15px;
    }
    select, button {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        font-size: 15px;
    }
    .sonuc {
        margin-top: 20px;
        font-size: 18px;
        background: #f1f1f1;
        padding: 12px;
        border-radius: 5px;
    }
</style>
</head>
<body>

<div class="kutu">
    <h2>Metin Düzenleyici</h2>

    <form method="POST">
        <textarea name="metin" placeholder="Düzenlemek istediğiniz metni yazın..." required></textarea>

        <select name="islem">
            <option value="kalin">Kalın Yap</option>
            <option value="italik">İtalik Yap</option>
            <option value="buyuk">Büyük Harf</option>
            <option value="kucuk">Küçük Harf</option>
            <option value="ters">Metni Ters Çevir</option>
            <option value="kelime_sayisi">Kelime Sayısı</option>
        </select>

        <button type="submit">Düzenle</button>
    </form>

    <?php if ($sonuc): ?>
    <div class="sonuc">
        <strong>Sonuç:</strong> <br><br>
        <?= $sonuc ?>
    </div>
    <?php endif; ?>
</div>

</body>
</html>
