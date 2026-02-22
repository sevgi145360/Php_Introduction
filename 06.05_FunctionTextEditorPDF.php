<?php
require("fpdf.php");
function metinDuzenle($metin, $islem) 
{
    switch ($islem) 
    {
        case 'kalin':
            return "**" . $metin . "**"; // PDF için HTML kaldırıldı
        case 'italik':
            return "*" . $metin . "*";   // PDF uyumlu hale getirildi
        case 'buyuk':
            return mb_strtoupper($metin);
        case 'kucuk':
            return mb_strtolower($metin);
        case 'ters':
            return strrev($metin);
        case 'kelime':
            return "Kelime Sayısı: " . str_word_count($metin);
        default:
            return $metin;
    }
}
$sonuc = "";
// Düzenleme işlemi
if (isset($_POST['duzenle'])) 
{
    $metin = $_POST['metin'];
    $islem = $_POST['islem'];
    $sonuc = metinDuzenle($metin, $islem);
}
// PDF indirme işlemi
if (isset($_POST['pdf']))
{
    $icerik = $_POST['metin'];
    // HTML etiketleri PDF içinde sorun çıkaracağı için temizleniyor
    $icerik = strip_tags($icerik);
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "", 12);
    $pdf->MultiCell(0, 10, $icerik);
    $pdf->Output("D", "metin.pdf");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Metin Düzenleyici + PDF</title>
<style>
    body { font-family: Arial; background: #eef; display: flex; justify-content: center; margin-top: 40px; }
    .kutu 
    {
        background: white; padding: 25px; width: 480px; border-radius: 10px;
        box-shadow: 0 0 10px #888;
    }
    textarea { width: 100%; height: 140px; padding: 10px; font-size: 15px; margin-bottom: 15px; }
    select, button { width: 100%; padding: 10px; margin-top: 8px; font-size: 15px; cursor: pointer; }
    .sonuc { background: #fafafa; padding: 12px; border-radius: 5px; margin-top: 20px; }
</style>
</head>
<body>
<div class="kutu">
    <h2>Metin Düzenleyici + PDF</h2>
    <form method="POST">
        <textarea name="metin" required><?php 
            echo isset($_POST['metin']) ? htmlspecialchars($_POST['metin']) : "";
        ?></textarea>
        <select name="islem">
            <option value="kalin">Kalın Yap (**text**)</option>
            <option value="italik">İtalik Yap (*text*)</option>
            <option value="buyuk">Büyük Harf</option>
            <option value="kucuk">Küçük Harf</option>
            <option value="ters">Metni Ters Çevir</option>
            <option value="kelime">Kelime Sayısı</option>
        </select>
        <button type="submit" name="duzenle">Düzenle</button>
        <button type="submit" name="pdf">PDF Olarak İndir</button>
    </form>
    <?php if ($sonuc): ?>
        <div class="sonuc">
            <strong>Düzenlenmiş Metin:</strong><br><br>
            <?php echo nl2br(htmlspecialchars($sonuc)); ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>