<?php
//1.Basit Indeskli Dizi
$meyveler=array("Elma", "Muz", "Kivi");
echo $meyveler[2];
echo "<br>";
//2.Dizi Elemanına Erişim
$renkler=["kırmızı", "mavi", "yeşil"];
print_r ($renkler[2]);
echo "<br>";
//3.Dizinin Uzunluğu
$sehirler=["istanbul", "Ankara","Tokat", "Erzurum","İzmir"];
print_r (count($sehirler));
echo "<br>";
//4.Eleman Ekleme
array_push($sehirler,"Adana");
print_r ($sehirler);
echo "<br>";
//5.Eleman Silme
unset ($sehirler[1]);
print_r ($sehirler);
echo "<hr>";
$sebzeler=["domates","soğan","patates","ıspanak"];
print_r ($sebzeler);
echo "<br>";
array_push($sebzeler,"pırasa");
print_r ($sebzeler);
echo "<br>";
unset ($sebzeler[0]);
print_r ($sebzeler);
echo "<hr>";
//6.1.Foreach ile Dolaşma
$ogrenciler=[
    "Ahmet"=>85,
    "Ayşe"=>92,
    "Mehmet"=>74,
    "Elif"=>100
];
foreach ($ogrenciler as $ad=>$not){
    echo "Öğrenci:$ad - Notu:$not<br>";
}
echo "<hr>";
//6.2.Foreach ile Dolaşma
$ürün=[
    "pantolon"=>70,
    "elbise"=>95,
    "etek"=>85,
    "ayakkabı"=>50
];
foreach ($ürün as $ad=>$fiyat){
    echo "Ürün: $ad - Fiyatı: $fiyat<br>";
}
echo "<hr>";
/*7.Çok Boyutlu Dizi
Aşağıdaki yapıya sahip 2 boyutlu dizi oluştur:
Öğrenciler: ad, soyad, not
Tüm öğrencilerin ad ve notlarını yazdır.*/
$oogrenciler=[
    [
        "ad"=>"Veli",
        "soyad"=>"Yilmaz",
        "not"=>85
    ],
    [
        "ad"=>"Sevgi",
        "soyad"=>"uzun",
        "not"=>98
    ],
    [
        "ad"=>"Naz",
        "soyad"=>"Sen",
        "not"=>80
    ]

];
foreach($oogrenciler as $oogrenci){
    echo "Öğrenci:" . $oogrenci["ad"] . " - Notu:" . $oogrenci["not"]. "<br>";
}
echo "<hr>";
/*8.Dizi Sıralama:
Sayılardan oluşan bir diziyi önce küçükten büyüğe (sort), sonra büyükten küçüğe (rsort) sırala*/
$sayilar=[42,7,99,15,60,32,78];
echo "Orijinal:";
print_r($sayilar);
echo "<br>";
//Küçükten Büyüğe
sort($sayilar);
echo "Küçükten Büyüğe(Sort):";
Print_r($sayilar);
echo "<br>";
//Büyükten Küçüğe
rsort($sayilar);
echo "Büyükten Küçüğe (rsort)";
print_r($sayilar);
echo "<hr>";
/*9.Anahtar–Değer Değiştirme:
İlişkisel bir dizinin sadece anahtarlarını (array_keys) ve sadece değerlerini (array_values) ayrı dizilere al ve yazdır.*/
$ogrenciNotlari=[
    "Ahmet"=>85,
    "Betül"=>78,
    "Mehmet"=>95,
    "Elif"=>60,
];
$anahtarlar=array_keys($ogrenciNotlari);
$degerler=array_values($ogrenciNotlari);
echo "Anahtarlar:";
print_r($anahtarlar);
echo "<br>";
echo "Değerler:";
print_r($degerler);
echo "<hr>";
/*10.Dizi Birleştirme:
İki ayrı diziyi (array_merge) ile birleştirip tek bir dizi oluştur.*/
$a=[1,2,3];
$b=[4,5];
//Numeric anahtarlı dizi birleştirme
$birlesik=array_merge($a,$b);
echo "Birleştirilmiş(Numeric):";
print_r($birlesik);
echo "<br>";
//İlişkisel dizilerde davranış
$x=["a"=> 0, "b"=>20];
$y=["b"=>30, "c"=>40];
$assoc=array_merge($x,$y);
echo "Birleştirilmiş(Associative):";
print_r($assoc);
echo "<br>";
// Farklı alternatif: + operatörü (union) - solun anahtarlarını korur
$union=$x+$y;
echo "Union Operatörü ile:";
print_r($union);
echo "<hr>";
/*11.Filtreleme:
Bir dizide 50’den büyük sayıları array_filter ile bul ve yazdır.*/
$sayilarr=[10,55,67,25,6,97,54,68,79];
//callback ile filtre
$buyuk50=array_filter($sayilarr, function($v){
    return $v>50;
});
echo "50'den büyükler(Orijinal Anahtarlarla):";
print_r($buyuk50);
echo "<br>";
//Eğer istersen reindexlemek(indexlerin yeniden 0’dan başlayarak sıralanması) için array_values kullan
$buyuk50_reindexed=array_values($buyuk50);
echo "50'den büyükler(reindexed):";
print_r($buyuk50_reindexed);
/*NOT:İlişkisel dizilerde reindexleme yapılmaz, çünkü anahtarlar özel isimlerdir.Eğer sadece değerleri alıp 0,1,2... şeklinde yeni bir dizi istiyorsan array_values() kullanırsın.*/
echo "<hr>";
/*12.Haritalama (Map):
Bir dizideki her sayıyı 2 ile çarpıp yeni bir dizi döndüren array_map örneği hazırla.*/
$sayilarrr=[1,2,3,10,15];
$ikikat=array_map(function($v){
    return$v*2;
}, $sayilarrr);
echo "Orijinal:";
print_r($sayilarrr);
echo "<br>";
echo "İki Katı:";
print_r($ikikat);
echo "<hr>";
/*13.Arama:
Bir dizide aranan değerin olup olmadığını in_array ve indeksini array_search ile kontrol et.
Amaç: Bir dizide aranan değerin olup olmadığını in_array ile kontrol et ve indeksini array_search ile bul.*/
$dizi=["elma","armut","çilek","muz"];
$varMi=in_array("çilek", $dizi); //true-false
echo "Çilek var mı?" . ($varMi ? "Evet":"Hayır") . PHP_EOL;
echo "<br>";
//indexini bul(array_search false dönebilir=>strict kontrol şart)
$index = array_search("çilek", $dizi);
if ($index !== false) {
    echo "Çilek dizide index:" . $index . PHP_EOL;
} 
else {
    echo "Çilek bulunamadı." . PHP_EOL;
}
echo "<br>";
// Dikkat: array_search 0 döndürebilir; bu yüzden === false ile karşılaştır
$dizi2 = ["sifir", "bir", "iki"];
$index0 = array_search("sifir", $dizi2);
var_dump($index0); // int(0)
echo "<br>";
var_dump($index0 === false); // bool(false) -> yani bulundu
echo "<hr>";
/*14.Reduce Kullanımı:
Bir sayı dizisinin toplamını array_reduce fonksiyonu ile hesapla.*/
$sayilarrrr=[5,10,15,20];
$toplammm=array_reduce($sayilarrrr, function($carry,$item){
    return $carry + $item;
},0);
echo "Toplam:$toplammm";
echo "<hr>";
/*15.Custom Sort:
Kendi tanımladığın bir fonksiyonla (usort) diziyi özel bir kurala göre sırala (örneğin string uzunluğuna göre).*/
$kelimeler=["armut", "elma","çilek","muz","karpuz"];
//Uzunluğa göre artan sırala
usort($kelimeler, function($a,$b){
    return strlen($a) <=> strlen($b);
});
echo "Uzunluğa göre artan:";
print_r($kelimeler);
echo "<br>";
//Eğer anahtarları korumak istiyorsan uasort kullan
$assoc = ["k1" => "armut", "k2"=> "elma", "k3" => "karpuz"];
uasort($assoc, function($a,$b){
    return strlen($a) <=> strlen($b);
});
echo "Anahtarları koruyarak sıralama (uasort):";
print_r($assoc);
echo "<hr>";
?>