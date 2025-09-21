<?php
$ad="Mehmet";
$soyadi=" Kahraman";
echo $ad;
echo $soyadi;
echo "<hr>";
echo $ad;
echo "<br>";
echo $soyadi;
echo "<hr>";
$metin="Merhaba Ben:$ad $soyadi";
echo $metin;
echo "<hr>";
$metin2="Merhaba Ben:{$ad} {$soyadi}";
echo $metin2;
echo "<hr>";
$sonuc=$ad.$soyadi;
$sonuc2=$ad." ".$soyadi;
echo $sonuc;
echo "<hr>";
echo $sonuc2;
echo "<br>";
echo "<hr>";
// Referansa Bagli Deger Atama, Miras Alma
$a=5;
$b=$a;
echo "A'nın Değeri:{$a}";
echo "<br>";
echo "B'nın Değeri:{$b}";
echo "<br>";
echo "<hr>";
$a=10;
echo "A'nın Yeni Değeri:{$a}";
echo "<br>";
echo "B'nin Yeni Değeri:{$b}";
/* Veri Tipleri
String= Metin İfadeleri
Integer= Tamsayılar(+,-)
Float/Double= Ondalıklı Sayılar
Boolean= D/Y (Mantıksal İfadeler)
Array= Tek değişkende birden çok değeri tutar
Null= Boş Değer
*/
?>