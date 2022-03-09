<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = rand(1,20);
    $s = rand(1,20);
    $d = rand(1,20);
    $f = rand(1,20);
    $g = rand(1,20);
    $x = ($a+$s+$d+$f+$g);
    $sr = ($x / 5);
    $aw = ($a + 41);
    $sw = ($s + 41);
    $dw = ($d + 41);
    $fw = ($f + 41);
    $gw = ($g + 41);
    $ae = chr($aw);
    $se = chr($sw);
    $de = chr($dw);
    $fe = chr($fw);
    $ge = chr($gw);

    echo "<br><br>Pierwsza liczba wylosowana to: $a";
     if($a%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";

    echo "<br><br>Druga liczba wylosowana to: $s";
     if($s%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";

    echo "<br><br>Trzecia liczba wylosowana to: $d";
     if($d%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";

    echo "<br><br>Czwarta liczba wylosowana to: $f";
     if($f%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";

    echo "<br><br>Piąta liczba wylosowana to: $g";
     if($g%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";

    echo "<br><br>Suma liczb to: $x";
    echo "<br>Średnia arytmetyczna liczb to: $sr";
    echo "<br>$ae $se $de $fe $ge"

    //Kacper Kuśmierczyk 3gg
    ?>
</body>
</html>