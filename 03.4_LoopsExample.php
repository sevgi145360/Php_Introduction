<?php
//1.For Döngüsü
for($i=0; $i<=10; $i++)
{
    echo $i."<br>";
}
echo "<hr>";
//2.For Döngüsü -Toplama İşlemi
$toplam=0;
for($j=1; $j<=100; $j++)
{
    $toplam=$toplam+$j;
}
echo "1'den 100'e kadar olan sayıların toplamı:" . $toplam;
echo "<hr>";
//3.While Döngüsü – Çift Sayılar
$s=0;
while ($s<=20){
    echo $s."<br>";
    $s +=2;
}
echo "<hr>";
//4.Do While Döngüsü - Sıralı Sayım_Geri Sayım
$d=1;
do{
    echo $d."<br>";
    $d++;
}
while ($d<=5);
echo "<hr>";
$a=5;
do{
    echo $a."<br>";
    $a--;
}
while ($a>=1);
echo "<hr>";

//5.Foreach Döngüsü – Dizi Elemanlarını Yazdırma
$meyveler=["Elma", "Armut", "Muz", "Çilek"];
foreach($meyveler as $meyve)
{
    echo $meyve."<br>";
}
//$meyveler dizisindeki her eleman sırayla $meyve değişkenine atanır.
echo "<hr>";
//6.İç İçe For Döngüsü – Çarpım Tablosu
for ($c=1; $c<=5; $c++)
{
    for($v=1; $v<=5; $v++)
    {
        echo  $c . "x" . $v . "=" . ($c * $v) . "<br>";
    }
    echo "<hr>";
}
  echo "<hr>";  
//7. Foreach Döngüsü – İlişkisel Dizi (Key–Value)
/*NOT:foreach ($dizi as $anahtar => $değer) şeklinde kullanılır.
$isim anahtarı, $not değeri temsil eder.*/
$ogrenciler=[
    "Ahmet"=> 85,
    "Ayşe"=>98,
    "Mehmet"=> 74
];
foreach ($ogrenciler as $isim=>$not){
    echo $isim . " adlı öğrencinin notu: " . $not . "<br>";
}
echo "<hr>"; 
//8. Break ve Continue Kullanımı
for ($k=1; $k<=10; $k++)
{
    if ($k==5)
    {
        continue;//5'i atla
    }
    if ($k==8)
    {
        break;//8'de döngüyü bitir
    }
    echo $k."<br>";
}
echo "<hr>";
//9. While Döngüsü - Faktöriyel Hesaplama
$n=5;
$faktoriyel=1;
$w=$n;
while ( $w>1)
{
    $faktoriyel *= $w; //faktoriyel = faktoriyel * w
    $w--;
}
echo "$n! = $faktoriyel";
echo "<hr>";
//10. For Döngüsü – 1’den 5’e kadar sayıları bir diziye eleman ekleme
$sayilarr=[];
for ($y=1; $y<=5; $y++)
{
    $sayilarr[]=$y;
}
print_r ($sayilarr);
?>