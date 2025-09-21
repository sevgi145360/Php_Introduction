<?php
//1.Metin değişkeni oluşturma
$ad="Sevgi";
echo "Merhaba, $ad!";
echo "<hr>";
//2.Sayısal işlem
$a=12;
$b=8;
$Toplama=$a+$b;
echo "A ile B Değerlerinin Toplamı:" .$Toplama;
echo "<hr>";
//3.Değişken türünü öğrenme
$isim="Sevgi";
$harf="AAA";
$sayi=60;
$yas=25.5;
$aktif=true;
echo var_dump($isim);
echo "<br>";
echo Var_dump($harf);
echo "<br>";
echo var_dump($sayi);
echo "<br>";
echo var_dump($yas);
echo "<br>";
echo var_dump($aktif);
echo "<hr>";
//4.Değer değiştirme
// İlk değer atama
$renk="Kırmızı";
echo "Renk:{$renk}";
echo "<br>";
// Değeri değiştirme
$renk="Mavi";
echo "Yeni Renk:{$renk}";
echo "<hr>";
//5.Dizide eleman erişimi
$meyveler=array("Elma", "Muz", "Çilek", "Karpuz");
echo $meyveler[2];
echo "<br>";
echo count($meyveler);
echo "<hr>";
//6.Anahtar-Değer dizisi
$kisi=[
    "ad"=>"Sevgi",
    "soyad"=>"Uzun",
    "yas"=>33,
];
echo $kisi["ad"];
echo "<br>";
echo $kisi["yas"];
echo "<hr>";
echo "<br>";
//7.Değişken birleştirme
$isim2="Sevgi";
$meslek="İşletmeci";
echo $isim2." bir ".$meslek."dir.";
//Sevgi bir İşletmecidir.
echo "<hr>";
//8.Değişkeni fonksiyon içinde kullanma
$isim3="Serhat";
function selamla(){
    global $isim3;
    echo "Merhaba"." ".$isim3."!";
}
selamla();
echo "<hr>";
//9.Sabit ve değişken farkı
define("SITE_ADI", "Benim Sitem");
$siteAdi="Sitem";
echo "Sabit:" .SITE_ADI. "<br>";
echo "Değişken:" .$siteAdi. "<br>";
// Değişkeni ise istediğimiz gibi değiştirebiliriz:
$siteAdi="Yeni Sitem";
echo "Değiştirilen Değişken:" .$siteAdi;
echo "<hr>";
//10.Değişkenin tanımlı olup olmadığını kontrol et
$mesaj="Merhaba PHP!";
if (isset($mesaj)){
    echo "Değişken Tanımlı:" . $mesaj;
}else{
    echo "Değişken Tanımlı Değil";
}
?>