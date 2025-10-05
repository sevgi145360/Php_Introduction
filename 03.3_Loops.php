<?php
$sayi=1;
while($sayi<=5)
{
    echo "Sayı:" .$sayi . "<br>";
    $sayi++;
}
echo "<hr>";
$meyveler=array("elma", "armut", "muz", "karpuz");
$i=0;
while($i<count($meyveler))
{
    echo $meyveler[$i] . "<br>";
    $i++;
}
echo "<hr>";
$sayilar=1;
do
{
    echo "Sayı:" .$sayilar . "<br>";
    $sayilar++;
}
while($sayilar<=5);
echo "<hr>";
/*Özetle:
Döngü Türü-Kullanım Amacı-Örnek
for-            Belirli sayıda tekrarlanan işlem-     1’den 100’e kadar toplama
while-          Şart sağlandıkça tekrarlama-          Çift sayılar
do…while-       En az 1 kez çalıştırma-               1–5 arası yazdırma
foreach-        Dizi elemanlarını gezme-              Meyve listesi
break/continue- Döngüyü durdurma veya atlama-         5’i atla, 8’de bitir*/
?>