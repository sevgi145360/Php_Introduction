<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Örneği</title>
</head>
<body>
<form method="GET">
    İsim: <input type="text" name="isim">
    <button type="submit">Gönder</button>
</form>
<?php
if(isset($_GET['isim']))
{
    $ad=$_GET['isim'];
    echo "Hoşgeldiniz," .$ad. "!";
}
?>
</form>
</body>
</head>
