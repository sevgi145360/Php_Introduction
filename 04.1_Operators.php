<?php
$a = 10;
$b = 3;
$c = $a%$b+$a/$b;
echo $c;
//Aritmetik Operatör
echo "<hr>";
$x =5;
$x +=3;
$x *=2;
echo $x;
//Atama Operatörleri
echo "<hr>";
$d =5;
$e ="5";
if ($d === $e)
{
    echo "Eşit";
}
else 
{
    echo "Eşit Değil";
}
//Karşılaştırma Operatörleri : $d integer (sayı), $e string (metin).Tipleri farklı olduğu için eşit değildir.
echo "<hr>";
$f =7;
$g =2;
$h =10;
if ($f > $g && $h > $f)
{
    echo "Koşul Doğru";
}
else
{
    echo "Koşul Yanlış";
}
//Mantıksal Operatörler
echo "<hr>";
$k =6;
echo $k++;
echo "<br>";
echo ++$k;
//Artırma/Azaltma Operatörü
echo "<hr>";
$l = array("m" => 1, "n" => 2);
$p = array("n" => 2, "m" => 1);
if ($l == $p) 
    echo "Eşit";
if ($l === $p) 
    echo "Tam eşit";
//Dizi Operatörü
echo "<hr>";
$ad = "Sevgi";
$soyad = "Uzun";
$mesaj = "Merhaba " . $ad . " " . $soyad . "!";
echo $mesaj;
//String Birleştirme
echo "<hr>";
$aa = true && false;
$bb = true and false;
var_dump($aa, $bb);
//Mantıksal Öncelik
echo "<hr>";
echo 5 <=> 10;
echo 10 <=> 10;
echo 15 <=> 10;
//Uzay Gemisi Operatörü (<=>: 5 <=> 10 → -1 (soldaki küçük), 10 <=> 10 → 0 (eşit),15 <=> 10 → 1 (soldaki büyük)
echo "<hr>";
$aaa = 5;
$bbb = 2;
$ccc = $aaa++ + --$bbb * 3;
echo $ccc;
//Karma Operatör Uygulaması
echo "<hr>";
//NOt:Operatörlerin öncelik sırası çok önemlidir.
// === kullanmak hataları azaltır.
// . string birleştirme için kullanılır, + değil.
// and / && farkı öncelik sıralamasından kaynaklanır.
?>