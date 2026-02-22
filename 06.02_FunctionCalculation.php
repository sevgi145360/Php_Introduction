<?php
function hesapMakinesi($sayi1, $sayi2, $islem)
{
    switch ($islem)
    {
        case '+':
            return $sayi1 + $sayi2;
        case '-':
            return $sayi1 - $sayi2;
        case '*':
            return $sayi1 * $sayi2;
        case '/':
            if ($sayi2 == 0) {
                return "Hata: Sıfıra bölme yapılamaz!";
            }
            return $sayi1 / $sayi2;
        default:
            return "Geçersiz işlem türü!";
    }
}
// Kullanım örnekleri:
echo hesapMakinesi(10, 5, '+');
echo "<br>";
echo hesapMakinesi(10, 5, '-');
echo "<br>";
echo hesapMakinesi(10, 5, '*');
echo "<br>";
echo hesapMakinesi(10, 2, '/');
echo "<br>";
echo hesapMakinesi(10, 0, '/');
?>