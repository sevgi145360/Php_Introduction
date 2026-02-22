<?php
//Birden fazla if-elseif yerine switch kullanmak kodu sadeleştirir. 
//Günlerle ilgili Örnek
$gun = "Pazartesi";
switch ($gun) 
{
    case "Pazartesi":
        echo "Haftanın ilk günü!";
        break;

    case "Cuma":
        echo "Hafta sonu yaklaşıyor!";
        break;

    default:
        echo "Normal bir gün.";
}
echo "<br>";
//Sayı tanımlı olup olmadığını bulma
$sayi=1;
switch($sayi)
{
    case 1:
        echo "Bir";
        break;
    case 2:
        echo "İki";
        break;
    case 3:
        echo "Üç";
        break;
    default;
    echo "Tanımlı bir sayı bulunmamaktadır";
}
echo "<hr>";
//Renk tanımlı olup olmadığını bulma
$renk="pembe";
switch ($renk)
{
    case "kırmızı":
        echo "Renk Kırmızı";
        break;
    case "mavi":
        echo "Renk Mavi";
        break;
    default:
    echo "Bu renk tanımlı değil";
}
echo "<hr>";
//Birden Fazla Case İçin Tek Çalışma (Gruplama)
$gunn="Cumartesi";
switch($gunn)
{
    case "Cumartesi":
    case "Pazar":
        echo "Hafta sonu!";
        break;
    default:
       echo "Hafta içi";
}
echo "<hr>";
//Sayısal İşlemler***
$not=85;
switch (true) 
{
    case ($not>=90):
        echo "AA";
        break;
    case ($not>=80):
        echo "BA";
        break;
    case ($not>=70):
        echo "BB";
        break;
    default:
        echo "Kaldı";
}
?>