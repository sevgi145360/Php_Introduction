<?php
$meyveler=array("Muz", "Elma", "Kiraz", "Karpuz", "Portakal", "Kavun");
echo $meyveler[1];
echo "<br>";
echo $meyveler [3];
echo "<br>";
echo count($meyveler);
echo "<hr>";
$saydir=count($meyveler);
echo $saydir;
echo "<hr>";
//Arrayleri baştan sonra alt alta yazdırma
for($i=0; $i<$saydir; $i++)
{
    echo  $meyveler[$i];
    echo "<br>";
}
echo "<hr>";
//Arrayleri sondan başa alt alta yazdırma
for($i=5; $i>=0; $i--)
{
    echo $meyveler[$i];
    echo "<br>";
}
echo "<hr>";
$sayisalDizi=array(10,20,30,40);
echo $sayisalDizi[0];
echo "<br>";
array_push($sayisalDizi,50); //Yeni Veri Ekleme
//unset($sayisalDizi[1]); //var olan bir indeksi silme
print_r ($sayisalDizi); //Dizinin İçeriğini verir
echo "<br>";
array_push($sayisalDizi,60);
print_r ($sayisalDizi);
echo "<hr>";
//MixDizi
$mixdizi=array("Meyve",20,2.40);
print_r ($mixdizi);
echo "<hr>";
$anahtarDizi=array("Ali"=>"31","Yeliz"=>"40","Mehmet"=>"51");
echo $anahtarDizi["Ali"];
echo "<hr>";
echo "Ali'nin Yaşı:" .$anahtarDizi["Ali"];
echo "<br>";
$anahtarDizi["Veli"]=60;
print_r ($anahtarDizi);
echo "<br>";
unset($anahtarDizi["Yeliz"]); //Silme İşlemi
print_r ($anahtarDizi);
?>