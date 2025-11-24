<?php
//1.Aritmetik Operatör
$a=15;
$b=4;
$sonuc=$a%$b+$a/$b;
echo $sonuc;
//Çözüm: $a % $b = 15 % 4 = 3 -$a / $b = 15 / 4 = 3.75 -3 + 3.75 ≈ 6.75
echo "<hr>";
//2. Atama Operatörü
$x=6;
$x+=8;
$x*=4;
$x-=8;
echo $x;
//Çözüm: İlk hali: 6 -$x += 8 → 14 -$x *= 4 → 56 - $x -= 8 → 48 - Sonuç: 48
echo "<hr>";
//3. Karşılaştırma Operatörleri
$a="5";
$b=5;
if ($a===$b) 
{
    echo "Aynı";
} else 
{
    echo "Farklı";
}
//Çözüm:$a === $b hem değer hem tip kontrol eder."5" (string) ≠ 5 (integer)Ekran çıktısı: Farklı
echo "<hr>";
//4. Mantıksal Operatör
$yas=25;
$mezun=true;
if ($yas>18 && $mezun==true)
{
    echo "Başvurabilir";
} 
else 
{
    echo "Başvuramaz";
}
//Çözüm:yas > 18 → true -mezun == true → true  -true && true → true Ekran çıktısı: Başvurabilir
echo "<hr>";
//5. Birlikte Kullanılan Artırma Operatörleri
$s=3;
$m=$s++ + ++$s;
echo $m;
//Çözüm:Başlangıç: $s = 3 -$s++ kullanımı → önce kullan, sonra artır-İşlem sırasında değer: 3-Sonra s = 4-++$s kullanımı → önce artır, sonra kullan-s = 5-İşlemde kullanılan değer: 5- $m = 3 + 5 = 8-Sonuç: 8
?>