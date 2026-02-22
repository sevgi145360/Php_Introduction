<?php
//Fonksiyonlar (functions), kod tekrarını önlemek ve daha düzenli bir yapı oluşturmak için kullanılır.
//1. Basit Fonksiyon Örneği
function selamVer()
{
    echo "Merhaba, Hoş Geldin!";
}
selamVer();
echo "<hr>";
//2. Parametre Alan Fonksiyon
function topla($a, $b)
{
    return $a+$b;
}
echo topla(6,9);
echo "<hr>";
//3.Varsayılan Parametreli Fonksiyon
function selamla($isim="Ziyaretçi")
{
    echo "Merhaba, $isim!";
}
selamla();
echo "<br>";
selamla("Sevgi");
echo "<hr>";
//4. Dizi Döndüren Fonksiyon
function bilgiler() 
{
    return ["ad"=>"Ahmet", "yas"=>25, "meslek"=>"Yazılımcı"];
}
$kisi=bilgiler();
echo $kisi["ad"];
echo "<br>";
echo $kisi["yas"];
echo "<hr>";
//5.Fonksiyon İçinde Döngü Kullanımı
function say($limit) 
{
    for ($i=1; $i<=$limit; $i++) 
    {
        echo $i . " ";
    }
}
say(5);
echo "<br>";
function sayy($limitt) 
{
    for ($i=5; $i>=$limitt; $i--) 
    {
        echo $i . " ";
    }
}
sayy(1);
echo "<hr>";
//6.İç İçe Fonksiyon Kullanımı
function kare($sayi) 
{
    return $sayi*$sayi;
}
function toplamKare($a,$b)
{
    return kare($a)+kare($b);
}
echo toplamKare(2,3);
echo "<hr>";
//7. Tip Belirterek Fonksiyon
function carp(float $a, float $b): float 
{
    return $a*$b;
}
echo carp(2.5, 4.2);
echo "<hr>";
//8. Anonim (İsimsiz) Fonksiyon
$selamlaa=function($isimm) 
{
    return "Merhaba $isimm!";
};
echo $selamlaa("Sevgi");
echo "<hr>";
//9. Recursive (Kendi Kendini Çağıran) Fonksiyon
function faktoriyel($n) 
{
    if ($n==0) 
    {
        return 1;
    } else 
    {
        return $n*faktoriyel($n-1);
    }
}
echo faktoriyel(5);
echo "<hr>";
//10. Çoklu Parametre Alan Fonksiyon (spread operator)
function toplam(...$sayilar)
{
    return array_sum($sayilar);
}
echo toplam(1, 2, 3, 4, 5);
?>